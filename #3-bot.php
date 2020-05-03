<?php
$API_KEY = ""; 
define("API_KEY", $API_KEY);
function bot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents("php://input"));
if (isset($update->message)) {
    $message = $update->message;
    $from_id = $message->from->id;
    $chat_id = $message->chat->id;
    $message_id = $message->message_id;
    if (isset($message->text)) {
        $text = $message->text;
        if ($text == "/start") {
            bot("sendMessage", [
                "chat_id" => $chat_id,
                "text" => "ارسال username الخاص بك في instagram \n\n- مثال على ذالك : *@botlua*",
                "reply_to_message_id" => $message_id,
                "parse_mode" => "Markdown",
            ]);
        } elseif(strpos($text,"@") !== false){
            $text = str_replace("@","",$text);
            $api = file_get_contents("https://www.instagram.com/$text/?__a=1");
            if (!empty($api) and strpos($api,"Sorry, this page isn't available.") === false){
                $api = json_decode($api);
                bot("SendPhoto",[
                    "chat_id"=>$chat_id,
                    "photo"=>$api->graphql->user->profile_pic_url_hd,
                    "reply_to_message_id" => $message_id,
                    "caption"=>"- Name : `{$api->graphql->user->full_name}`\n- Bio : `{$api->graphql->user->biography}`\n- Follow : `{$api->graphql->user->edge_follow->count}`\n- Followed : `{$api->graphql->user->edge_followed_by->count}`\n- User Id : `{$api->graphql->user->id}`\n\n.",
                    "parse_mode" => "Markdown",
                ]);
            }else{
                bot("sendMessage", [
                    "chat_id" => $chat_id,
                    "text" =>"*~ حدث خطأ لا يوجد هاكذا مستخدم !*",
                    "reply_to_message_id" => $message_id,
                    "parse_mode" => "Markdown",
                ]);
            }
        }
    }
}

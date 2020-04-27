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
                "text" => "ارسل اسمك لكي ازخرفه .",
                "reply_to_message_id" => $message_id,
                "parse_mode" => "Markdown",
            ]);
        } else {
            $t = file_get_contents("https://tbot.website/api.php?text=" . urlencode($text));
            $t = json_decode($t);
            if (isset($t->ok) and $t->ok == true) {
                $newTExt = $t->newText;
                bot("sendMessage", [
                    "chat_id" => $chat_id,
                    "text" => $newTExt,
                    "reply_to_message_id" => $message_id,
                ]);
            } else {
                bot("sendMessage", [
                    "chat_id" => $chat_id,
                    "text" => $t->msg_error,
                    "reply_to_message_id" => $message_id,
                ]);
            }
        }
    }
}

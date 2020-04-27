<?php 
header('Content-type: application/json');
function Error_msg_json($text)
{
    echo json_encode(
        [
            "ok"=>false,
            "msg_error"=>$text
        ]
    );
}
if (isset($_GET)){
    if (isset($_GET["text"]) and !empty($_GET["text"]) and isset($_GET["name"]) and !empty($_GET["name"])){
        echo json_encode(
            [
                "ok"=>true,
                "text"=> $_GET["text"] . $_GET["name"]
            ]
        );
    }else{
        echo Error_msg_json("add ?text=keko&name=test");
    }
}else{
    echo Error_msg_json("only GET");
}

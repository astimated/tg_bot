<?php
$token = "5518770023:AAF_0KVst19rGkXU3jw0SEAyPbqgWOLNjEQ";
$chat_id = 760992162;

$textMessage = "Тестовое сообщение";
$textMessage = urlencode($textMessage);

$urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=" . $textMessage;

$result = file_get_contents($urlQuery);

print_r($result);

?>
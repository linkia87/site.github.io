<?php
# Принимаем запрос
$data = json_decode(file_get_contents('php://input'), TRUE);

#Проверка поступающих данных
/*
file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);
https://api.telegram.org/bot5153442200:AAEHlDCEFcHMr0ko9eHnGChuHm2_Bo4JHF4/setwebhook?url=https://dragik.ru/index.php
*/
# Переменные
$token = '5153442200:AAEHlDCEFcHMr0ko9eHnGChuHm2_Bo4JHF4';
$chat_id = $data['message']['chat']['id'];
$user_id = $data['message']['from']['id'];
$user_name = '@'.$data['message']['from']['username'];

$params = [
    'chat_id' => $chat_id,
    'text'    => $user_name
];
file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($params));

?>

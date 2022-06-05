<?php
define('TOKEN', '5377865435:AAGZksNgbWapY2DF9nCVSF0yeulIi_CPZhQ'); 
$chatId = '-723428456';

// Common
$cert       = $_POST['cert'];
$address    = $_POST['address'];

// Fly
$price      = $_POST['price'];
$flyName    = $_POST['fly-name'];
$addi1      = $_POST['addi1'];
$addi2      = $_POST['addi2'];
$duration   = $_POST['duration'];
$aeroplane  = $_POST['aeroplane'];
$currency   = $_POST['currency'] ?? 'леев';
$passengers = $_POST['passengers'];

$to      = 'aeroteam@pointer.global';
$subject = 'Заяка с сайта AeroTeam';
$message = '<html><body><strong>Имя</strong>: ' . $_POST['name'] . '<br /><strong>Телефон</strong>:' . $_POST['phone'] . '</body></html>';
$headers = 'From: robot@aeroteam.pointer.global' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
$method = 'sendMessage';
$tgMess = "**Заяка с сайта AeroTeam**:";
$tgMess .= "\nИмя: {$_POST['name']}";
$tgMess .= "\nТелефон: {$_POST['prefix']}" . "{$_POST['phone']}";

if ($address) {
    $tgMess .= "\n Адрес доставки: {$address}";
}

if ($cert) {
    $tgMess .= "\n Сертификат: {$cert}";
}

if ($flyName) {
    $tgMess .= "\n {$flyName}";
}

if ($passengers) {
    $tgMess .= "\n Пассажиров: {$passengers}";
}

if ($aeroplane) {
    $tgMess .= "\n Самолет: {$aeroplane}";
}

if ($duration) {
    $tgMess .= "\n Длительность: {$duration} минут";
}

if ($addi1) {
    $tgMess .= "\n {$addi1}";
}

if ($addi2) {
    $tgMess .= "\n {$addi2}";
}

if ($price) {
    $tgMess .= "\n Итоговая цена: {$price} " . $currency;
}

$send_data = [ 
        'text' => $tgMess,
        'parse_mode' => 'markdown'
        ];
$send_data['chat_id'] = $chatId;

$res = sendTelegram($method, $send_data);

header('Location: /?form_success=1');
die;

function sendTelegram($method, $data, $headers = [])
{
	$curl = curl_init();
	curl_setopt_array($curl, [
		CURLOPT_POST => 1,
		CURLOPT_HEADER => 0,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => 'https://api.telegram.org/bot' . TOKEN . '/' . $method,
		CURLOPT_POSTFIELDS => json_encode($data),
		CURLOPT_HTTPHEADER => array_merge(array("Content-Type: application/json"))
	]);
	$result = curl_exec($curl);
	curl_close($curl);
	return (json_decode($result, 1) ? json_decode($result, 1) : $result);
}
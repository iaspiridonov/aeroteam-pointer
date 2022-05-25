<?php
define('TOKEN', '5377865435:AAGZksNgbWapY2DF9nCVSF0yeulIi_CPZhQ'); 
if($_POST['action'] == 'smallFormZakaz') {
    $to      = 'aeroteam@pointer.global';
    $subject = 'Заказ сертификата';
    $message = '<html><body><strong>Сертификат</strong>: ' . $_POST['cert'] . '<br /><strong>Имя, Фамилия</strong>: ' . $_POST['name'] . '<br /><strong>Телефон</strong>:' . $_POST['prefix'] . $_POST['phone'] . '</body></html>';
    $headers = 'From: robot@aeroteam.pointer.global' . "\r\n" .
        'Content-type: text/html; charset=utf-8\r\n' .
        'X-Mailer: PHP mail script';

    mail($to, $subject, $message, $headers);
    $method = 'sendMessage';
	$send_data = [ 
			'text' => "**Заказ сертификата** \nСертификат: " . $_POST['cert'] . " \nИмя, Фамилия: " . $_POST['name'] . " \nТелефон: " . $_POST['prefix'] . $_POST['phone'],
			];
$send_data['chat_id'] = '-723428456';

$res = sendTelegram($method, $send_data);
    //$r=sendTelegram('sendMessage', array('chat_id' => '-723428456', 'text' => $message), '5377865435:AAGZksNgbWapY2DF9nCVSF0yeulIi_CPZhQ')
    header('Location: /?form_success=1');
    die;
}
if($_POST['action'] == 'consultation') {
    $to      = 'aeroteam@pointer.global';
    $subject = 'Заяка на получение консультации';
    $message = '<html><body><strong>Имя</strong>: ' . $_POST['name'] . '<br /><strong>Телефон</strong>:' . $_POST['phone'] . '</body></html>';
    $headers = 'From: robot@aeroteam.pointer.global' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    $method = 'sendMessage';
	$send_data = [ 
			'text' => "**Заявка на получение консультации для**: \nИмя: " . $_POST['name'] . " \nТелефон: " . $_POST['prefix'] . $_POST['phone'],
			'parse_mode' => 'markdown'
            ];
$send_data['chat_id'] = '-723428456';

$res = sendTelegram($method, $send_data);
    //$r=sendTelegram('sendMessage', array('chat_id' => '-723428456', 'text' => $message), '5377865435:AAGZksNgbWapY2DF9nCVSF0yeulIi_CPZhQ')
    header('Location: /?form_success=1');
    die;
}

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
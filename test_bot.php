<?php
mb_internal_encoding('UTF-8'); // Установка внутренней кодировки в UTF-8
mb_http_output('UTF-8'); // Установка кодировки UTF-8 входных данных HTTP-запроса
mb_http_input('UTF-8'); // Установка кодировки UTF-8 выходных данных HTTP-запроса
mb_regex_encoding('UTF-8'); // Установка кодировки UTF-8 для многобайтовых регулярных выражений 
$dbHost = 'localhost';
$dbName = 'aeroteam_poin_db';
$dbUser = 'aeroteam_user';
$dbPass = 'cjSUYayu2Gp2tggI';
$dbPort = '3306';

$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
$mysqli->set_charset("utf8mb4");
$data = json_decode(file_get_contents('php://input'), TRUE);
//пишем в файл лог сообщений
//file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);
//$a = $data['message'];
$data = $data['callback_query'] ? $data['callback_query'] : $data['message'];
//old '5354664156:AAFjPK6goaI_BQyssgSLXV02Y-sw4tVh4Bk'
define('TOKEN', '5236686901:AAFmh18crN4C-ddRtF2-IQLNV2FhQ5t38Ao');
$chat_id = $data['message'] ? $data['message'] ['chat'] ['id'] : $data['chat'] ['id'];
$message = mb_strtolower(($data['text'] ? $data['text'] : $data['data']),'utf-8');
if($data['text'] && $data['text'] !== '/start') {
	$result = $mysqli->query('SELECT * FROM telegram_users WHERE user_code LIKE "' . mb_strtoupper($data['text'], 'utf-8') . '"');
	if($result->num_rows){
		$row = $result->fetch_assoc();
		$message = '/auth_success';		
		$result = $mysqli->query('UPDATE telegram_users SET chat_id = "' . $chat_id . '" WHERE user_code LIKE "' . mb_strtoupper($data['text'], 'utf-8') . '"');
	} else {
		$message = '/auth_bad';
	}

	//file_put_contents('file.txt', print_r($message,1), FILE_APPEND);
}
if($message == '/menu') {
	$result = $mysqli->query('SELECT * FROM telegram_users WHERE chat_id LIKE "' . $chat_id . '"');
	if($result->num_rows){
		$row = $result->fetch_assoc();
	} 
}


switch ($message) {
    case 'pop':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Тарифы',
			
			];
    break;
	case '/begin':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Пожалуйста, введите код участника клуба',
			];
    break;
	case '/auth_success':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Добро пожаловать, ' . $row['user_name'],
			'reply_markup'  => [
				/*'resize_keyboard' => true,*/
				'inline_keyboard' => [
						[
							['text' => 'Проекты','callback_data' => '/projects'],
                        ],
                        [
                            ['text' => 'Чаты',"callback_data" => "/chats"],
                        ],
                        [
                            ['text' => 'Анонсы',"callback_data" => "/anounces",],
                        ],
                        [
                            ['text' => 'Обратная связь',"callback_data" => "/callback"],
                        ],
                        [
                            ['text' => 'Kонсьерж-сервис',"callback_data" => "/conserj_service"],
                        ],
						[
                            ['text' => 'Путешествия',"callback_data" => "/travels"],
                        ],
						[
                            ['text' => 'Контакты клуба',"callback_data" => "/contancts"],
                        ],
					]
				]
			];
    break;
	case '/auth_bad':
        $method = 'sendMessage';
		$send_data = [
			'text' => $data['text'] . 'Ошибочка, попробуйте снова!',
		];
    break;
	case '/projects':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Здесь будет информация о Ваших проектах и ссылки на чаты по ним.',
			'reply_markup'  => [
				/*'resize_keyboard' => true,*/
				'inline_keyboard' => [
						[
							['text' => 'Назад','callback_data' => '/menu'],
                        ],
				]
			]
		];
    break;
	case '/chats':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Чаты Profit Business Community:',
			'reply_markup'  => [
				/*'resize_keyboard' => true,*/
				'inline_keyboard' => [
						[
							['text' => 'Анонсы','url' => 'https://t.me/joinchat/RGeHytcHHI83MGZi'],
                        ],
						[
							['text' => 'Все свои','url' => 'https://t.me/joinchat/UoLb5JoohAExODFi'],
                        ],
						[
							['text' => 'Тренировки','url' => 'https://t.me/joinchat/VktUY6vWU9QwNTk6'],
                        ],
						[
							['text' => 'Мастриды','url' => 'https://t.me/joinchat/lL8PDQgcOlJkNTky'],
                        ],
						[
							['text' => 'Баня','url' => 'https://t.me/+V6xlqrws9wEyZjIy '],
                        ],
						[
							['text' => 'Назад','callback_data' => '/menu'],
                        ],
				]
			]
		];
    break;
	case '/anounces':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Здесь будут анонсироваться мероприятия клуба и будет возможность на них записаться.',
			'reply_markup'  => [
				/*'resize_keyboard' => true,*/
				'inline_keyboard' => [
						[
							['text' => 'Назад','callback_data' => '/menu'],
                        ],
				]
			]
		];
    break;
	case '/callback':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Вы можете написать нам о чем угодно - новая идея, отзыв о работе клуба или претензия к администрации.',
			'reply_markup'  => [
				/*'resize_keyboard' => true,*/
				'inline_keyboard' => [
						[
							['text' => 'Назад','callback_data' => '/menu'],
                        ],
				]
			]
		];
    break;
	case '/conserj_service':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Мы будем напоминать Вам о важных датах и у Вас будет возможность забронировать столик в хорошем ресторане, заказать доставку цветов или поручить нам другую задачу.',
			'reply_markup'  => [
				/*'resize_keyboard' => true,*/
				'inline_keyboard' => [
						[
							['text' => 'Назад','callback_data' => '/menu'],
                        ],
				]
			]
		];
    break;
	case '/travels':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Ссылка на сайте - https://profit-club.pro/travel',
			'reply_markup'  => [
				/*'resize_keyboard' => true,*/
				'inline_keyboard' => [
						[
							['text' => 'Назад','callback_data' => '/menu'],
                        ],
				]
			]
		];
    break;
	case '/contacts':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Наша группа вконтакте - https://vk.com/profit_bc
Наш телеграм-канал - https://t.me/profit_bc
Наш инстаграм - https://instagram.com/profit_bc',
			'reply_markup'  => [
				/*'resize_keyboard' => true,*/
				'inline_keyboard' => [
						[
							['text' => 'Назад','callback_data' => '/menu'],
                        ],
				]
			]
		];
    break;
	case '/menu':
        $method = 'sendMessage';
		$send_data = [
			'text' => 'Добро пожаловать, ' . $row['user_name'],
			'reply_markup'  => [
				/*'resize_keyboard' => true,*/
				'inline_keyboard' => [
						[
							['text' => 'Проекты','callback_data' => '/projects'],
                        ],
                        [
                            ['text' => 'Чаты',"callback_data" => "/chats"],
                        ],
                        [
                            ['text' => 'Анонсы',"callback_data" => "/anounces"],
                        ],
                        [
                            ['text' => 'Обратная связь',"callback_data" => "/callback"],
                        ],
                        [
                            ['text' => 'Kонсьерж-сервис',"callback_data" => "/conserj_service"],
                        ],
						[
                            ['text' => 'Путешествия',"callback_data" => "/travels"],
                        ],
						[
                            ['text' => 'Контакты клуба',"callback_data" => "/contacts"],
                        ],
					]
				]
			];
    break;
	default:
		$method = 'sendMessage';
		$send_data = [
			'text' => 'Привет, я умный бот Profit Business Community. Начнем?',
			'reply_markup'  => [
				/*'resize_keyboard' => true,*/
				'inline_keyboard' => [
						[
							['text' => 'Начинаем','callback_data' => '/begin'],
                        ],
					]
				]
			];
}

$send_data['chat_id'] = $chat_id;

$res = sendTelegram($method, $send_data);
//file_put_contents('file.txt', print_r($res,1), FILE_APPEND);




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

?>
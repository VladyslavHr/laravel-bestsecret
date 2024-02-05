<?php

function telegram_bot_message($message){

$api_url = 'https://api.telegram.org/bot';
$bot_token = '5193208083:AAFA7HE-qZwbB3I24aL034RnrFmcbsntcEU';
$chat_id = '-1001741099979';

$query = [
    'chat_id' => $chat_id,
    'parse_mode' => 'HTML',
    'text' => print_r($message, true),
    // 'reply_markup' => json_encode(['inline_keyboard' => $keyboard])
];

$url = $api_url . $bot_token . '/sendMessage?' . http_build_query($query);



return file_get_contents($url);
}


function telegram_bot_error($e)
{
return telegram_bot_message([
    'message' => $e->getMessage(),
    'file' => $e->getFile(),
    'line' => $e->getLine(),
]);
}

function locale_route($name, $parameters = []) {
    if (!is_array($parameters)) {
        $parameters = [$parameters];
    }
    return route($name, array_merge(['locale' => app()->getLocale()], $parameters));
}

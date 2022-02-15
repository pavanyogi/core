<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';


// Load all configuration options
/** @var array $config */
$config = require __DIR__ . '/config.php';

$bot_api_key  = $config['api_key'];
$bot_username = $config['bot_username'];

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e->getMessage();
}

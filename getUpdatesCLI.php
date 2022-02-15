#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';


// Load all configuration options
/** @var array $config */
$config = require __DIR__ . '/config.php';

$bot_api_key  = $config['api_key'];
$bot_username = $config['bot_username'];

$mysql_credentials = [
    'host'     => $config['mysql']['host'],
    'port'     => 3306, // optional
    'user'     => $config['mysql']['user'],
    'password' => $config['mysql']['password'],
    'database' => $config['mysql']['database'],
];

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Enable MySQL
    $telegram->enableMySql($mysql_credentials);

    // Handle telegram getUpdates request
    $telegram->handleGetUpdates();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}

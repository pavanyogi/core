<?php

/**
 * This file is part of the PHP Telegram Bot example-bot package.
 * https://github.com/php-telegram-bot/example-bot/
 *
 * (c) PHP Telegram Bot Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * This file contains all the configuration options for the PHP Telegram Bot.
 *
 * It is based on the configuration array of the PHP Telegram Bot Manager project.
 *
 * Simply adjust all the values that you need and extend where necessary.
 *
 * Options marked as [Manager Only] are only required if you use `manager.php`.
 *
 * For a full list of all options, check the Manager Readme:
 * https://github.com/php-telegram-bot/telegram-bot-manager#set-extra-bot-parameters
 */

return [
    // Add you bot's API key and name
    'api_key'      => 'your:bot_api_key',
    'bot_username' => 'username_bot', // Without "@"
    'hook_url'     => 'https://a639-2405-205-1389-7d57-2698-da33-6a33-7bda.ngrok.io/hook.php',
    'domain_url'   => 'https://example.com',

//     Enter your MySQL database credentials
     'mysql'        => [
         'host'     => '127.0.0.1',
         'user'     => 'db-user',
         'password' => 'db-password',
         'database' => 'db-name',
     ],

    // Set custom Upload and Download paths
    'paths'        => [
        'download' => __DIR__ . '/Download',
        'upload'   => __DIR__ . '/Upload',
    ]
];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'firebase' => [
        'api_key' => 'AIzaSyC5TdpVTw0NrIj1uRsKz3qi1-j6Dpz7A6s',
        'auth_domain' => 'iot-proyecto-de053.firebaseapp.com',
        'database_url' => 'https://iot-proyecto-de053-default-rtdb.firebaseio.com',
        'project_id' => 'iot-proyecto-de053',
        'storage_bucket' => 'iot-proyecto-de053.appspot.com',
        'messaging_sender_id' => '625920823877',
        'app_id' => '1:625920823877:web:0ea1cbaa1a982c7963892c',
        // 'measurement_id' => 'measurement_id',
    ],

];

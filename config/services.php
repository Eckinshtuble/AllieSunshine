<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '205766463363276',
        'client_secret' => 'da2f8dffda96ecab47063915839fd13b',
        'redirect' => 'https://mcipriano.scweb.ca/AllieSunshine/login/facebook/callback',
    ],
    
    'google' => [
        'client_id' => '208074352257-meflhk8p9r75nadnlsm1ttf4nod1kplc.apps.googleusercontent.com',
        'client_secret' => 'cJgZYsbFlw7ZdIHWgMMvMfxg',
        'redirect' => 'https://mcipriano.scweb.ca/AllieSunshine/login/google/callback',
    ],
];

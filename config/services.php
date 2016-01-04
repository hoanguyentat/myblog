<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '1508433499452268',
    'client_secret' => '884ac3f253c9e55b2697d5082bbab40c',
    'redirect' => 'http://localhost:8000/fbcallback',
    ],

    'google' => [
    'client_id' => '627465572233-mvthb8j1cp690rc1t2qdts6r0otb87is.apps.googleusercontent.com',
    'client_secret' => 'Kxw0Z2JL16MobKl4DB7fw6Iy',
    'redirect' => 'http://localhost:8000/ggcallback',
    ],

];

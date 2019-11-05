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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // login with google and facebook
    'facebook' => [
        'client_id' => env('774359209430335'),
        'client_secret' => env('f7ddec055ce38f18492fb4b1f069d8c0'),
        'redirect' => 'http://localhost/A-event/event/public/pages/login/facebook/callback',
    ],
    'google' => [
        'client_id'     => env('127658938381-79tqafc7g0urcermecs0gc6c9ikiso4c.apps.googleusercontent.com'),
        'client_secret' => env('W0oYu04CTGCtgQmZL0A62qYl'),
        'redirect'      => env('http://localhost/A-event/event/public/pages/login/google/callback')
    ],

];

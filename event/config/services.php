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
        'client_id' => env('2502179883223760'),
        'client_secret' => env('89c7a153e8b59026e2a5d6fa4faff43a'),
        'redirect' => env('http://localhost/A-event/event/public/facebook/callback'),
    ],
    'google' => [
        'client_id' => env('127658938381-iv5a46iu6mgbipm1cremdorp35047fk7.apps.googleusercontent.com'),
        'client_secret' => env('8tMEdyCr3ourm41D0A9Hczj8'),
        'redirect' => env('http://localhost/A-event/event/public'),
    ],

];

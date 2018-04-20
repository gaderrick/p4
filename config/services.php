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

    'github' => [
        'client_id' => env('GH_ID'),
        'client_secret' => env('GH_SECRET'),
        'redirect' => env('APP_URL') . '/oauth/github/callback',
    ],

    'facebook' => [
        'client_id'     => env('FB_ID'),
        'client_secret' => env('FB_SECRET'),
        'redirect'      => env('APP_URL') . '/oauth/facebook/callback',
    ],

    'google' => [
        'client_id'     => env('GL_ID'),
        'client_secret' => env('GL_SECRET'),
        'redirect'      => env('APP_URL') . '/oauth/google/callback',
    ],

    'linkedin' => [
        'client_id'     => env('LI_ID'),
        'client_secret' => env('LI_SECRET'),
        'redirect'      => env('APP_URL') . '/oauth/linkedin/callback',
    ],

    'twitter' => [
        'client_id'     => env('TW_ID'),
        'client_secret' => env('TW_SECRET'),
        'redirect'      => env('APP_URL') . '/oauth/twitter/callback',
    ],

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

];

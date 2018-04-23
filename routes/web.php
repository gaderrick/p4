<?php

// Authentication routes
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// If user makes it to /home, they've been authenticated
Route::get('/home', 'HomeController@index')->name('home');

// Socialite Auth Routes
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');
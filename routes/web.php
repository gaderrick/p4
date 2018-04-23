<?php

// Authentication Routes
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Home Route; if a user makes it here, they're authenticated
// This route will show everything that belongs to a user or is available for them to edit
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Socialite Auth Routes
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

// Organization Routes
Route::get('/org/{user_id}/list')->name('org.list')->middleware('auth'); // List all organizations owned/managed by a user
Route::get('/org/show/{organization_id}')->name('org.show')->middleware('auth'); // View an organization details (if authorized)
Route::get('/org/{user_id}/new')->name('org.new')->middleware('auth'); // Add a new organization
Route::get('/org/{user_id}/edit/{organization_id}')->name('org.edit')->middleware('auth'); // Edit an organization
Route::get('/org/{user_id}/del/{organization_id}')->name('org.edit')->middleware('auth'); // Delete an organization

// User Info Routes

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
Route::get('/org/list','OrganizationController@list')->name('org.list')->middleware('auth'); // List all organizations owned/managed by a user
Route::get('/org/show/{id}','OrganizationController@show')->name('org.show')->middleware('auth'); // View an organization details (if authorized)
Route::get('/org/new')->name('org.new')->middleware('auth'); // Add a new organization
Route::get('/org/edit/{id}')->name('org.edit')->middleware('auth'); // Edit an organization
Route::get('/org/delete/{id}')->name('org.delete')->middleware('auth'); // Delete an organization

// User Info Routes
Route::get('/userinfo/list','UserInfoController@list')->name('userinfo.list')->middleware('auth'); // List all organizations owned/managed by a user
Route::get('/userinfo/show/{id}','UserInfoController@show')->name('userinfo.show')->middleware('auth'); // View details of user's info
Route::get('/userinfo/new')->name('userinfo.new')->middleware('auth'); // Add a new user's info
Route::get('/userinfo/edit/{id}')->name('userinfo.edit')->middleware('auth'); // Edit a user's info
Route::get('/userinfo/delete/{id}')->name('userinfo.delete')->middleware('auth'); // Delete an organization
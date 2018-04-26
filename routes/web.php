<?php

// Authentication Routes
Auth::routes();

// Socialite Auth Routes
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

Route::get('/', function () {
    return view('welcome');
});

// Home Route; if a user makes it here, they're authenticated
// This route will show everything that belongs to a user or is available for them to edit
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// ORGANIZATION ROUTES
// CREATE: Show the form to add an organization; process the form to add a new organization
Route::get('/org/create','OrganizationController@create')->name('org.create')->middleware('auth');
Route::post('/org','OrganizationController@store')->name('org.store')->middleware('auth');

// READ: List all organizations owned/managed by a user
Route::get('/org/index','OrganizationController@index')->name('org.index')->middleware('auth');

// UPDATE: Show the edit form; process the form changes
Route::get('/org/{id}/edit','OrganizationController@edit')->name('org.edit')->middleware('auth');
Route::put('/org/{id}','OrganizationController@update')->name('org.update')->middleware('auth');

// DELETE: Show the delete form; process the deletion
Route::get('/org/{id}/delete','OrganizationController@delete')->name('org.delete')->middleware('auth');
Route::delete('/org/{id}','OrganizationController@destroy')->name('org.destroy')->middleware('auth');


// USERINFO ROUTES
// CREATE: Show the form to add an organization; process the form to add a new organization
Route::get('/userinfo/create','UserInfoController@create')->name('userinfo.create')->middleware('auth');
Route::post('/userinfo','UserInfoController@store')->name('userinfo.store')->middleware('auth');

// READ: List all organizations owned/managed by a user
Route::get('/userinfo/index','UserInfoController@index')->name('userinfo.index')->middleware('auth');

// UPDATE: Show the edit form; process the form changes
Route::get('/userinfo/{id}/edit','UserInfoController@edit')->name('userinfo.edit')->middleware('auth');
Route::put('/userinfo/{id}','UserInfoController@update')->name('userinfo.update')->middleware('auth');

// DELETE: Show the delete form; process the deletion
Route::get('/userinfo/{id}/delete','UserInfoController@delete')->name('userinfo.delete')->middleware('auth');
Route::delete('/userinfo/{id}','UserInfoController@destroy')->name('userinfo.destroy')->middleware('auth');
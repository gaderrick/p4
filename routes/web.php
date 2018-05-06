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

// PARTICIPANT ROUTES
// CREATE: Show the form to add a participant; process the form to add a new participant
Route::get('/participant/create','ParticipantController@create')->name('participant.create')->middleware('auth');
Route::post('/participant','ParticipantController@store')->name('participant.store')->middleware('auth');

// READ: List all participants owned/managed by a user
Route::get('/participant/index','ParticipantController@index')->name('participant.index')->middleware('auth');

// UPDATE: Show the edit form; process the form changes
Route::get('/participant/{id}/edit','ParticipantController@edit')->name('participant.edit')->middleware('auth');
Route::put('/participant/{id}','ParticipantController@update')->name('participant.update')->middleware('auth');

// DELETE: Show the delete form; process the deletion
Route::get('/participant/{id}/delete','ParticipantController@delete')->name('participant.delete')->middleware('auth');
Route::delete('/participant/{id}','ParticipantController@destroy')->name('participant.destroy')->middleware('auth');

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

// ROSTER ROUTES
// CREATE: Show the form to add a roster; process the form to add a new roster
// Here, the id is the organization
Route::get('/roster/{id}/create','RosterController@create')->name('roster.create')->middleware('auth');
Route::post('/roster','RosterController@store')->name('roster.store')->middleware('auth');

// READ: List all rosters owned/managed by a organization
Route::get('/roster/{id}/index','RosterController@index')->name('roster.index')->middleware('auth');

// UPDATE: Show the edit form; process the form changes
Route::get('/roster/{id}/edit','RosterController@edit')->name('roster.edit')->middleware('auth');
Route::put('/roster/{id}','RosterController@update')->name('roster.update')->middleware('auth');

// DELETE: Show the delete form; process the deletion
Route::get('/roster/{id}/delete','RosterController@delete')->name('roster.delete')->middleware('auth');
Route::delete('/roster/{id}','RosterController@destroy')->name('roster.destroy')->middleware('auth');

// ADD participant to a roster
Route::get('roster/{id}/addParticipant','RosterController@addParticipant')->name('roster.addParticipant')->middleware('auth');

// SAVE participant: Manage a roster
Route::post('/roster/saveParticipant','RosterController@saveParticipant')->name('roster.saveParticipant')->middleware('auth');

// REMOVE participant from roster
Route::get('/roster/{id}/removeParticipant/{pid}','RosterController@removeParticipant')->name('roster.removeParticipant')->middleware('auth');
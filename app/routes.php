<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('master');
});

// Route::resource('users', 'UsersController');
// Route::resource('users.questions', 'QuestionsController');

// Event::listen('user.signup', function(User $user)
// {
// 	// subscribe user to mailchimp list
// 	var_dump($user->toArray());
// });

// Route::get('/', function()
// {
// 	$user = User::first();
// 	Event::fire('user.signup', $user);

// 	return 'fired';
// });
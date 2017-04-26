<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'UserController@profile');

Route::get('/register', function(){
	return view('register');
});

Route::get('/login', function(){
	return view('login');
});

Route::get('/question', function(){
	return view('question');
});

Route::get('/filteredQuestion/{level}','QuestionController@filterQuestion');

Route::get('/leaderboard', 'LeaderboardController@showLeaderboard');

Route::post('correct/{id}/{level}/{realAnswer}', 'QuestionController@processInput');

Route::get('correct/{level}/{id}', 'UserController@updateScore');

Route::get('/question', 'QuestionController@showQuestion');

Route::get('/home', function () {
    return view('welcome', compact('user'));
});

Route::post('/login', 'Auth\AuthController@postLogin');

Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/logout', function(){
	Auth::logout();
	return view('welcome');
});

?>

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

Route::get('/', function () {
	$user = 'Kaitlyn';
	
    return view('welcome', compact('user'));
});
Route::get('/profile', function(){
	$user = 'Kaitlyn';
	return view('profile', compact('user'));
});
Route::get('/leaderboard', function () {
	$leaders = ['Kaitlyn', 'Puneet', 'James', 'John', 'Matthew', 'Delilah','Cam', 'Joel', 'Ian', 'George', 'Potato'];
	$rank=5;
	
    return view('leaderboard', compact('leaders','rank'));
});
Route::get('/register', function(){
	return view('register');
});
Route::get('/login', function(){
	return view('login');
});

Route::get('/question', function(){
	$user = 'Kaitlyn';
	return view('question', compact('user'));
});

?>
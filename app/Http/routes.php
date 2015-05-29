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

//$router->get('songs', 'SongsController@index');
//get('songs/{id}', 'SongsController@show');
//get('songs/{song}/edit','SongsController@edit');

//$router->bind('song', function($slug)
Route::bind('songs', function($slug)
{
	//return App\Song::where('slug', $slug)->first();	
	return \App\Song::whereSlug($slug)->first();
});

//$router->get('songs', ['as' => 'songs_path', 'uses' => 'SongsController@index']);
//$router->get('songs/{song}', ['as' => 'song_path', 'uses' => 'SongsController@show']);

//get('songs', 'SongsController@index');
//get('songs/{song}', 'SongsController@show');
//get('songs/{song}/edit', 'SongsController@edit');
//patch('songs/{song}', 'SongsController@update');

$router->resource('songs', 'SongsController');

//$router->resource('{artist}/songs', 'SongsController', [
//	'names' => [
//			'index' => 'songs_path',
//			'show' => 'song_path'	
//	],
//	'only' => ['index', 'show']
//]);


//$router->resource('songs', 'SongsController', [
//	'only' => [
//			'index', 'show', 'edit', 'update'	
//	]
//]);

//$router->resource('songs', 'SongsController', [
//	'except' => [
//			'create'	
//	]
//]);

//$router->resource('people', 'PeopleController');

Route::get('/', 'WelcomeController@index');

Route::get('example', 'PageController@index');
Route::get('example/about', 'PageController@about');

Route::get('user/{id}', function($id) {
	
	return User::findOrFail($id);
	
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

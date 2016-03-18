<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('/', 'FrontController@index');
Route::get('/agence', 'FrontController@agence');
Route::get('/formule', 'FrontController@formule');
Route::get('/realisation', 'FrontController@realisation');
Route::get('/temoignage', 'FrontController@temoignage');
Route::get('/conciergerie', 'FrontController@conciergerie');
Route::get('/evenement', 'FrontController@evenement');
Route::get('/contact', 'FrontController@contact');


Route::group(['middleware' => ['web']], function () {
    	
	// Route::get('/superUser', 'SuperUserController@login');

	// Route::group(['middleware' => ['auth']], function(){
	// 	Route::get('/superUser', 'SuperUserController@dashboard');
	// });

});



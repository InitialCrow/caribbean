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

Route::get('/contact', 'FrontController@contact');


Route::group(['middleware' => ['web']], function ($id) {

    	Route::get('/evenement', 'FrontController@evenement');
	Route::any('/admin', 'SuperUserController@login');
	Route::any('/superUser/check', 'SuperUserController@check');
	Route::any('/my_event/check', 'AdminController@check');
    


    Route::group(['middleware' => ['auth']], function(){
		Route::controller('superUser', 'SuperUserController');
	});



    //admins
	Route::any('/my_event/{id}', 'AdminController@eventAdmin');

	Route::any('/my_event/{id}/change', 'AdminController@change');
	Route::any('/my_event/{id}/edit', 'AdminController@edit');
	Route::any('/my_event/{token}/edit/delete/{type}/{id}', 'AdminController@delete');
	Route::any('/my_event/{token}/send','AdminController@send');
	Route::any('/my_event/{id}/comment/{id2}','AdminController@comment');
	Route::any('/my_event/{id}/boxTool','BoxToolController@show');

	
	//guests
	Route::any('/my_event/{id}/guest/{token}','GuestController@login');
	Route::any('/my_event/{id}/guest/{token}/subcribe','GuestController@subcribe');
	Route::any('/my_event/{id}/guest/{token}/comment/{id2}','GuestController@comment');
	Route::any('/my_event/{id}/guest/{token}/add_actu','GuestController@add_actu');

});




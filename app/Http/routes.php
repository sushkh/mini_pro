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

Route::group(['middleware' => ['web']], function () {

	
Route::get('/home/{id?}',array('as'=>'template','uses'=>'UserController@template'));
Route::get('dashboard',array('as'=>'dashboard','uses'=>'UserController@dashboard')); /*optional parameter*/
 /*optional parameter*/
Route::get('senders/{id?}',array('as'=>'senders','uses'=>'UserController@senders')); 

Route::put('edit', array('before'=>'csrf','uses'=>'UserController@edit'));
Route::put('add_mail', array('before'=>'csrf','uses'=>'UserController@add_mail'));

Route::get('sendmail',array('as'=>'sendmail','uses'=>'UserController@sendmail'));


    //
});

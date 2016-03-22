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

	
Route::get('/home/{id?}',array('as'=>'template','uses'=>'UserController@template')); /*optional parameter*/
Route::get('senders/{id?}',array('as'=>'senders','uses'=>'UserController@senders')); 

Route::put('edit', array('before'=>'csrf','uses'=>'UserController@edit'));
Route::get('sendmail',array('as'=>'sendmail','uses'=>'UserController@sendmail'));
Mail::raw('Laravel with Mailgun is easy!', function($message)
{
    $message->to('nelabhkotiya@gmail.com');
});


    //
});

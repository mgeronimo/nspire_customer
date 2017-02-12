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

Route::get('/', 'HomeController@index');

Route::auth();
Route::post('login', 'Auth\AuthController@getLogin');
Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
Route::get('/home', 'HomeController@index');

Route::get('/profile', 'HomeController@profile');
Route::get('/edit-profile', 'HomeController@editProfile');

Route::get('/test-email',function(){
    return view('auth.emails.verify_email',['link'=>'abcd']);
});

Route::get('test', function()
{
    dd(Config::get('database'));
});

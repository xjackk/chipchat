<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('messages', 'ChatsController@fetchMessages');

Route::get('/chats', 'ChatsController@index'); # main view for the chats

Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index'); // about view

Route::get('/profile', 'UserConroller@profile'); // get profile view

//Route::get('/profile', ''); // Profile View


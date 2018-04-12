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

Route::get('/template', function(){
    return view($templates->code);
});

// Return Main Index Page
Route::get('/', 'PagesController@getIndex');

// Return Chatbot Related Pages
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

// Return Login and Sign-up
Auth::routes();

// Return First Dashboard
Route::get('/home', 'HomeController@index')->name('home');

// Return Templates Pages
Route::resource('templates', 'TemplatesController');

// Route to post method form submission
Route::post('/contact/submit', 'MessagesController@submit');

// See messages
Route::get('/storeMessages', 'MessagesController@getMessages');

// Botman
//Route::post('/store', 'BotManController@submit');
Route::get('/storeinfo', 'BotManController@getBots');
Route::resource('botman_d_bs', 'BotManController');
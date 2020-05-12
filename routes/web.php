<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    Route::resource('messages', 'MessageController');

    // Need to pass the message id to the create method in ReplyController
    Route::get('replies/create/{message_id}', 'ReplyController@create');
    Route::resource('replies', 'ReplyController', ['except' => 'create']);

});



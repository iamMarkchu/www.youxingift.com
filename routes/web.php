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
    return view('client.index');
})->name('index');

Route::get('/products', 'ProductController@index')->name('products');
Route::get('/messages', 'MessageController@index')->name('messages');
Route::post('/messages', 'MessageController@store')->name('message-store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

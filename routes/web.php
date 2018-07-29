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

Route::group(['middleware' => ['checkLocale']], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/setLocale', 'IndexController@setLocale');
    Route::get('/products', 'ProductController@index')->name('products');
    Route::get('/messages', 'MessageController@index')->name('messages');
    Route::post('/messages', 'MessageController@store')->name('message-store');
    Route::get('/contact-us', 'IndexController@contact')->name('contact-us');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('admin-index');

    Route::get('/products', 'ProductController@index')->name('admin-products');
    Route::get('/products/create', 'ProductController@create')->name('admin-products-create');
    Route::post('/products', 'ProductController@store')->name('admin-products-store');
    Route::get('/products/delete/{id}', 'ProductController@delete')->name('admin-products-delete');

    Route::get('/messages', 'MessageController@index')->name('admin-messages');
    Route::get('/users', 'UserController@index')->name('admin-users');
    Route::get('/users/{id}/{action}', 'UserController@status')->name('admin-users-status');
});

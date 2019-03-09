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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web'], 'prefix'=>'admin'], function () {
    Route::get('/','admin\HomeController@index')->name('admin');
    Route::get('/users', 'admin\UsersController@index');
    Route::get('/products', 'admin\ProductsController@index');
//    Route::get('/products/search', 'admin\ProductsController@search');

    //CRUD Users

    Route::resource('/users','admin\UsersController');

    //CRUD Products

    Route::resource('/products','admin\ProductsController');
//
});




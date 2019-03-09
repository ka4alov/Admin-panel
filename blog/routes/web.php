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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix'=>'admin'], function () {
    Route::get('/','admin\HomeController@index')->name('admin');
    Route::get('/users', 'admin\UsersController@index')->name('admin.users');
    Route::get('/products', 'admin\ProductsController@index')->name('admin.products');

    //CRUD

    Route::resource('/products','admin\ProductsController');
//
});



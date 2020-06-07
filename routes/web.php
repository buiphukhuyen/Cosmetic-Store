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

Route::get('/', 'HomeController@index');

//Admin

    Route::get('/admin','AdminController@index');
    Route::get('/dashboard','AdminController@dashboard');
    Route::post('/login_admin','AdminController@login_admin');
    Route::get('/logout_admin','AdminController@logout_admin');

    //Category Product
        Route::get('/add_category_product','CategoryProduct@add_category');
        Route::post('/add_category_product','CategoryProduct@save_category');
        Route::get('/list_category_product','CategoryProduct@list_category');
        Route::get('/active_category_product/{category_id}','CategoryProduct@active_category');
        Route::get('/unactive_category_product/{category_id}','CategoryProduct@unactive_category');
        Route::get('/edit_category_product/{category_id}','CategoryProduct@edit_category');
        Route::post('/update_category_product/{category_id}','CategoryProduct@update_category');
        Route::get('/delete_category_product/{category_id}','CategoryProduct@delete_category');

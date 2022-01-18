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
    return view('layouts.dashboard');
});

    Route::resource('orders', 'WEB\Admin\OrdersController');
    Route::get('orders/orderDetails/{id}', 'WEB\Admin\OrdersController@orderDetails');
    Route::post('/change_orderSts/{id}', 'WEB\Admin\OrdersController@change_orderSts');

    
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
    return view('welcome');
});

Route::get('ticket/','App\Http\Controllers\BuyController@index');
Route::get('payment/{id}','App\Http\Controllers\BuyController@payment');

// Route::get('ticket2/','App\Http\Controllers\BuyController@dummy');

Route::get('/adminlogin', 'App\Http\Controllers\Admin\LoginController@index')->name('login')->middleware('guest');
Route::post('/adminlogin', 'App\Http\Controllers\Admin\LoginController@authenticate');
Route::post('/logout', 'App\Http\Controllers\Admin\LoginController@logout');

Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@index');
Route::get('/invoices', 'App\Http\Controllers\Invoices@index');
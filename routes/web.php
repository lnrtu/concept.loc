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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('configs', 'ConfigController')->only(['index', 'edit', 'update']);
    Route::resource('orders', 'OrderController')->only(['index', 'destroy', 'show']);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    Route::resource('configs', 'ConfigsController')->only(['index', 'edit', 'update']);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

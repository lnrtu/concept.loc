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



Route::prefix('admin')->middleware(['auth', 'admin'])->group(function(){

    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');

    Route::prefix('configs')->group(function(){
        Route::get('/', 'Admin\ConfigsController@index')->name('configsIndex');
        Route::get('{id}', 'Admin\ConfigsController@edit')->name('configsEdit');
        Route::put('/{id}', 'Admin\ConfigsController@update')->name('configsUpdate');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

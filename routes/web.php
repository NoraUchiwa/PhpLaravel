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


//@index permet de connecter le controller

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get("/",'FrontController@index');
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('spending', 'SpendingController');
    Route::resource('user', 'UserController');
    Route::resource('balance', 'BalanceController');
});
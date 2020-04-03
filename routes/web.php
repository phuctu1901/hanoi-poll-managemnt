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

//Route::get('/', 'DashboardController@index');

Route::get('/', 'Client\HomeController@index');
Route::get('/chi-tiet/{slug}', 'Client\PollController@detail');







Route::group(['prefix'=>'/admin'],function() {
    //   Admin -> phần tour
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('/poll/add', 'Admin\PollController@addview');

});

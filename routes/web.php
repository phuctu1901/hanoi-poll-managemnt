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
Route::post('/goi-yeu-cau/', 'Client\PollController@submit');






Route::group(['prefix'=>'/admin', 'middleware' => ['system_admin', 'system_admin']] ,function() {
    Route::get('/', 'Admin\DashboardController@index')->name('home');
    Route::get('/poll/add', 'Admin\PollController@addview');
    Route::get('/poll/', 'Admin\PollController@list');
    Route::get('/poll/detail/{id}', 'Admin\PollController@detail');
    Route::get('/ballots/{id}', 'Admin\PollController@ballots');
    Route::get('/proofs/detail/{id}', 'Admin\ProofController@detail');
    Route::post('/poll/addRequest', 'Admin\PollController@addRequest');

    Route::get('/poll/edit/{id}', 'Admin\PollController@editView');
    Route::post('/poll/editRequest', 'Admin\PollController@editRequest');



    Route::get('/role','Admin\RoleController@index');
    Route::get('/role/add','Admin\RoleController@add');
    Route::post('/role/delete','Admin\RoleController@delete');
    Route::get('/role/edit/{id}','Admin\RoleController@edit');
    Route::post('/role/editRequest', 'Admin\RoleController@editRequest');
    Route::post('/role/addRequest','Admin\RoleController@addRequest');

    Route::get('/permission/add','Admin\PermissionController@add');
    Route::post('/permission/addRequest','Admin\PermissionController@addRequest');

    // Đăng ký thành viên
    Route::get('/register', 'Auth\RegisterController@getRegister');
    Route::post('/register', 'Auth\RegisterController@postRegister');
    Route::get('/user', 'Admin\UserController@index');
    Route::get('/user/edit/{id}', 'Admin\UserController@editView');
    Route::post('/user/editRequest', 'Admin\UserController@editRequest');
    Route::get('/user/add', 'Admin\UserController@addView');
    Route::post('/user/addRequest', 'Admin\UserController@addRequest');
    Route::get('/user/delete/{user_id}', 'Admin\UserController@delete');
    Route::get('/user/detail/{user_id}', 'Admin\UserController@detail');
    Route::get('/user/logout/{user_id}', 'Admin\UserController@logout');
});


Route::group(['prefix'=>'/organization', 'middleware' => ['organization', 'system_admin']] ,function() {
    Route::get('/', 'Admin\DashboardController@index')->name('home');
    Route::get('/poll/add', 'Admin\PollController@addview');
    Route::get('/poll/', 'Admin\PollController@list');
    Route::get('/poll/detail/{id}', 'Admin\PollController@detail');
    Route::get('/ballots/{id}', 'Admin\PollController@ballots');
    Route::get('/proofs/detail/{id}', 'Admin\ProofController@detail');
    Route::post('/poll/addRequest', 'Admin\PollController@addRequest');

    Route::get('/poll/edit/{id}', 'Admin\PollController@editView');
    Route::post('/poll/editRequest', 'Admin\PollController@editRequest');



    Route::get('/role','Admin\RoleController@index');
    Route::get('/role/add','Admin\RoleController@add');
    Route::post('/role/delete','Admin\RoleController@delete');
    Route::get('/role/edit/{id}','Admin\RoleController@edit');
    Route::post('/role/editRequest', 'Admin\RoleController@editRequest');
    Route::post('/role/addRequest','Admin\RoleController@addRequest');

    Route::get('/permission/add','Admin\PermissionController@add');
    Route::post('/permission/addRequest','Admin\PermissionController@addRequest');

    // Đăng ký thành viên
    Route::get('/register', 'Auth\RegisterController@getRegister');
    Route::post('/register', 'Auth\RegisterController@postRegister');
    Route::get('/user', 'Admin\UserController@index');
    Route::get('/user/edit/{id}', 'Admin\UserController@editView');
    Route::post('/user/editRequest', 'Admin\UserController@editRequest');
    Route::get('/user/add', 'Admin\UserController@addView');
    Route::post('/user/addRequest', 'Admin\UserController@addRequest');
    Route::get('/user/delete/{user_id}', 'Admin\UserController@delete');
    Route::get('/user/detail/{user_id}', 'Admin\UserController@detail');
    Route::get('/user/logout/{user_id}', 'Admin\UserController@logout');
});

Auth::routes();


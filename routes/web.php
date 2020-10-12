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
Route::get('/tham-gia-dong-gop-y-kien/{slug}', 'Client\PollController@detail');
Route::get('/chi-tiet/{slug}', 'Client\PollController@detail');
Route::get('/tong-quan/{slug}', 'Client\PollController@overview');
Route::post('/goi-yeu-cau/', 'Client\PollController@submit');
Route::get('/to-chuc', 'Client\OrganizationController@index');
Route::get('/to-chuc/tim-kiem/{key-word}', 'Client\OrganizationController@search');
Route::get('/khao-sat/to-chuc/{slug}', 'Client\PollController@org');
Route::get('/to-chuc/lay-du-lieu', 'Client\OrganizationController@fetch_data');






Route::group(['prefix'=>'/admin', 'middleware' => ['system_admin']] ,function() {
    Route::get('/', 'Admin\DashboardController@index');
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


    Route::get('/organization', 'Admin\OrganizationController@index');
    Route::get('/organization/add', 'Admin\OrganizationController@addView');
    Route::post('/organization/addRequest', 'Admin\OrganizationController@addRequest');
    Route::get('/organization/edit/{org_id}', 'Admin\OrganizationController@editView');

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });


});


Route::group(['prefix'=>'/organization', 'middleware' => ['organization']] ,function() {
    Route::get('/', 'Organization\DashboardController@index');
    Route::get('/poll/add', 'Organization\PollController@addview');
    Route::get('/poll/{parameter?}', 'Organization\PollController@list');
    Route::get('/poll/detail/{id}', 'Organization\PollController@detail');
    Route::get('/ballots/{id}', 'Organization\PollController@ballots');
    Route::get('/proofs/detail/{id}', 'Organization\ProofController@detail');
    Route::post('/poll/addRequest', 'Organization\PollController@addRequest');

    Route::get('/poll/edit/{id}', 'Organization\PollController@editView');
    Route::post('/poll/editRequest', 'Organization\PollController@editRequest');



    Route::get('/role','Organization\RoleController@index');
    Route::get('/role/add','Organization\RoleController@add');
    Route::post('/role/delete','Organization\RoleController@delete');
    Route::get('/role/edit/{id}','Organization\RoleController@edit');
    Route::post('/role/editRequest', 'Organization\RoleController@editRequest');
    Route::post('/role/addRequest','Organization\RoleController@addRequest');

    Route::get('/permission/add','Organization\PermissionController@add');
    Route::post('/permission/addRequest','Organization\PermissionController@addRequest');

    // Đăng ký thành viên
    Route::get('/register', 'Auth\RegisterController@getRegister');
    Route::post('/register', 'Auth\RegisterController@postRegister');
    Route::get('/user', 'Organization\UserController@index');
    Route::get('/user/edit/{id}', 'Organization\UserController@editView');
    Route::post('/user/editRequest', 'Organization\UserController@editRequest');
    Route::get('/user/add', 'Organization\UserController@addView');
    Route::post('/user/addRequest', 'Organization\UserController@addRequest');
    Route::get('/user/delete/{user_id}', 'Organization\UserController@delete');
    Route::get('/user/detail/{user_id}', 'Organization\UserController@detail');
    Route::get('/user/logout/{user_id}', 'Organization\UserController@logout');

    Route::get('/profile','Organization\UserController@showProfile');

    Route::post('/profile','Organization\UserController@updateProfile');

    Route::get('/info', 'Organization\InfoController@get');
    Route::post('/info/update', 'Organization\InfoController@update');
});

Auth::routes();


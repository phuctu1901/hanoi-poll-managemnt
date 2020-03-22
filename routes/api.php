<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/connection/create', 'ConnectionController@create');
Route::get('/connection/get/{id}', 'ConnectionController@get');

Route::get('/definition/verification','DefinitionController@verifications');

Route::post('/verification/create','VerificationController@create');
Route::get('/verification/detail/{id}','VerificationController@detail');
Route::get('/verification/verify/{id}','VerificationController@verify');
Route::delete('/verification/detail/{id}','VerificationController@delete');
Route::get('/verification/list','VerificationController@list');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/connection/create', 'Client\ConnectionController@create');
Route::get('/connection/get/{id}', 'Client\ConnectionController@get');



Route::get('/definition/verification','Client\DefinitionController@verifications');

Route::post('/verification/create','Client\VerificationController@create');
Route::get('/verification/detail/{id}','Client\VerificationController@detail');
//Route::get('/verification/verify/{id}','VerificationController@verify');
//Route::delete('/verification/detail/{id}','VerificationController@delete');
//Route::get('/verification/list','VerificationController@list');

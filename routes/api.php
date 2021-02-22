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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/configurations', 'ConfigurationController@index');
Route::get('/configurations/{id}', 'ConfigurationController@show');
Route::post('/configurations', 'ConfigurationController@store');
Route::delete('/configurations/{id}', 'ConfigurationController@delete');
Route::patch('/configurations/{id}', 'ConfigurationController@update');

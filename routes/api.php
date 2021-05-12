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


Route::get('Agence','App\Http\Controllers\AgenceController@getallagence');


Route::get('marque','App\Http\Controllers\VoitureController@getallmarque');

Route::get('coleur','App\Http\Controllers\VoitureController@getallcoleur');

Route::get('type','App\Http\Controllers\VoitureController@getallatype');

Route::get('GetAgenceById/{id}','App\Http\Controllers\AgenceController@GetAgenceById');
Route::get('edit/{id}', 'App\Http\Controllers\AgenceController@edit');
Route::post('update/{id}', 'App\Http\Controllers\AgenceController@update');
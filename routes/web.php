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

Route::get('/', function () {
    return view('welcome');
});

// Voiture
Route::get('/details','App\Http\Controllers\VoitureController@details');
Route::get('/liste','App\Http\Controllers\VoitureController@liste');
Route::get('/index','App\Http\Controllers\VoitureController@index');

//Agence
Route::get('/agence/liste','App\Http\Controllers\AgenceController@liste');
Route::get('/admin/agence/ajouteragence','App\Http\Controllers\AgenceController@ajouteragence');
Route::post('/admin/agence/ajouteragence','App\Http\Controllers\AgenceController@ajouterAgc');

//User
Route::get('/contact','App\Http\Controllers\UserController@contact');


//Admin
Route::get('/admin/index','App\Http\Controllers\AdminController@index');
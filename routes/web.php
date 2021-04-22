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

// partie user
Route::get('/details','App\Http\Controllers\VoitureController@details');
Route::get('/liste','App\Http\Controllers\VoitureController@liste');
Route::get('/index','App\Http\Controllers\VoitureController@index');
// partie admin
Route::get('/admin/voiture/ajoutervoiture','App\Http\Controllers\VoitureController@ajoutervoiture');
Route::get('/admin/voiture/affichevoiture','App\Http\Controllers\VoitureController@affichevoiture');

//Agence

// partie user
Route::get('/agence/liste','App\Http\Controllers\AgenceController@liste');
// partie admin
Route::get('/admin/agence/ajouteragence','App\Http\Controllers\AgenceController@ajouteragence');
Route::get('/admin/agence/afficheagence','App\Http\Controllers\AgenceController@afficheagence');



//User
// partie user
Route::get('/contact','App\Http\Controllers\UserController@contact');
// partie admin
Route::get('/admin/user/ajouteruser','App\Http\Controllers\UserController@ajouteruser');
Route::get('/admin/user/afficheusers','App\Http\Controllers\UserController@afficheusers');

//Reservation
// partie admin
Route::get('/admin/Reserv/boitereservation','App\Http\Controllers\ReservationController@boitereservation');


//Admin
Route::get('/admin/index','App\Http\Controllers\AdminController@index');

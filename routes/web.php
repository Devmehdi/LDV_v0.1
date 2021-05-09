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
Route::post('/admin/voiture/ajoutervoiture','App\Http\Controllers\VoitureController@ajoutervtr');
Route::get('/admin/voiture/{id}/edit','App\Http\Controllers\VoitureController@edit');
Route::get('/admin/voiture/{id}/details','App\Http\Controllers\VoitureController@edit');
Route::PUT('/voiture/{id}','App\Http\Controllers\VoitureController@update');
Route::Delete('/voiture/{id}/deleted','App\Http\Controllers\VoitureController@destroy');

Route::get('/admin/coleur/ajoutercoleur','App\Http\Controllers\VoitureController@ajoutercoleur');
Route::post('/admin/coleur/ajoutercoleur','App\Http\Controllers\VoitureController@ajouterclr');
Route::get('/admin/coleur/{id}/edit','App\Http\Controllers\VoitureController@editcoleur');
Route::PUT('/coleur/{id}','App\Http\Controllers\VoitureController@updatecoleur');

Route::get('/admin/voiture/ajoutertype','App\Http\Controllers\VoitureController@ajoutertype');
Route::post('/admin/voiture/ajoutertype','App\Http\Controllers\VoitureController@ajoutertpe');
Route::get('/admin/voituretype/{id}/edit','App\Http\Controllers\VoitureController@edittype');
Route::PUT('/type/voiture/{id}','App\Http\Controllers\VoitureController@updatetype');

Route::get('/admin/voiture/ajoutermarque','App\Http\Controllers\VoitureController@ajoutermarque');
Route::post('/admin/voiture/ajoutermarque','App\Http\Controllers\VoitureController@ajoutermrq');
Route::get('/admin/voituremarque/{id}/edit','App\Http\Controllers\VoitureController@editmarque');
Route::PUT('/marque/voiture/{id}','App\Http\Controllers\VoitureController@updatemarque');


Route::get('test','App\Http\Controllers\AgenceController@test');

Route::get('dashboard','App\Http\Controllers\AgenceController@dashboard');
//Agence

// partie user
Route::get('admin/agence/liste','App\Http\Controllers\AgenceController@liste');
// partie admin
Route::get('admin/agence/ajouteragence','App\Http\Controllers\AgenceController@ajouteragence');

Route::get('admin/agence/{id}/edit','App\Http\Controllers\AgenceController@edit');
Route::post('admin/agence/{id}/details','App\Http\Controllers\AgenceController@details');

Route::PUT('/admin/agence/{id}','App\Http\Controllers\AgenceController@update');

//Route::delete('/admin/agence/delete/{id}','App\Http\Controllers\AgenceController@destroy');

Route::post('/admin/agence/ajouteragence','App\Http\Controllers\AgenceController@ajouterAgc');

Route::get('/admin/agence/afficheagence','App\Http\Controllers\AgenceController@afficheagence');

Route::Delete('/agence/{id}/deleted','App\Http\Controllers\AgenceController@destroy');




//User
// partie user
Route::get('/contact','App\Http\Controllers\UserController@contact');
// partie admin
Route::get('/admin/user/ajouteruser','App\Http\Controllers\UserController@ajouteruser');
Route::get('/admin/user/afficheusers','App\Http\Controllers\UserController@afficheusers');
Route::post('/admin/user/ajouteruser','App\Http\Controllers\UserController@ajouterUsertodb');
Route::get('admin/user/{id}/edit','App\Http\Controllers\userController@edit');
Route::get('admin/user/{id}/details','App\Http\Controllers\userController@edit');

Route::PUT('/admin/user/{id}','App\Http\Controllers\UserController@update');

//Route::delete('/admin/user/delete/{id}','App\Http\Controllers\AgenceController@destroy');

Route::Delete('/user/{id}/deleted','App\Http\Controllers\UserController@destroy');
//Reservation
// partie admin
Route::get('/admin/Reserv/boitereservation','App\Http\Controllers\ReservationController@boitereservation');
Route::get('/admin/Reserv/reservation/{id}','App\Http\Controllers\ReservationController@readreservation');
Route::PUT('/confirmation/{id}','App\Http\Controllers\ReservationController@confirm');
//Admin
Route::get('/dashboard','App\Http\Controllers\AdminController@index');

//Notification
Route::delete('Notif/{id}','App\Http\Controllers\NotificationController@destroy');
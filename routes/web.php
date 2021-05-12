<?php

use Illuminate\Support\Facades\Route;
Use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Voiture

// partie user
Route::get('/details','App\Http\Controllers\VoitureController@details');
Route::get('/liste','App\Http\Controllers\VoitureController@liste');
Route::get('/index','App\Http\Controllers\VoitureController@index');
// partie admin
Route::get('/admin/voiture/ajoutervoiture','App\Http\Controllers\VoitureController@ajoutervoiture')->middleware('auth');
Route::get('/admin/voiture/affichevoiture','App\Http\Controllers\VoitureController@affichevoiture')->middleware('auth');
Route::post('/admin/voiture/ajoutervoiture','App\Http\Controllers\VoitureController@ajoutervtr')->middleware('auth');
Route::get('/admin/voiture/{id}/edit','App\Http\Controllers\VoitureController@edit')->middleware('auth');
Route::get('/admin/voiture/{id}/details','App\Http\Controllers\VoitureController@edit')->middleware('auth');
Route::PUT('/voiture/{id}','App\Http\Controllers\VoitureController@update')->middleware('auth');
Route::Delete('/voiture/{id}/deleted','App\Http\Controllers\VoitureController@destroy')->middleware('auth');

Route::get('/admin/coleur/ajoutercoleur','App\Http\Controllers\VoitureController@ajoutercoleur')->middleware('auth');
Route::post('/admin/coleur/ajoutercoleur','App\Http\Controllers\VoitureController@ajouterclr')->middleware('auth');
Route::get('/admin/coleur/{id}/edit','App\Http\Controllers\VoitureController@editcoleur')->middleware('auth');
Route::PUT('/coleur/{id}','App\Http\Controllers\VoitureController@updatecoleur')->middleware('auth');

Route::get('/admin/voiture/ajoutertype','App\Http\Controllers\VoitureController@ajoutertype')->middleware('auth');
Route::post('/admin/voiture/ajoutertype','App\Http\Controllers\VoitureController@ajoutertpe')->middleware('auth');
Route::get('/admin/voituretype/{id}/edit','App\Http\Controllers\VoitureController@edittype')->middleware('auth');
Route::PUT('/type/voiture/{id}','App\Http\Controllers\VoitureController@updatetype')->middleware('auth');

Route::get('/admin/voiture/ajoutermarque','App\Http\Controllers\VoitureController@ajoutermarque')->middleware('auth');
Route::post('/admin/voiture/ajoutermarque','App\Http\Controllers\VoitureController@ajoutermrq')->middleware('auth');
Route::get('/admin/voituremarque/{id}/edit','App\Http\Controllers\VoitureController@editmarque')->middleware('auth');
Route::PUT('/marque/voiture/{id}','App\Http\Controllers\VoitureController@updatemarque')->middleware('auth');


Route::get('test','App\Http\Controllers\AgenceController@test');

Route::get('dashboard','App\Http\Controllers\AgenceController@dashboard');
//Agence

// partie user
Route::get('admin/agence/liste','App\Http\Controllers\AgenceController@liste');
// partie admin
Route::get('admin/agence/ajouteragence','App\Http\Controllers\AgenceController@ajouteragence')->middleware('auth');

Route::get('admin/agence/{id}/edit','App\Http\Controllers\AgenceController@edit')->middleware('auth');
Route::post('admin/agence/{id}/details','App\Http\Controllers\AgenceController@details')->middleware('auth');

Route::PUT('/admin/agence/{id}','App\Http\Controllers\AgenceController@update')->middleware('auth');

//Route::delete('/admin/agence/delete/{id}','App\Http\Controllers\AgenceController@destroy');

Route::post('/admin/agence/ajouteragence','App\Http\Controllers\AgenceController@ajouterAgc')->middleware('auth');

Route::get('/admin/agence/afficheagence','App\Http\Controllers\AgenceController@afficheagence')->middleware('auth');

Route::Delete('/agence/{id}/deleted','App\Http\Controllers\AgenceController@destroy')->middleware('auth');




//User
// partie user
Route::get('/contact','App\Http\Controllers\UserController@contact');
// partie admin
Route::get('/admin/user/ajouteruser','App\Http\Controllers\UserController@ajouteruser')->middleware('auth');
Route::get('/admin/user/afficheusers','App\Http\Controllers\UserController@afficheusers')->middleware('auth');
Route::post('/admin/user/ajouteruser','App\Http\Controllers\UserController@ajouterUsertodb')->middleware('auth');
Route::get('admin/user/{id}/edit','App\Http\Controllers\userController@edit')->middleware('auth');;
Route::get('admin/user/{id}/details','App\Http\Controllers\userController@edit')->middleware('auth');

Route::PUT('/admin/user/{id}','App\Http\Controllers\UserController@update')->middleware('auth');
Route::get('notification','App\Http\Controllers\NotificationController@getnotification');
//Route::delete('/admin/user/delete/{id}','App\Http\Controllers\AgenceController@destroy');

Route::Delete('/user/{id}/deleted','App\Http\Controllers\UserController@destroy')->middleware('auth');
//Reservation
// partie admin
Route::get('/admin/Reserv/boitereservation','App\Http\Controllers\ReservationController@boitereservation')->middleware('auth');
Route::get('/admin/Reserv/reservation/{id}','App\Http\Controllers\ReservationController@readreservation')->middleware('auth');
Route::PUT('/confirmation/{id}','App\Http\Controllers\ReservationController@confirm')->middleware('auth');
//Admin
Route::get('/dashboard','App\Http\Controllers\AdminController@index')->middleware('auth');

//Notification
Route::delete('Notif/{id}','App\Http\Controllers\NotificationController@destroy')->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

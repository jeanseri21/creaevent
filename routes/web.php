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
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/myevent', function () {
    return view('profil.event');
});
Route::get('/myconnexion', function () {
    return view('profil.connexion');
});
Route::get('/notification', function () {
    return view('notification.index');
});
Route::get('/groupe', function () {
    return view('groupe.index');
});
Route::get('/eventindex', function () {
    return view('event.index');
});
Route::get('/eventsearch', function () {
    return view('event.filtre');
});
Route::get('/detailevent', function () {
    return view('event.detail');
});


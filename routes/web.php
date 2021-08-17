<?php

use App\Http\Controllers\FormarisanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnoneController;
use App\Http\Controllers\CobaController;

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

Route::view('/dashboard', 'dashboard.dashboard');
Route::view('/', 'pages.auth.login');
Route::view('/form', 'formarisandatauser.formarisandatauser');

//data arisan
Route::view('/formarisan','formarisan.formarisan');
Route::resource('tablearisan', FormarisanController::class);
// Route::get('buatgambar/{id}', 'CobaController@photo');
Route::get('buatgambar/{id}',[CobaController::class, 'photo']);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

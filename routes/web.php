<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

///////////////
Route::get('/home', [App\Http\Controllers\UserController::class, 'home'])->name('home');
Route::get('/espana', [App\Http\Controllers\UserController::class, 'espana'])->name('espana');
Route::get('/mapa', [App\Http\Controllers\UserController::class, 'mapa'])->name('mapa');
Route::get('/ue', [App\Http\Controllers\UserController::class, 'ueuropea'])->name('ueuropea');
Route::get('/otro', [App\Http\Controllers\UserController::class, 'otro'])->name('otro');
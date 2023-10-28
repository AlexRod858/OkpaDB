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
Route::get('/home', [App\Http\Controllers\OkupacionesController::class, 'misOkupaciones'])
    ->name('misOkupaciones')
    ->middleware('auth');

Route::get('/database', [App\Http\Controllers\UserController::class, 'database'])->name('database');
Route::get('/que-es', [App\Http\Controllers\UserController::class, 'quees'])->name('quees');
Route::get('/database/{id}', [App\Http\Controllers\OkupacionesController::class, 'detalles'])->name('detalles');
Route::get('/ue', [App\Http\Controllers\UserController::class, 'ueuropea'])->name('ueuropea');

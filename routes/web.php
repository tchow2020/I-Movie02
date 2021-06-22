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


use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index'])->name('menu-principal');    


Route::get('/anime', [EventController::class, 'anime'])->name('anime');


Route::get('/ação', [EventController::class, 'Ação'])->name('ação');


Route::get('/lançamentos', [EventController::class, 'lançamentos'])->name('lançamentos');


Route::get('/Romance', [EventController::class, 'romance'])->name('romance');


Route::get('/terror', [EventController::class, 'terror'])->name('terror');


Route::get('/drama', [EventController::class, 'drama'])->name('drama');


Route::get('/comédia', [EventController::class, 'comédia'])->name('comédia');
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
use App\Http\Controllers\MovieController;
use App\Models\Category;
use App\Models\filmes;


Route::get('/', [MovieController::class, 'index'])->name('index');
Route::get('/adicionar', function(Category $category) {
    $categories = $category::all();
    return view('movies.adicionar', [
        'categories' => $categories
    ]);
})->name('adicionarFilme');
Route::post('/adicionar', [MovieController::class, 'create'])->name('movies.create');
Route::get('/buscar', [MovieController::class, 'buscarFilme'])->name('movies.buscarFilme');
Route::get('/ver/{titulo}', [MovieController::class, 'ver'])->name('movies.ver');
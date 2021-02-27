<?php

use App\Http\Controllers\CategoriaController;
use App\Models\Categoria;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CategoriaController::class, 'index'])->name('estoque.categoria');
Route::get('/create', [CategoriaController::class, 'create'])->name('criar');
//ROTA DE PESQUISA
Route::post("/busca",[CategoriaController::class, 'search'])->name('categoria.busca');


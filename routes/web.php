<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
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

//categoria 

Route::get('/', [CategoriaController::class, 'index'])->name('estoque.categoria');
Route::get('/create', [CategoriaController::class, 'create'])->name('criar');
Route::post('/adicionar',[CategoriaController::class, 'store'])->name('adicionar');
// //ROTA DE PESQUISA
Route::post('/busca',[CategoriaController::class, 'search'])->name('categoria.busca');
Route::get('/edit/{id}',[CategoriaController::class, 'editar'])->name('edit');
Route::put('/update/{id}',[CategoriaController::class, 'update'])->name('update');

Route::get('/del/{id}',[CategoriaController::class, 'delete'])->name('del');


//produtos

Route::get('/produtos',[ ProdutoController::class, 'index'])->name('produtos');

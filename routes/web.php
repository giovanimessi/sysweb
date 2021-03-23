<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProdutoController;
use App\Models\Categoria;
use App\Models\Produto
;
use App\Models\Peaaaoa;
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
Route::get('/create', [CategoriaController::class, 'create'])->name('create');
Route::post('/adicionar',[CategoriaController::class, 'store'])->name('adicionar');
// //ROTA DE PESQUISA
Route::post('/busca',[CategoriaController::class, 'search'])->name('categoria.busca');
Route::get('/edit/{id}',[CategoriaController::class, 'editar'])->name('edit');
Route::put('/update/{id}',[CategoriaController::class, 'update'])->name('update');

Route::get('/del/{id}',[CategoriaController::class, 'delete'])->name('del');


//produtos


Route::get('/produtos',[ ProdutoController::class, 'index'])->name('produtos');
Route::get('/produtos/criar', [ProdutoController::class, 'criar'])->name('criar');
Route::post('/produtos/dados',[ProdutoController::class, 'store'])->name('save');
Route::post('/produtos/dado/{id}',[ProdutoController::class, 'show']);
Route::get('/produtos/edit/{id}',[ProdutoController::class, 'editar'])->name('editar');
Route::put('/produtos/update/{id}',[ProdutoController::class, 'update'])->name('upd');
Route::get('/produtos/delete/{id}',[ProdutoController::class, 'delete'])->name('delete');



//pessoa

Route::get('/vendas/clientes',[PessoaController::class, 'index'])->name('clientes');
Route::get('/vendas/clientes/create',[PessoaController::class, 'create'])->name('criaClientes');
Route::post('/vendas/store',[PessoaController::class, 'store'])->name('salvar');
Route::post('/vendas/clientes/exibi/{id}',[PessoaController::class, 'show']);
Route::get('/venda/cliente/editar/{id}',[PessoaController::class, 'editar'])->name('vendaEditar');
Route::put('/venda/cliente/update/{id}',[PessoaController:: class, 'update'])->name('vendaUpdate');
Route::get('/venda/cliente/dele/{id}',[PessoaController::class, 'delete'])->name('excluir');










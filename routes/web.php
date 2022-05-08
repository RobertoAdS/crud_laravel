<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;


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
    return view('produtos.create');
});

Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produtos/ver/{id}',[ProdutosController::class, 'show']);
Route::get('/produtos/editar/{id}', [ProdutosController::class, 'edit']);
Route::get('/produtos/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');
Route::get('/produtos/excluir/{id}', [ProdutosController::class, 'delete']);
Route::get('/produtos/excluir/{id}', [ProdutosController::class, 'destroy'])->name('excluir_produto');
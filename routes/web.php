<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

// --------------------- PRODUTO ----------------------------------

Route::get('/produto', [ProdutoController::class, 'index'])
->name('produto.index')->middleware('can:is_admin');

// create
// exibir o formulário
Route::get('/produto/create', [ProdutoController::class, 'create'])
->name('produto.create')->middleware('can:is_admin');

// salvar o formulário
Route::post('/produto/create', [ProdutoController::class, 'store'])
->name('produto.store')->middleware('can:is_admin');


Route::get('/produto/{id}', [ProdutoController::class, 'show'])
->name('produto.show')->middleware('can:is_admin');

// EDIT
// exibe o formulário com os dados do recurso
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])
->name('produto.edit')->middleware('can:is_admin');

// atualiza os dados do recurso passados pelo formulário
Route::put('/produto/{id}', [ProdutoController::class, 'update'])
->name('produto.update')->middleware('can:is_admin');

//DESTROY
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])
->name('produto.destroy')->middleware('can:is_admin');

// --------------------- PRODUTO ----------------------------------

// --------------------- CATEGORIA ----------------------------------

Route::get('/categoria', [CategoriaController::class, 'index'])
->name('categoria.index')->middleware('can:is_admin');

// create
// exibir o formulário
Route::get('/categoria/create', [CategoriaController::class, 'create'])
->name('categoria.create')->middleware('can:is_admin');

// salvar o formulário
Route::post('/categoria/create', [CategoriaController::class, 'store'])
->name('categoria.store')->middleware('can:is_admin');


Route::get('/categoria/{id}', [CategoriaController::class, 'show'])
->name('categoria.show')->middleware('can:is_admin');

// EDIT
// exibe o formulário com os dados do recurso
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])
->name('categoria.edit')->middleware('can:is_admin');

// atualiza os dados do recurso passados pelo formulário
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])
->name('categoria.update')->middleware('can:is_admin');

//DESTROY
Route::delete('/categoria/{id}', [categoriaController::class, 'destroy'])
->name('categoria.destroy')->middleware('can:is_admin');


// --------------------- CATEGORIA ----------------------------------
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

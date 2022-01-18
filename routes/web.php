<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;

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
    return view('welcome');
});

/*Home*/
Route::get('/home', function(){
    return view('home');
})->name('home');

/*Fornecedores*/
Route::get('/fornecedores/lista', [FornecedorController::class, 'index'])->name('fornecedores.lista');
Route::get('/fornecedores/{id}/view', [FornecedorController::class, 'show']);
Route::get('/fornecedores/{id}/edit', [FornecedorController::class, 'edit']);
Route::put('/fornecedores/{id}/update', [FornecedorController::class, 'update']);
Route::delete('/fornecedores/{id}/delete', [FornecedorController::class, 'destroy']);
Route::get('/fornecedores/create', [FornecedorController::class, 'create'])->name('fornecedores.create');
Route::post('/fornecedores/store', [FornecedorController::class,'store'])->name('fornecedores.store');

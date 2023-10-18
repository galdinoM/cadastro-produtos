<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/products', [ProdutoController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProdutoController::class, 'create'])->name('products.create');
Route::post('/products', [ProdutoController::class, 'store'])->name('products.store');

Route::get('/products', [ProdutoController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProdutoController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProdutoController::class, 'edit'])->name('products.edit');
Route::post('/products/{product}/update', [ProdutoController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProdutoController::class, 'destroy'])->name('products.destroy');



Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/products/list', function () {
    return view('products.list');
})->name('products.list');

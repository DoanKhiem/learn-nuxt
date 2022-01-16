<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ShelfController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BookController;
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

Route::get('/dashboard', function (){
    return view('backend.dashboard');
});
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::post('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('/book/delete/{id}', [BookController::class, 'delete'])->name('book.delete');

Route::get('/shelf', [ShelfController::class, 'index'])->name('shelf.index');
Route::get('/shelf/create', [ShelfController::class, 'create'])->name('shelf.create');
Route::post('/shelf/store', [ShelfController::class, 'store'])->name('shelf.store');
Route::get('/shelf/edit', [ShelfController::class, 'edit'])->name('shelf.edit');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit', [CategoryController::class, 'edit'])->name('category.edit');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ShelfController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BookController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\MemberController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\HomeController;
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

//Route::get('/dashboard', function (){
//    return view('backend.dashboard');
//});

Route::group(['middleware' => 'auth'], function () {

    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/book', [BookController::class, 'index'])->name('book');
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
    Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::post('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
    Route::get('/book/delete/{id}', [BookController::class, 'delete'])->name('book.delete');

    Route::get('/shelf', [ShelfController::class, 'index'])->name('shelf.index');
    Route::get('/shelf/create', [ShelfController::class, 'create'])->name('shelf.create');
    Route::post('/shelf/store', [ShelfController::class, 'store'])->name('shelf.store');
    Route::get('/shelf/edit/{id}', [ShelfController::class, 'edit'])->name('shelf.edit');
    Route::post('/shelf/update/{id}', [ShelfController::class, 'update'])->name('shelf.update');
    Route::get('/shelf/delete/{id}', [ShelfController::class, 'delete'])->name('shelf.delete');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');
    Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');
    Route::post('/department/store', [DepartmentController::class, 'store'])->name('department.store');
    Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
    Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
    Route::get('/department/delete/{id}', [DepartmentController::class, 'delete'])->name('department.delete');

    Route::get('/member', [MemberController::class, 'index'])->name('member.index');
    Route::get('/member/create', [MemberController::class, 'create'])->name('member.create');
    Route::post('/member/store', [MemberController::class, 'store'])->name('member.store');
    Route::get('/member/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');
    Route::post('/member/update/{id}', [MemberController::class, 'update'])->name('member.update');
    Route::get('/member/delete/{id}', [MemberController::class, 'delete'])->name('member.delete');

});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

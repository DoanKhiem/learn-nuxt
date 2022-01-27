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

Route::prefix('admin')->group(function(){
    Route::group(['middleware' => 'auth'], function () {

        Route::get('dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

        Route::get('/book', [BookController::class, 'index'])->name('admin.book.index');
        Route::get('/book/create', [BookController::class, 'create'])->name('admin.book.create');
        Route::post('/book/store', [BookController::class, 'store'])->name('admin.book.store');
        Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('admin.book.edit');
        Route::post('/book/update/{id}', [BookController::class, 'update'])->name('admin.book.update');
        Route::get('/book/delete/{id}', [BookController::class, 'delete'])->name('admin.book.delete');

        Route::get('/shelf', [ShelfController::class, 'index'])->name('admin.shelf.index');
        Route::get('/shelf/create', [ShelfController::class, 'create'])->name('admin.shelf.create');
        Route::post('/shelf/store', [ShelfController::class, 'store'])->name('admin.shelf.store');
        Route::get('/shelf/edit/{id}', [ShelfController::class, 'edit'])->name('admin.shelf.edit');
        Route::post('/shelf/update/{id}', [ShelfController::class, 'update'])->name('admin.shelf.update');
        Route::get('/shelf/delete/{id}', [ShelfController::class, 'delete'])->name('admin.shelf.delete');

        Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');

        Route::get('/department', [DepartmentController::class, 'index'])->name('admin.department.index');
        Route::get('/department/create', [DepartmentController::class, 'create'])->name('admin.department.create');
        Route::post('/department/store', [DepartmentController::class, 'store'])->name('admin.department.store');
        Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('admin.department.edit');
        Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('admin.department.update');
        Route::get('/department/delete/{id}', [DepartmentController::class, 'delete'])->name('admin.department.delete');

        Route::get('/member', [MemberController::class, 'index'])->name('admin.member.index');
        Route::get('/member/create', [MemberController::class, 'create'])->name('admin.member.create');
        Route::post('/member/store', [MemberController::class, 'store'])->name('admin.member.store');
        Route::get('/member/edit/{id}', [MemberController::class, 'edit'])->name('admin.member.edit');
        Route::post('/member/update/{id}', [MemberController::class, 'update'])->name('admin.member.update');
        Route::get('/member/delete/{id}', [MemberController::class, 'delete'])->name('admin.member.delete');

    });

    Route::get('/register', [AuthController::class, 'register'])->name('admin.register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('admin.registerPost');
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('admin.loginPost');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});


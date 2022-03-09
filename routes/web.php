<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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



Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/books', [BookController::class, 'index'])->name('buku');
Route::get('/books.detail/{slug}', [BookController::class, 'detail'])->name('books.detail');
Route::get('/category', [CategoryController::class, 'index'])->name('kategori');
Route::get('/categories.detail{slug}', [CategoryController::class, 'detail'])->name('categories.detail');
Route::get('/users', [UserController::class, 'index'])->name('siswa');



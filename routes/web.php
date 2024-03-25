<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowerController;
use App\Models\Book;
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

Route::get('/test/app', function () {
    return view('Admin.app');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('Admin.dashboard');
});

Route::get('/admin/admin/list', function(){
    return view('Admin.admin.list');
});

Route::get('/admin/book/index', [BookController::class, 'index'])->name('book.index');
Route::get('/admin/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/admin/book/index', [BookController::class, 'store'])->name('book.store');
Route::get('/admin/book/{book}/edit',[BookController::class, 'edit'])->name('book.edit');
Route::put('/admin/book/{book}/update',[BookController::class, 'update'])->name('book.update');
Route::delete('/admin/book/{book}/delete',[BookController::class, 'delete'])->name('book.delete');

Route::get('/admin/user/index', [BorrowerController::class, 'index'])->name('borrower.index');
Route::get('/admin/user/create', [BorrowerController::class, 'create'])->name('borrower.create');
Route::post('/admin/user/index', [BorrowerController::class, 'store'])->name('borrower.store');
Route::get('/admin/user/{borrower}/edit',[BorrowerController::class, 'edit'])->name('borrower.edit');
Route::put('/admin/user/{borrower}/update',[BorrowerController::class, 'update'])->name('borrower.update');
Route::delete('/admin/user/{borrower}/delete',[BorrowerController::class, 'delete'])->name('borrower.delete');
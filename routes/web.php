<?php

use App\Http\Controllers\BookController;
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

// Route::get('/create', function (){
//     return view('Book.create');
// })->name('book.create');

Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book', [BookController::class, 'store'])->name('book.store');
Route::get('/book/{book}/edit',[BookController::class, 'edit'])->name('book.edit');
Route::put('/book/{book}/update',[BookController::class, 'update'])->name('book.update');
Route::delete('/book/{book}/delete',[BookController::class, 'delete'])->name('book.delete');
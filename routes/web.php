<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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
    return view('welcome');
});


//student ko lagi
Route::get('backend/student/create', [StudentController::class, 'create']);
Route::post('backend/student', [StudentController::class, 'store'])->name('backend.student.store');
Route::get('backend/student/', [StudentController::class, 'index'])->name('backend.student.index');
Route::get('backend/student/{studentId}', [StudentController::class, 'show'])->name('backend.student.show');
Route::delete('backend/student/{studentId}',[StudentController::class,'destroy'])->name('backend.student.destroy');
Route::get('backend/student/{studentId}/edit', [StudentController::class, 'edit'])->name('backend.student.edit');
Route::put('backend/student/{studentId}', [StudentController::class, 'update'])->name('backend.student.update');



//borrow ko lagi
Route::get('backend/borrow/create', [BorrowController::class, 'create']);
Route::post('backend/borrow', [BorrowController::class, 'store'])->name('backend.borrow.store');
Route::get('backend/borrow/', [BorrowController::class, 'index'])->name('backend.borrow.index');
Route::get('backend/borrow/{borrowId}', [BorrowController::class, 'show'])->name('backend.borrow.show');
Route::delete('backend/borrow/{borrowId}',[BorrowController::class,'destroy'])->name('backend.borrow.destroy');
Route::get('backend/borrow/{borrowId}/edit', [BorrowController::class, 'edit'])->name('backend.borrow.edit');
Route::put('backend/borrow/{borrowId}', [BorrowController::class, 'update'])->name('backend.borrow.update');


//author ko lagi
Route::get('backend/author/create', [AuthorController::class, 'create']);
Route::post('backend/author', [AuthorController::class, 'store'])->name('backend.author.store');
Route::get('backend/author/',[\App\Http\Controllers\AuthorController::class,'index'])->name('backend.author.index');
Route::get('backend/author/{authorId}',[\App\Http\Controllers\AuthorController::class,'show'])->name('backend.author.show');
Route::delete('backend/author/{authorId}',[\App\Http\Controllers\AuthorController::class,'destroy'])->name('backend.author.destroy');
Route::get('backend/author/{authorId}/edit', [AuthorController::class, 'edit'])->name('backend.author.edit');
Route::put('backend/author/{authorId}', [AuthorController::class, 'update'])->name('backend.author.update');



//book ko lagi
Route::get('backend/book/create', [BookController::class, 'create']);
Route::post('backend/book', [BookController::class, 'store'])->name('backend.book.store');
Route::get('backend/book/',[\App\Http\Controllers\BookController::class,'index'])->name('backend.book.index');
Route::get('backend/book/{bookId}',[\App\Http\Controllers\BookController::class,'show'])->name('backend.book.show');
Route::delete('backend/book/{bookId}',[\App\Http\Controllers\BookController::class,'destroy'])->name('backend.book.destroy');
Route::get('backend/book/{bookId}/edit', [BookController::class, 'edit'])->name('backend.book.edit');
Route::put('backend/book/{bookId}', [BookController::class, 'update'])->name('backend.book.update');

//type ko lagi
Route::get('backend/type/create', [TypeController::class, 'create'])->name('backend.type.create');;
Route::post('backend/type', [TypeController::class, 'store'])->name('backend.type.store');
Route::get('backend/type/',[\App\Http\Controllers\TypeController::class,'index'])->name('backend.type.index');
Route::get('backend/type/{typeId}',[\App\Http\Controllers\TypeController::class,'show'])->name('backend.type.show');
Route::delete('backend/type/{typeId}',[\App\Http\Controllers\TypeController::class,'destroy'])->name('backend.type.destroy');
Route::get('backend/type/{typeId}/edit',[TypeController::class,'edit'])->name('backend.type.edit');
Route::put('backend/type/{typeId}',[TypeController::class,'update'])->name('backend.type.update');




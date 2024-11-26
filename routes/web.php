<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\RentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('new-genre',[GenreController::class,'index'])->name('genre.index');
Route::post('new-genre',[GenreController::class,'createGenre'])->name('genre.createGenre');


Route::get('new-book',[BookController::class,'index'])->name('book.index');
Route::post('new-book',[BookController::class,'createBook'])->name('book.createBook');


Route::get('books',[RentController::class,'index'])->name('book.books');
Route::post('deleteBook',[BookController::class,'deleteBook'])->name('book.destroy');

Route::get('books/book/{id}',[RentController::class,'kolcsonzes']);
Route::post('books/book/{id}',[RentController::class,'rentBook']);

Route::get('back',[RentController::class,'backPage'])->name('rent.back');
Route::post('back',[RentController::class,'backPagePost'])->name('rent.save');

Route::get('rentals',[RentalsController::class,'index'])->name('rentals.index');

<?php

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

Route::get('/', function () {
    $books = config('db.books');
    //dd($books);
    return view('comics', compact('books'));
})->name('comics');

Route::get('/comics', function () {
    $books = config('db.books');
    //dd($books);
    return view('comics', compact('books'));
})->name('comics');

Route::get('/characters', function () {
    $books = config('db.books');
    //dd($books);
    return view('characters', compact('books'));
})->name('characters');

Route::get('/movies', function () {
    $books = config('db.books');
    //dd($books);
    return view('movies', compact('books'));
})->name('movies');

Route::get('/books/{id}', function ($id) {
    $books = config('db.books');
    if ($id >= 0 && is_numeric($id) && $id < count($books)) {
        $book = $books[$id];
        return view('book_show', compact('book'));
    } else {
        abort(404);
    }
})->name('books_show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

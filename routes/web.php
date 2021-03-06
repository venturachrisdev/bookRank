<?php

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

Route::middleware(['auth'])->group(function () {
	Route::get('/', 'BookController@index')->name('home');
	Route::get('/books/{book}', 'BookController@show')->name('showBook');
	Route::get('/books/{filter}/{val}', 'BookController@filter')->name('filterBooks');

	Route::get('/authors/{author}', 'AuthorController@show')->name('showAuthor');
});
Auth::routes();

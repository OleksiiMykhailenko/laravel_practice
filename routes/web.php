<?php

Route::get('/book', "BookController@create")->name('create');

Route::post('/book', "BookController@store")->name('create_book');

Route::get('/books', "BookController@index")->name('list_books');

Route::get('/book{id}', "BookController@show")->name('show_book');

Route::get('/books/{id}/edit', "BookController@edit")->name('edit_book');

Route::post('/books/{id}/update', "BookController@update")->name('update_book');

Route::get('/books{id}/delete', "BookController@destroy")->name('delete_book');


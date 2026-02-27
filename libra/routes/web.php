<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReadBookController;
use App\Http\Controllers\DownloadBookController;

Route::view('/','index')->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


//Route::post('/registration','RegisterController@req' );

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::post('/register', [RegisterController::class, 'reg'])->name('register');

Route::get('/books/{id}-{alt_name}.html', BooksController::class)->name('books_page');
Route::get('/read/{id}-{alt_name}.html', ReadBookController::class)->name('read_page');
Route::get('/download/{id}', DownloadBookController::class)->name('download');




//Route::get('/books/{id}-{alt_name}.html', BooksController::class)->name('books.page');


/*
Route::name('user.')->group( function () {

   if(Auth::check()){
     return redirect(route(name: 'user.private'));
    }

   Route::view('/private', 'private')->middleware(middleware: 'auth')->name(name: 'private');

   Route::get('/login', function () {
          return view(view: 'login');
   })->name(name: 'login');

//Route::post('/login', []);
//Route::get('/logout', [])->name(name: 'logout');
  Route::get('/register', function (){
   if(Auth::check()){
     return redirect(route(name: 'user.private'));
    }

    return view(view: 'register');
  })->name(name: 'register');

 Route::post('/register', [RegisterController::class, 'reg']);

});
*/

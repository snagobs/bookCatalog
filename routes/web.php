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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/home', function () {
    return view('home');
});



Auth::routes();

Route::resource('book', 'BookController');
Route::get('/search', 'BookController@search')->middleware('auth');
Route::get('book/create', 'BookController@create')->middleware('admin');
Route::get('book/{id}/delete', 'BookController@delete')->middleware('admin');
Route::get('book/{book}/edit', 'BookController@edit')->name('book.edit')->middleware('admin');
Route::get('book/{id}/edit', 'BookController@edit')->name('book.edit')->middleware('admin');
Route::get('book/{id}', 'BookController@show')->name('book.show')->middleware('auth');

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

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



// comics pages routes


Route::get('/', 'ComicController@home')->name('comics');
Route::get('comics/{comic}', 'ComicController@show')->name('comic');


// posts

// mostra lista risorse
Route::get('posts', 'Admin/PostController@index')->name('admin.posts.index');


// mostra form per creare nuova risorsa
Route::get('posts/create', 'Admin/PostController@create')->name('admin.posts.create');

//salvare risorsa
Route::post('posts', 'Admin/PostController@store')->name('admin.posts.store');

//Mostro singola risorsa
Route::get('posts/{post}', 'Admin/PostController@show')->name('admin.posts.post');

//Mostro form per modificare risorsa
Route::post('posts/{post}/edit', 'Admin/PostController@edit')->name('admin.posts.edit');

//Aggiorniamo la risorsa nel database
Route::put('posts/{post}', 'Admin/PostController@update')->name('admin.posts.update');

//Per eliminare risorsa nel database
Route::delete('posts/{post}', 'Admin/PostController@destroy')->name('admin.post.destroy');



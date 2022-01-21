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


Route::get('/', 'ComicController@index')->name('comics');
Route::get('comics/{comic}', 'ComicController@show')->name('comic');

// dashboard
Route::view('admin', 'admin.dashboard')->name('admin');


// posts

// mostra lista risorse
Route::get('admin/posts', 'Admin\PostController@index')->name('admin.posts.index');


// mostra form per creare nuova risorsa
Route::get('admin/posts/create', 'Admin\PostController@create')->name('admin.posts.create');

//salvare risorsa
Route::post('admin/posts', 'Admin\PostController@store')->name('admin.posts.store');

//Mostro singola risorsa
Route::get('admin/posts/{post}', 'Admin\PostController@show')->name('admin.posts.show');

//Mostro form per modificare risorsa
Route::get('admin/posts/{post}/edit', 'Admin\PostController@edit')->name('admin.posts.edit');

//Aggiorniamo la risorsa nel database
Route::put('admin/posts/{post}', 'Admin\PostController@update')->name('admin.posts.update');

//Per eliminare risorsa nel database
Route::delete('admin/posts/{post}', 'Admin\PostController@destroy')->name('admin.posts.destroy');

//tutto insieme
Route::resource('movies', 'Admin\MovieController');

//guest post
Route::get('/news', 'PostController@index')->name('news');

Route::get('/news/{post}', 'PostController@show')->name('single-post');




//Games guest
Route::get('/games', function () {
    return 'Games Page';
})->name('games');

//games admin

//view
Route::get('/admin/games', 'Admin\GameController@index')->name('admin.games.index');

//show
Route::get('/admin/games/{game}', 'Admin\GameController@show')->name('admin.games.show');

//create
Route::get('/admin/games/create', 'Admin\GameController@create')->name('admin.games.create');

//save new
Route::post('/admin/games', 'Admin\GameController@store')->name('admin.games.store');

//edit
Route::get('/admin/games/{game}/edit', 'Admin\GameController@edit')->name('admin.games.edit');

//update
Route::put('/admin/games/{game}', 'Admin\GameController@update')->name('admin.games.update');

//delete
Route::delete('/admin/games/{game}', 'Admin\GameController@destroy')->name('admin.games.destroy');



//Guest routes: index and show

//Admin routes: index, show, create, edit, store, update, delete




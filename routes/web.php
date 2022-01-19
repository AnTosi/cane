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

Route::get('/', 'HomeController@index')->name('comics');


// comics pages routes
Route::get('/comics', 'ComicController@index')->name('comics');

Route::get('comics/{id}', function ($id){
    $comics = config('db.comics');

    $comic = $comics[$id];

    return view('comics.show', compact('comic'));
})->name('comic');

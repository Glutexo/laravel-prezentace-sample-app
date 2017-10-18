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

use Illuminate\View\View;

Route::get('/', function (): View {
    return view('welcome');
})->name('home');

Route::get('/hello/{what}', function (string $what): View {
    return view('hello', compact('what'));
})->name('hello');

Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/{post}', 'PostsController@show')->name('post');

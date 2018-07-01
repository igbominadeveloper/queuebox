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
    return view('welcome',['page'=>'Homepage']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/clippings','NewspaperController');
Route::resource('/tweets','TwitterController');
Route::resource('/posts','PostController');
Route::resource('/videos','VideoController');
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

Route::get('/', 'PostController@index');
Route::get('/movies', 'PageController@movies');
Route::get('/actors', 'PageController@actors');
Route::get('/blog', 'PageController@blog');
Route::get('/about', 'PageController@about');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

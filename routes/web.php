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
Route::get('/','personController@index');

/*Route::get('/','homeController@index')->name('home');
Route::get('/blog','homeController@blog')->name('blog');
Route::get('/single_post','homeController@single')->name('single');
Route::get('/about_us','homeController@about')->name('about');
Route::get('/contact_us','homeController@contact')->name('contact');*/


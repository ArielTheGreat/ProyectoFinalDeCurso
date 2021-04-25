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
Route::get('/', 'App\Http\Controllers\InicioController@load')->name('inicio');
Route::get('/results', 'App\Http\Controllers\InicioController@results')->name('results');
Route::get('/watch/{id}', 'App\Http\Controllers\InicioController@watch')->name('watch');

Auth::routes();
Route::get('/blog','App\Http\Controllers\WebsiteController@index')->name('index');

Route::get('category/{slug}', 'App\Http\Controllers\WebsiteController@category')->name('category');
Route::get('post/{slug}', 'App\Http\Controllers\WebsiteController@post')->name('post');
Route::get('page/{slug}', 'App\Http\Controllers\WebsiteController@page')->name('page');
Route::get('contact', 'App\Http\Controllers\WebsiteController@showContactForm')->name('contact.show');
Route::post('contact', 'App\Http\Controllers\WebsiteController@submitContactForm')->name('contact.submit');

Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
    Route::resource('pages', 'PageController');
    Route::resource('galleries', 'GalleryController');
});


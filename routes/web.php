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



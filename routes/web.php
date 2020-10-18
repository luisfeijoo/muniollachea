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

Route::get('/', function () {
    return view('web.welcome');
});

Route::get('/historia', 'PageController@historia')->name('page_historia');
Route::get('/geografia', 'PageController@geografia')->name('page_geografia');
Route::get('/turismo', 'PageController@turismo')->name('page_turismo');

Route::get('/mesa-de-partes', function () {
    return view('mesa_de_partes');
});


Route::post('/upload', function () {

});

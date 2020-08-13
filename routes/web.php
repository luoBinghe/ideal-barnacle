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
    return view('welcome');
 });

Route::get('/imoveis/remove/{id}', 'ImovelController@remover')->name('imoveis.remove');
Route::resource('imoveis', 'ImovelController');
// Route::get('/imoveis', 'ImovelController@index')->name('imoveis.index');
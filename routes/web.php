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
    return view('welcome');
});

Route::get('form', 'CadastroController@form');

Route::get('grava', 'CadastroController@grava');

Route::post('grava', 'CadastroController@grava');

Route::get('lista', 'CadastroController@lista2');

Route::resource('produtos', 'ProdutoController');

Route::get('mercado', function () {
    return view('mercado');
});


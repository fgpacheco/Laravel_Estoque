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

Route::get('/produto/lista/', 'ProdutoController@lista');
Route::get('/produto/detalhes/{id}', 'ProdutoController@detalhes')->where('id', '[0-9]+');
Route::get('/produto/novo', 'ProdutoController@novo');
Route::post('/produto/adicionar', 'ProdutoController@adiciona');
Route::get('/teste', function() {
	return 'teste';
});
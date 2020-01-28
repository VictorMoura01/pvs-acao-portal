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
    return view('index');
});

Route::get('/proposta', function () {
    return view('proposta.index');
});

Route::get('/selecao/professores', function () {
    return view('selecao.professores.index');
});


Route::get('/equipe', 'EquipeController@index');

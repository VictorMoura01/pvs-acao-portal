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
    return view('selecao.professor');
});

Route::get('/selecao/alunos', function () {
    return view('selecao.aluno');
});


//Route::get('/equipe', 'ColaboradorController@index');

Route::get('/contato', 'ContatoController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/dashboard/equipe', 'ColaboradorController@index')->name('listar_equipe');
Route::post('/dashboard/equipe', 'ColaboradorController@store');


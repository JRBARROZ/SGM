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
/*
Route::get('/', function () {
    return view('index');
});
*/
// index
Route::get('/', 'PerguntaController@index');

// exbir pergunta selecionada pelo usuario
Route::get('/pergunta/{id}', 'PerguntaController@show')->name('exibir-pergunta');

// adicionar nova pergunta
Route::post('/pergunta/adiciona', 'PerguntaController@store')->name('adicionar-pergunta');

// editar pergunta feita pelo usuario
Route::get('/pergunta/editar/{id}', 'PerguntaController@edit')->name('editar-pergunta');

// salva pergunta editada pelo usuario
Route::put('pergunta/salvar/{id}', 'PerguntaController@update')->name('salvar-pergunta');

// 
Route::post('/pergunta/filtrar', 'PerguntaController@filter')->name('filtrar-pergunta');

// deletar pergunta feita pelo usuario
Route::get('/pergunta/delete/{id}', 'PerguntaController@destroy')->name('delete');

//Index de atas
Route::get('/atas', 'AtasController@index')->name('index-atas');

//Adicionar
Route::post('/atas', 'AtasController@store')->name('salvar-dados');

// adiciona respostas
Route::put('/resposta/adicionar/{id}', 'RespostaController@store')->name('adicionar-resposta');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



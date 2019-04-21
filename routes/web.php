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
Route::get('/', 'PerguntaController@index')->name('index');

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

//Atas

Route::prefix('ata')->group(function(){
    //Index
    Route::get('/','AtaController@index')->name('ataIndex');
    //Store
    Route::post('/store','AtaController@store')->name('ataStore');
    //Edit
    Route::get('/edit/{id}','AtaController@edit')->name('ataEdit');
    //Update
    Route::post('/update/{id}','AtaController@update')->name('ataUpdate');
    //Destroy
    Route::get('/destroy/{id}','AtaController@destroy')->name('ataDestroy');

});

//Perfil
Route::resource('user',  'PerfilController');

// adiciona respostas
Route::put('/resposta/adicionar/{id}', 'RespostaController@store')->name('adicionar-resposta');

// remove respostas
Route::get('resposta/deletar/{id}/{perg}', 'RespostaController@destroy')->name('remover-resposta');

// edita respostas
Route::get('resposta/editar/{id}/{perg}', 'RespostaController@edit')->name('editar-resposta');

// salva edição da resposta
Route::put('/resposta/salvar/{id}/{perg}', 'RespostaController@update')->name('salvar-resposta');


// lista e exibe as monitorias
Route::get('/monitorias', function(){
	return view('monitoria');
})->name('monitorias');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



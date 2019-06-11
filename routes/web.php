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

Route::get('/teste', 'AtaController@teste');

Route::prefix('pergunta')->group(function(){

    Route::get('/{id}', 'PerguntaController@show')->name('exibir-pergunta');

    // adicionar nova pergunta
    Route::post('/adiciona', 'PerguntaController@store')->name('adicionar-pergunta');

    // editar pergunta feita pelo usuario
    Route::get('/editar/{id}', 'PerguntaController@edit')->name('editar-pergunta');

    // salva pergunta editada pelo usuario
    Route::put('pergunta/salvar/{id}', 'PerguntaController@update')->name('salvar-pergunta');

    // filtra perguntas por curso
    Route::get('/filtro/curso/{id}', 'PerguntaController@filtroCurso')->name('pergunta-curso');

    // filtra perguntas por curso
    Route::get('/filtro/estado/{estado}', 'PerguntaController@filtroEstado')->name('pergunta-estado');

    // deletar pergunta feita pelo usuario
    Route::get('/delete/{id}', 'PerguntaController@destroy')->name('delete');

});
    Route::get('/status/{id}', 'PerguntaController@status')->name('estado');


//pegar tabelas necessarias no sistema
Route::get('/Pergunta-Table', 'PerguntaController@table')->name('Pergunta-Table');
Route::get('/Monitoria-Table', 'MonitoriaController@table')->name('Monitoria-Table');
// exbir pergunta selecionada pelo usuario

Route::prefix('monitoria')->group(function(){
    Route::get('/', 'MonitoriaController@index')->name('monitoria-index');
    Route::get('/area-do-monitor', 'MonitoriaController@monitor')->name('monitoria-monitor');
    Route::post('/agendar', 'MonitoriaController@store')->name('monitoria-agendar');
    Route::get('/agendar/{id}', 'MonitoriaController@destroy')->name('monitoria-deletar');
});


//Atas

Route::prefix('ata')->group(function(){
    //Index
    Route::get('/{id}','AtaController@index')->name('ataIndex');
    //Store
    Route::post('/store/{monitoria_id}','AtaController@store')->name('ataStore');
    //Edit
    Route::get('/edit/{id}','AtaController@edit')->name('ataEdit');
    //Update
    Route::post('/update/{id}','AtaController@update')->name('ataUpdate');
    //Destroy
    Route::get('/destroy/{id}','AtaController@destroy')->name('ataDestroy');

});

//Perfil
Route::resource('user',  'PerfilController');
Route::get('/user/teste/{id}', 'PerfilController@create')->name('testing');

Route::get('/perfil', 'PerfilController@index')->name('perfil');
// adiciona respostas
Route::put('/resposta/adicionar/{id}', 'RespostaController@store')->name('adicionar-resposta');

// remove respostas
Route::get('resposta/deletar/{id}/{perg}', 'RespostaController@destroy')->name('remover-resposta');

// edita respostas
Route::get('resposta/editar/{id}/{perg}', 'RespostaController@edit')->name('editar-resposta');

Route::get('resposta/correta/{id}/{perg}', 'RespostaController@correta')->name('resposta-correta');
Route::get('respostas/{id}', 'RespostaController@table')->name('resposta-table');

// salva edição da resposta
Route::put('/resposta/salvar/{id}/{perg}', 'RespostaController@update')->name('salvar-resposta');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rota para dashboard-admin (ainda sem funcionalidades prontas)

// rota para o inicio da dashboard do adminstrador
Route::get('/admin', 'AdminController@index');

Route::get('/login-adm', function(){
    return view('login-adm');
});

Route::get('/register-adm', function(){
    return view('register-adm');
});

Route::prefix('chat')->group(function(){
    //pegar mensagens do chat
Route::get('/mensagens','MensagensController@getMensagens')->name('mensagens');
    //contar quantas mensagens tem no chat para atualizar caso tenha novas
Route::get('/mensagensCount', 'MensagensController@count')->name('count');
    //enviar novas mensagens para o banco
Route::any('/enviarMensagem', 'MensagensController@store')->name('enviarMensagem');
});
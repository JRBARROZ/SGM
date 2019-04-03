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

Route::get('/', 'PerguntaController@index');

Route::post('/pergunta/adiciona', 'PerguntaController@store')->name('adicionar-pergunta');
Route::put('/pergunta/delete/{$id}', 'PerguntaController@destroy')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/pdf', 'pdf');

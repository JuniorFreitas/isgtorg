<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect()->route('trabalhe.index');
});

Auth::routes();

Route::group(['as' => 'trabalhe.', 'prefix' => 'trabalheconosco'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'CurriculoController@index']);
    Route::post('/cadastrar', ['as' => 'cadastrar', 'uses' => 'CurriculoController@cadCurriculo']);
    Route::get('/cadastrado', ['as' => 'concluido', 'uses' => 'CurriculoController@cadastrado']);
    Route::get('/error', ['as' => 'error', 'uses' => 'CurriculoController@error']);
    Route::post('/verificaCpf', ['as' => 'verificaCpf', 'uses' => 'CurriculoController@verificaCpf']);
    Route::get('/formcadastro', ['as' => 'formcadastro', 'uses' => 'CurriculoController@formcadastro']);
    Route::get('/formedit', ['as' => 'formedit', 'uses' => 'CurriculoController@formedit']);
});

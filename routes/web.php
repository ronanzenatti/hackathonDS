<?php

Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/curso', 'CursoController@index')->name('curso');

    Route::get('/inscricao', 'InscricaoController@index')->name('inscricao');

    Route::get('/grupo', 'GrupoController@index')->name('grupo');

    Route::get('/projeto', 'ProjetoController@index')->name('projeto');

    Route::get('/evento', 'EventoController@index')->name('evento');
    

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


<?php

Route::group(['middleware' => ['auth']], function() {
    
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/curso', 'CursoController@index')->name('curso');

    Route::get('/cadastrar-curso', 'CursoController@cadastrarCurso');
    
    Route::get('/inscricao', 'InscricaoController@index')->name('inscricao');
    
    Route::get('/grupo', 'GrupoController@index')->name('grupo');
    
    Route::get('/projeto', 'ProjetoController@index')->name('projeto');
    
    Route::get('/evento', 'EventoController@index')->name('evento');
    
    Route::resource('ajaxproducts','CursoAjaxController');
    
});

Route::get('/', 'WelcomeController@index');

Route::get('/sobre', 'AboutController@index');

Route::get('/cronograma', 'ScheduleController@index');

Auth::routes();

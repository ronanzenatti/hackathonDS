<?php


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cursos', 'CursoController@index')->name('curso');

Route::prefix('cursos')->group(function() {

    Route::get('/inserir', 'CursoController@cadastrarCurso');
    
});

Route::get('/inscricoes', 'InscricaoController@index')->name('inscricao');

Route::get('/grupos', 'GrupoController@index')->name('grupo');

Route::get('/projetos', 'ProjetoController@index')->name('projeto');

Route::get('/eventos', 'EventoController@index')->name('evento');

Route::resource('ajaxproducts','CursoAjaxController');
    

Route::get('/', 'WelcomeController@index');

Route::get('/sobre', 'AboutController@index');

Route::get('/cronograma', 'ScheduleController@index');

Auth::routes();

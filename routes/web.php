<?php

// Rotas de navegação no menu (quando logado)
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cursos', 'CursoController@index')->name('cursos');
Route::post('/cursos', 'CursoController@cadastrar')->name('cursos.save');

// Rota com prefixo 'cursos'
Route::prefix('cursos')->group(function() {

    Route::get('/inserir', 'CursoController@cadastrarCurso')->name('cursos.inserir');
});

// Rotas de navegação no menu (quando logado)
Route::get('/inscricoes', 'InscricaoController@index')->name('inscricoes');
Route::get('/grupos', 'GrupoController@index')->name('grupos');
Route::get('/projetos', 'ProjetoController@index')->name('projetos');
Route::get('/eventos', 'EventoController@index')->name('eventos');

// Route::resource('ajaxproducts','CursoAjaxController');


// Rotas Wellcome
Route::get('/', 'WelcomeController@index')->name('welcome.index');
Route::get('/sobre', 'AboutController@index')->name('welcome.sobre');
Route::get('/cronograma', 'ScheduleController@index')->name('welcome.cronograma');

Auth::routes();

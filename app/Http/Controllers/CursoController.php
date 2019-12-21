<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{

    public function index()
    {
        return view('curso.index');
    }

    public function cadastrar(Request $request)
    {
        // Guarda os valores de nome e gra_instrucao dentro de um array
        $cursos = $request->except('_token');

        // insere o array no banco de dados
        DB::table('cursos')->insert($cursos);

        // redireciona para a rota cursos
        return redirect()->route('cursos');

    }

    public function cadastrarCurso()
    {
        return view('curso.uiCurso');
    }

}

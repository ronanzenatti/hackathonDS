<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscricaoController extends Controller
{
    public function index()
    {
        return view('inscricao.index');
    }
}

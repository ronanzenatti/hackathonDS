@extends('adminlte::page')

@section('title', 'Cadastrar Curso')

@section('content_header')
    <h1>Cadastrar</h1>
@stop

@section('content')
    <div class="box">
        <form class="form" action="{{ route('cursos.save') }}" method="post">
            {!! csrf_field() !!}
            <div class="box-body">
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-5">
                            <label for="nome">Curso:</label>
                            <input type="text" class="form-control" name="nome" required placeholder="Nome do Curso...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-7">
                            <label for="grau_instrucao">Grau Instruição:</label>
                            <input type="text" class="form-control" name="grau_instrucao" required placeholder="Grau Instrução...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-4 text-left">
                        <a href="{{ route('cursos') }}" class="btn btn-danger">Voltar</a>
                    </div>
                    <div class="col-sm-4 text-center">
                        <button type="reset" class="btn btn-warning">Limpar</button>
                    </div>
                    <div class="col-sm-4 text-right">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@stop

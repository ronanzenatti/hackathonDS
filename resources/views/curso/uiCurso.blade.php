@extends('adminlte::page')

@section('title', 'Cadastrar Curso')

@section('content_header')
    <h1>Cadastrar</h1>
@stop

@section('content')

    <form action="">

        <div class="box-footer">
            <div class="row">
                <div class="col-sm-4 text-left">
                    <a href="{{ url('/cursos') }}" class="btn btn-danger">Voltar</a>
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

@stop

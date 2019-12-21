@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')
    <h1>Cursos</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <div class="text-right">
                <a href="{{ route('cursos.inserir') }}" class="btn btn-success btn-novo">Novo</a>
            </div>
        </div>
        <div class="box-body">
            <table id="tableAdolescente" class="table table-striped table-bordered table-hover" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Curso</th>
                    <th>Grau de Inscrição</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')

@endsection


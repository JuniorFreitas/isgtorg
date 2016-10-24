@extends('curriculo.layout')

@section('conteudo')

    <div class="well text-center">
        <div class="alert alert-danger">
            <h3>{{($msg==404 ? "ERRO Tente novamente clique em voltar!" : "ERRO ao cadastrar! CPF ja em nossa base de dados")}}</h3>
        </div>
        <a href="{{route('trabalhe.index')}}" class="btn btn btn-success btn-info">Voltar</a>
    </div>
@endsection
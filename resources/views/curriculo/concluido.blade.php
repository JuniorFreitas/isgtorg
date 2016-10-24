@extends('curriculo.layout')

@section('conteudo')
    <div class="well text-center">
        <h3>Seu curriculo foi cadastrado com sucesso! <br> Estaremos analisando, obrigado por se cadastrar.</h3>
        <a href="{{route('trabalhe.index')}}" class="btn btn btn-success btn-info">Voltar</a>
    </div>
@endsection
@extends('curriculo.layout')
@section('conteudo')

    <div class="modal fade" id="dialog" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span
                                class="sr-only">Fechar</span></button>
                    <h4 class="modal-title" id="tituloModal" style="color:#ffffff">Titulo</h4>
                </div>
                <div class="modal-body" id="conteudoModal">

                </div>

            </div>
        </div>
    </div>
    <br>
    <article class="container" id="conteudo">

        <div class="alert alert-danger abelFont" id="erro"></div>
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li style="list-style: none">{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form method="post" action="" id="consultaCPF" class="form-horizontal abelFont" style="font-size: 1.1em;">
            <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
            <input type="hidden" name="url" id="url" value=" {{url()->current()}}">
            <div class="form-group" id="vcpf">
                <label class="col-md-4 control-label" for="CPF:">CPF:</label>
                <div class="col-md-6">
                    <input id="cpf" name="cpf" value="{{old('cpf')}}" min="10" type="text" placeholder="Seu CPF"
                           class="form-control input-md">
                </div>
                <button class="btn btn-success" id="btConsult">Consultar</button>
            </div>
        </form>

        <div id="main-cont">

        </div>


    </article>

@endsection
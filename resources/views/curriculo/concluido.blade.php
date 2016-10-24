@extends('curriculo.layout')
@section('conteudo')
   <script>
       $(function () {
           Notify('Curriculo cadastrado com sucesso!','','error','Fechar','{{url('/')}}');
       });
   </script>
@endsection
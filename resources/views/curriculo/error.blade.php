@extends('curriculo.layout')

@section('script')
    <script>
        $(function () {
            Notify('ERRO','Tente novamente','error','Voltar...','{{url('/')}}');
        });
    </script>
@endsection
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>ISGT CADASTRO DE PROFISSIONAIS</title>
    <link rel="stylesheet" href="{{elixir('css/site.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

</head>
<body>
<body style="background: #f8f8f8">
<div class=" header">
    <img src="{{asset('imagens/bg.jpg')}}" alt="" class="img-responsive"/>
</div>
@yield('conteudo')
<footer role="navigation" style="border-radius: 0px; border-top: 1px #ccc dashed; border-bottom: 1px #ccc dashed;">
    <p class="text-center" style="color: #333; margin-top: 1em">Desenvolvido por ISGT &copy; {{date('Y')}} </p>
</footer>
<script src="{{elixir('js/site.js')}}"></script>
@if ( Config::get('app.debug') )
    <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
    </script>
@endif
</body>
</html>
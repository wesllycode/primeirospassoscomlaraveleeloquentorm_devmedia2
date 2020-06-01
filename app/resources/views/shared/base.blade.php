<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="refresh" content="3" url=""> -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>CRUD - Cadastro de Imóveis 2020</title>
        <!-- Primary Meta Tags -->
        <title>CRUD básico de imobiliária</title>
        <meta name="title" content="CRUD básico de imobiliária">
        <meta name="description" content="Sistema de cadastro de imóveis para apartamentos, casas e entre outros.">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://metatags.io/">
        <meta property="og:title" content="CRUD básico de imobiliária">
        <meta property="og:description" content="Sistema de cadastro de imóveis para apartamentos, casas e entre outros.">
        <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://metatags.io/">
        <meta property="twitter:title" content="CRUD básico de imobiliária">
        <meta property="twitter:description" content="Sistema de cadastro de imóveis para apartamentos, casas e entre outros.">
        <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<style>
    *{
        margin: 0;
        padding:0;
    }
    body{
        padding-top:70px;
    }
</style>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Inicio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('imoveis.index')}}">Todos</a></li>
                    <li><a href="{{route('imoveis.index','tipo=apartamento')}}">Apartamentos</a></li>
                    <li><a href="{{route('imoveis.index','tipo=casa')}}">Casas</a></li>
                    <li><a href="{{route('imoveis.index','tipo=kitnet')}}">Kitnets</a></li>
                    <li><a href="{{route('imoveis.index','tipo=galpao')}}">Galpão</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    @yield('content')
</div>

</body>
</html>

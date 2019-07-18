<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v3.8.5">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#203064">
    <meta name="apple-mobile-web-app-status-bar-style" content="#203064">
    <link rel="icon" type="image/x-icon" href="/imagens/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
    <link href="https://safeimport.com.br/blog/css/blog.css" rel="stylesheet">
    <title>Safe Import | Blog</title>
</head>

<body>
<header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><img class="imagem" src="{{ asset('images/safe.png')}}" alt="Logotipo da Safe Import"></a>
            </div>
        </nav>
    </div>
</header>

<main>
    <div class="container">
        <div class="row">

            @yield('content')


        </div>
    </div>
</main>

@if (Auth::check())
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            <p class="center">© Safe Import - 2019</p>
        </div>
    </div>
</footer>
@else
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <p class="center">© Safe Import - 2019</p>            
        </div>
    </div>
</footer>
@endif

<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://safeimport.com.br/blog/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="https://safeimport.com.br/blog/js/blog.js"></script>


@yield('js')

</body>
</html>

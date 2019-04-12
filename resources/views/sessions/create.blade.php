<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v3.8.5">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Safe Import | Blog</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">

    <link href="/css/blog.css" rel="stylesheet">


</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo"><img class="imagem" src="images/safe.png" alt="Logotipo da Safe Import"></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down">
                        <li>
                        </li>
                        <li id="menu-home"><a>Home</a></li>
                        <li id="menu-sobre"><a>Sobre nós</a></li>
                        <li id="menu-como-funciona"><a>Como funciona</a></li>
                        <li id="menu-duvidas"><a>Dúvidas frequentes</a></li>
                        <li><a>Notícias</a></li>
                        <li id="menu-contato"><a>Contato</a></li>
                        @if (Auth::check())
                            <li><label>Usuário logado: {{ Auth::user()->name }}</label></li>
                            <li><a href="/logout" title="Sair"><i class="material-icons sair">exit_to_app</i></a></li>
                        @endif
                    </ul>
                    <form action="/posts/search" method="POST">
                        {{ csrf_field() }}
                        <div class="input-field right">
                            <input id="search" type="search" name="criterio" >
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                        
                    </form>
                </div>
            </nav>
        </div>
    </header>

    <div class="container" style="margin-top: 40px; margin-bottom: 40px;">
        <div class="col s12 m6 offset-m3">
            <div class="card-panel">
                <form method="POST" action="/admin">
                    {{ csrf_field() }}
                    <div class="card-content">
                        <h3 class="center">Login</h3>
                        <div class="row">
                            <div class="container">
                                <div class="input-field col s12">
                                    <input id="email" type="email" name="email" id="email" class="validate">
                                    <label for="email">E-mail</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="password" type="password" name="password" id="password" class="validate">
                                    <label for="password">Senha</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action center">
                        <div class="row">
                            <div class="container">
                                <button type="submit" class="btn-large btn-custom blue">Entrar</button>
                                @include('layouts.errors')
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <div class="row">
            <div class="col s12 l12 m6 ">
            <div class="rede-sociais center">
                <h5 class="white-text">Redes sociais</h5>
                <a class="btn-floating btn-large waves-effect waves-light btn-facebook"><i class="fab fa-facebook fa-2x"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light btn-instagram"><i class="fab fa-instagram fa-2x"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light btn-email"><i class="material-icons">email</i></a>
                <a class="btn-floating btn-large waves-effect waves-light btn-telefone"><i class="material-icons">local_phone</i></a>
            </div>


            <!-- <h5 class="white-text">Footer Content</h5> -->
            <!-- <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p> -->
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <p class="center">© Safe Import - 2019</p>
            </div>
        </div>
    </footer>

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="{{ asset('js/blog.js') }}"></script>


@yield('js')

</body>
</html>


<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v3.8.5">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Safe Import | Blog</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
                    <a href="#" class="brand-logo"><img class="imagem" src="{{ asset('images/safe.png') }}"
                            alt="Logotipo da Safe Import"></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down">
                        <li id="menu-home"><a>Home</a></li>
                        <li id="menu-sobre"><a>Sobre nós</a></li>
                        <li id="menu-como-funciona"><a>Como funciona</a></li>
                        <li id="menu-duvidas"><a>Dúvidas frequentes</a></li>
                        <li><a href="/">Notícias</a></li>
                        <li id="menu-contato"><a>Contato</a></li>
                        @if (Auth::check())
                        <!-- <li><label>Usuário logado: {{ Auth::user()->name }}</label></li> -->
                        <li><a href="/logout" title="Sair"><i class="material-icons sair">exit_to_app</i></a></li>
                        @endif
                    </ul>
                    <form action="/posts/search" method="POST">
                        {{ csrf_field() }}
                        <div class="input-field right">
                            <input id="search" type="search" name="criterio">
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>

                    </form>
                </div>
            </nav>

            <ul class="sidenav" id="mobile-demo">
                <li>
                    <a>
                        <form action="/posts/search" method="POST">
                            {{ csrf_field() }}
                            <input type="text" name="criterio" placeholder="Pesquisar" />
                        </form>
                    </a>
                </li>
                <li id="menu-mobile-home"><a>Home</a></li>
                <li id="menu-mobile-sobre"><a>Sobre nós</a></li>
                <li id="menu-mobile-como-funciona"><a>Como funciona</a></li>
                <li id="menu-mobile-duvidas"><a>Dúvidas frequentes</a></li>
                <li><a>Notícias</a></li>
                <li id="menu-mobile-contato"><a>Contato</a></li>

                @if (Auth::check())
                <li id="menu-mobile-sair">
                    <a href="/logout" title="Sair"><i class="material-icons sair">exit_to_app</i>Sair</a>
                </li>
                @endif


            </ul>
        </div>
    </header>

    <div class="row">
        <div class="container">

            <h2 class="center">Publicar Notícia</h2>

            <form method="POST" action="/posts" enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Título" type="text" class="validate" id="title" name="title">
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Subtítulo" type="text" class="validate" id="subtitle" name="subtitle">
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea textarea rows="10" cols="200" name="body" id="body"
                            class="form-control">Digite seu texto aqui...</textarea>
                    </div>
                </div>

                <div class="file-field input-field">
                    <div class="btn blue">
                        <span>Arquivo</span>
                        <input type="file" id="image" name="image">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>

                <br><br><br><br>
                <div class="row center">
                    <div class="container">
                        <button class="waves-effect waves-light btn-large indigo btn-custom">Publicar</button>
                    </div>
                </div>
                <div class="row center">
                    <div class="container">
                        <a href="/" class="waves-effect waves-light btn-large green btn-custom">Voltar</a>
                    </div>
                </div>

                @include('layouts.errors')

            </form>

        </div>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col s12 l6 m6 ">
                    <div class="rede-sociais center">
                        <h5 class="white-text">Redes sociais</h5>
                        <a class="btn-floating btn-large waves-effect waves-light btn-facebook"><i
                                class="fab fa-facebook fa-2x"></i></a>
                        <a class="btn-floating btn-large waves-effect waves-light btn-instagram"><i
                                class="fab fa-instagram fa-2x"></i></a>
                        <a class="btn-floating btn-large waves-effect waves-light btn-whatsapp"><i
                                class="fab fa-whatsapp"></i></a>
                        <a class="btn-floating btn-large waves-effect waves-light btn-email"><i
                                class="material-icons">email</i></a>
                        <a class="btn-floating btn-large waves-effect waves-light btn-telefone"><i
                                class="material-icons">local_phone</i></a>
                    </div>

                </div>
                <div class="col s12 l4 m6">
                    <h5 class="white-text center">Arquivos</h5>
                    <select onchange="location = this.value">
                        <option value="" disabled selected>Escolha um opção</option>
                        @if(!empty($archives))
                        @foreach ($archives as $stats)
                        <option value="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}" style="color: black;">
                            {{ $stats['month'] . ' ' . $stats['year']  }}
                        </option>

                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <p class="center">© Safe Import - 2019</p>
            </div>
        </div>
    </footer>


    @section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="{{ asset('js/blog.js') }}"></script>
    <script>
        CKEDITOR.replace('body');
    </script>

</body>

</html>
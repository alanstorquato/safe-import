<header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><img class="imagem" src="{{ asset('images/safe.png')}}" alt="Logotipo da Safe Import"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                <ul class="right hide-on-med-and-down">
                    <li id="menu-home"><a href="https://safeimport.com.br/#">Início</a></li>
                    <li id="menu-sobre"><a href="https://safeimport.com.br/#sobre">Sobre nós</a></li>
                    <li id="menu-como-funciona"><a href="https://safeimport.com.br/#como-funciona">Como funciona</a></li>
                    <li id="menu-duvidas"><a href="https://safeimport.com.br/#duvidas-frequentes">Dúvidas frequentes</a></li>
                    <li id="menu-noticias"><a>Notícias</a></li>
                    <li id="menu-contato"><a href="https://safeimport.com.br/#contato">Contato</a></li>
                    @if (Auth::check())
                        <!-- <li><label>Usuário logado: {{ Auth::user()->name }}</label></li> -->
                        <li><a href="/blog/logout" title="Sair"><i class="material-icons sair">exit_to_app</i></a></li>
                    @endif
                </ul>
                <form action="/blog/posts/search" method="POST">
                    {{ csrf_field() }}
                    <div class="input-field right">
                        <input id="search" type="search" name="criterio" >
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                    
                </form>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li>
                <a>
                    <form action="/blog/posts/search" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="criterio" placeholder="Pesquisar"/>
                    </form>
                </a>
            </li>
            <li id="menu-mobile-home"><a href="https://safeimport.com.br/#">Início</a></li>
            <li id="menu-mobile-sobre"><a href="https://safeimport.com.br/#sobre">Sobre nós</a></li>
            <li id="menu-mobile-como-funciona"><a href="https://safeimport.com.br/#como-funciona">Como funciona</a></li>
            <li id="menu-mobile-duvidas"><a href="https://safeimport.com.br/#duvidas-frequentes">Dúvidas frequentes</a></li>
            <li id="menu-mobile-noticias"><a>Notícias</a></li>
            <li id="menu-mobile-contato"><a href="https://safeimport.com.br/#contato">Contato</a></li>
            @if (Auth::check())
            <li id="menu-mobile-sair">
                <a href="/blog/logout" title="Sair"><i class="material-icons sair">exit_to_app</i>Sair</a>
            </li>
            @endif

            
        </ul>
    </div>

    @if($flash = session('message'))
    <div class="container">
        <div class="col s12 m12">
            <div class="row center card-panel card-panel-mensagem blue scale-transition">
                <p>{{$flash}}</p>
            </div>
        </div>
    </div>
    @endif
</header>

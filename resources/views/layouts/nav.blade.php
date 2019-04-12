<header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><img class="imagem" src="{{ asset('images/safe.png')}}"
                        alt="Logotipo da Safe Import"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                <ul class="right hide-on-med-and-down">
                    <li id="menu-home"><a>Home</a></li>
                    <li id="menu-sobre"><a>Sobre nós</a></li>
                    <li id="menu-como-funciona"><a>Como funciona</a></li>
                    <li id="menu-duvidas"><a>Dúvidas frequentes</a></li>
                    <li><a>Notícias</a></li>
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
            <li>
                <!-- <a><i class="material-icons prefix">search</i><input type="text"/></a> -->

            </li>
            @if (Auth::check())
            <li id="menu-mobile-sair">
                <a href="/logout" title="Sair"><i class="material-icons sair">exit_to_app</i>Sair</a>
            </li>
            @endif


        </ul>
    </div>
</header>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">

            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">Safe Import</a>
            </div>
            <div>

                <form action="{{ url('/posts/search') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group">

                        <input type="text" class="form-control" name="criterio" placeholder="Buscar Post">

                        <span class="input-group-btn">

                            <button type="submit" class="btn btn-default">OK</button>

                        </span>

                    </div>
                </form>
            </div>

            <div class="col-4 d-flex justify-content-end align-items-center">

                @if (Auth::check())

                    <a class="p-2 text-muted" href="#">{{ Auth::user()->name }} </a>
                    <a class="btn btn-sm btn-outline-secondary" href="/logout">Sair</a>
                @endif

            </div>
        </div>
    </header>


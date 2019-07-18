@extends('layouts.master-simples')

@section('content')

    <div class="col s12 m6 offset-m3 valign-wrapper" style="margin-top: 30px;">
        <div class="card-panel">
            <form method="POST" action="/blog/admin">
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

@endsection

@section('js')
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection


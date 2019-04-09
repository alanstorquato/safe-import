@extends('layouts.master')

@section('content')
<div class="col s12 m6 offset-m3">
    <div class="card-panel hoverable">
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
                <input type="submit" class="btn blue" value="Login">
                @include('layouts.errors')
            </div>
        </form>
    </div>
</div>

@endsection
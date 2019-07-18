@extends('layouts.master')

@section('content')

    <div class="col-sm-8">
        
        <h1>Registrar</h1>

        <form method="POST" action="/blog/register">

            {{ csrf_field() }}

            <div class="form-group">

                <label for="name">Nome:</label>

                <input type="text"class="form-control" id="name" name="name" required>

            </div>

            <div class="form-group">

                    <label for="email">E-mail:</label>
    
                    <input type="email"class="form-control" id="email" name="email" required>
    
            </div>

            <div class="form-group">

                    <label for="password">Senha:</label>
    
                    <input type="password"class="form-control" id="password" name="password" required>
    
            </div>

            <div class="form-group">

                <label for="password_confirmation">Confirmar Senha:</label>

                <input type="password"class="form-control" id="password_confirmation" name="password_confirmation" required>

            </div>

            <div class="form-group">

                    <button type="submit" class="btn btn-primary">Registrar</button>
    
            </div>

            <div class="form-group">

                @include('layouts.errors')

            </div>

        </form>
    </div>
@endsection

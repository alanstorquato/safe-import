@extends('layouts.master')

@section('content')
  
    <div class="col-md-8">

        <h1>Conectar</h1>

        <hr>

        <form method="POST" action="/admin">

            {{ csrf_field() }}

            <div class="form-group">

              <label for="email"> E-mail:</label>

              <input type="email" name="email" id="email" class="form-control">
              
            </div>

            <div class="form-group">

              <label for="password">Senha:</label>

              <input type="password" name="password" id="password" class="form-control">
              
            </div>
            
            <div class="form-group">
              
              <button type="submit" class="btn btn-primary">Conectar</button>

            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection

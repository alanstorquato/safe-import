@extends('layouts.master')

@section('content')

    <div class="col-md-8">

        <h1>Editar Post</h1>

        <hr>

        <form method="POST" action="/posts/edit/{{$post->id}}" enctype="multipart/form-data">

            {{ csrf_field() }}

            @method('PATCH')

            <div class="form-group">

                <label for="title">Titulo: </label>

                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">

            </div>

            <div class="form-group">

                <label for="body">Texto: </label>

                <textarea rows="10" cols="200" name="body" id="body" class="form-control">{{$post->body }}</textarea>

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-warning">Editar</button>

            </div>

            @include('layouts.errors')

            <p><a href="/">Voltar</a></p>
        </form>
    </div>

@endsection

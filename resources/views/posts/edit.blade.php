@extends('layouts.master')


@section('content')

    @include('layouts.errors')

    <h2 class="center">Editar Notícia</h2>

    <form method="POST" action="/blog/posts/edit/{{$post->id}}" enctype="multipart/form-data">
        @method('PATCH')
        {{ csrf_field() }}
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Título" type="text" class="validate" id="title" name="title"
                       value="{{ $post->title }}">
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Subtítulo" type="text" class="validate" id="subtitle" name="subtitle"
                       value="{{ $post->subtitle }}">
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                        <textarea textarea rows="10" cols="200" name="body" id="body"
                                  class="form-control">{{ $post->body }}</textarea>
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

        <div class="row center">
            <div class="container">
                <button class="waves-effect waves-light btn-large indigo btn-custom">Publicar</button>
            </div>
        </div>
        <div class="row center">
            <div class="container">
                <a href="/blog" class="waves-effect waves-light btn-large green btn-custom">Voltar</a>
            </div>
        </div>

        @include('layouts.errors')

    </form>


@endsection


@section('js')
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection


@extends('layouts.master')


@section('content')

    @include('layouts.errors')

    <h2 class="center">Publicar Notícia</h2>
    <form method="POST" action="/blog/posts" id="formInserirPost" enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Título" type="text" class="validate" id="title" name="title" required>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Subtítulo" type="text" class="validate" id="subtitle" name="subtitle"
                       required>
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

    </form>


@endsection


@section('js')
    <script>
        CKEDITOR.replace('body');
    </script>

@endsection




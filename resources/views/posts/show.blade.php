@extends('layouts.master')


@section('content')

    <div class="row">
        <h2 class="center">{{ $post->title }}</h2>
        <h5 class="center">{{ $post->subtitle}}</h5>
        <img class="center img-noticia" src="{{ asset($post->image) }}" alt="Imagem do post">
    </div>
    <div class="row">
        <div class="texto-noticia">
            <p class="flow-text">{!! $post->body !!} </p>
        </div>
    </div>
    <div class="row">
        <h6 class="right autor">- {{ $post->user->name }}, {{ $post->created_at->toFormattedDateString() }}</h6>
    </div>
    <br>
    <div class="row">
        <div class="container center">
            <a href="/" class="waves-effect waves-light btn-large green btn-custom">Voltar</a>
        </div>
    </div>

@endsection

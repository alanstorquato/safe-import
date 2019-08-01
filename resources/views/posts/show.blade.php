@extends('layouts.master')


@section('content')

<div class="row">
    <h2 class="center titulo">{{ $post->title }}</h2>
    <h5 class="center subtitulo">{{ $post->subtitle}}</h5>
    <img class="center img-noticia" src="{{ asset($post->image) }}" alt="Imagem do post">
</div>
<div class="row">
    <div class="texto-noticia">
        <p>{!! $post->body !!} </p>
    </div>
</div>
<div class="row">
    <h6 class="right autor">- {{ $post->user->name }}, {{ $post->created_at->toFormattedDateString() }}</h6>
</div>
<br>

<div class="row">
    <div class="container center">
        <a href="/blog" class="waves-effect waves-light btn-large pink lighten-2 btn-custom">Voltar</a>
    </div>
</div>


@endsection
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
<!-- <div class="row">
    <div class="container">

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">share</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
            </ul>
        </div>
    </div>
</div> -->
<div class="row">
    <div class="container center">
        <a href="/blog" class="waves-effect waves-light btn-large green btn-custom">Voltar</a>
    </div>
</div>


@endsection
@extends('layouts.master')


@section('content')

<div class="col s12 m12">
    @if (Auth::check())
    <div class="row center card-panel card-panel-mensagem green scale-transition scale-out">
        <p>Notícia incluída com sucesso.</p>
    </div>
    <form method="get" action="/posts/create">

        <div class="fixed-action-btn">
            <button class="btn-floating btn-large green">
                <i class="large material-icons">add</i>
            </button>
        </div>
    </form>

    @endif

    @foreach ($posts as $post)

    @include('posts.post')

    @endforeach


</div>
<div class="center">
    {{ $posts->links('vendor.pagination.default') }}.
</div>

@endsection

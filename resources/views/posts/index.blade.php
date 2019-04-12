@extends('layouts.master')


@section('content')

<div class="col s12 m12">

    @if (Auth::check())

    <!-- <div class="row"> -->
    <form method="get" action="/posts/create">

        <div class="fixed-action-btn">
            <button class="btn-floating btn-large green">
                <i class="large material-icons">add</i>
            </button>
        </div>
    </form>
    <!-- </div> -->

    @endif

    @foreach ($posts as $post)

    @include('posts.post')

    @endforeach


</div>

<ul class="pagination center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
</ul>
<div class="center">
    {{ $posts->links('vendor.pagination.default') }}.


</div>

@endsection

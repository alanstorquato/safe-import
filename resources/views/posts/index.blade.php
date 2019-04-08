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


@endsection

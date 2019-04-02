@extends('layouts.master')

@section('content')

    <div class="col-md-8">

        <h1>{{ $post->title }}</h1>

        <br>

        <p>{!! $post->body !!} </p>

        <br>

        <p><a href="/">Voltar</a></p>


        {{--    <hr>--}}

        {{--    <div class="comments">--}}

        {{--        <ul class="list-group">--}}

        {{--            @foreach ($post->comments as $comment)--}}

        {{--                <li class="list-group-item">--}}
        {{--                    <strong>--}}
        {{--                        {{$comment->created_at->diffForHumans() }}: &nbsp;--}}
        {{--                    </strong>--}}

        {{--                    {{ $comment->body }}--}}

        {{--                </li>--}}

        {{--            @endforeach--}}
        {{--            --}}
        {{--        </ul>--}}
        {{--    --}}
        {{--    </div>--}}

        {{--    <hr>--}}

        {{--    <div class="card">--}}
        {{--        --}}
        {{--        <div class="card-body">--}}

        {{--            <form method="POST" action="/posts/{{$post->id}}/comments/">--}}
        {{--                {{ csrf_field() }}--}}
        {{--                <div class="form-group">--}}

        {{--                <textarea name="body" id="" placeholder="Your comment here" class="form-control"></textarea>--}}
        {{--                --}}
        {{--                </div>--}}

        {{--                <div class="form-group">--}}
        {{--                    --}}
        {{--                    <button type="submit" class="btn btn-primary">Add Comment</button>--}}
        {{--                        --}}
        {{--                </div>--}}

        {{--            </form>--}}

        {{--            @include('layouts.errors')--}}

        {{--        </div>--}}

        {{--    </div>--}}
    </div>

@endsection

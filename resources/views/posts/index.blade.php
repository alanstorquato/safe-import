@extends('layouts.master')

@section('content')

    <div class="col s12 m12">
        @if (Auth::check())

            <form method="get" action="/blog/posts/create">

                <div class="fixed-action-btn">
                    <button class="btn-floating btn-large green">
                        <i class="large material-icons">add</i>
                    </button>
                </div>
            </form>

        @endif

        @if (count($posts))

            @foreach ($posts as $post)

                @include('posts.post')

            @endforeach
        @else

            <div class="center" style="color: #707070;">
                <i class="material-icons large">mood_bad</i>
                <h4>ops! sem posts.</h4>
            </div>

        @endif


    </div>
    <div class="center">
        {{ $posts->links('vendor.pagination.default') }}.
    </div>

@endsection

@section('js')
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection

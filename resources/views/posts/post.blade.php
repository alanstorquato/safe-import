<div class="blog-post">

    <h2 class="blog-post-title">

            {{ $post->title }}

    </h2>

    <p class="blog-post-meta">

        {{ $post->created_at->toFormattedDateString() }}

    </p>

    <p>

        {{ substr($post->body, 0, 255) }}
        <br>
        <a href="/posts/{{ $post->id}}" class="">Continue lendo...</a>
    </p>

    @if (Auth::check())
        <div class="row">

            <div class="col-md-2">

                <form method="post" action="/posts/{{$post->id}}">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">DELETAR</button>
                    </div>
                </form>

            </div>

            <div class="col-md-2">

                <form method="get" action="/posts/edit/{{$post->id}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">EDITAR</button>
                    </div>
                </form>

            </div>
        </div>

    @endif

        <hr>

{{--        <div class="card w-100 mb-3">--}}
{{--            <div class="row no-gutters">--}}
{{--                <div class="col-md-4">--}}
{{--                    <img img--}}
{{--                         src="https://cdn-engage.s3.amazonaws.com/2019/03/29/03/22/13/0892628c-a4fd-4238-92c2-218c0d38431f/andre-a-xavier-1131410-unsplash-jpg"--}}
{{--                         class="card-img" alt="...">--}}
{{--                </div>--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title blog-post-title">--}}
{{--                            <a href="/posts/{{ $post->id}}">--}}

{{--                                {{ $post->title }}--}}

{{--                            </a></h5>--}}
{{--                        <p class="card-text">{{ $post->user->name }}--}}
{{--                            on {{ $post->created_at->toFormattedDateString() }}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


</div>

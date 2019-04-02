<div class="blog-post">

{{--    <h2 class="blog-post-title">--}}

{{--        {{ $post->title }}--}}

{{--    </h2>--}}

{{--    <p class="blog-post-meta">--}}

{{--        {{ $post->created_at->toFormattedDateString() }}--}}

{{--    </p>--}}

{{--    <p>--}}

{{--        {{ substr($post->body, 0, 255) }}--}}

{{--        <br>--}}

{{--        <a href="/posts/{{ $post->id}}" class="">Continue lendo...</a>--}}

{{--    </p>--}}

{{--    @if (Auth::check())--}}

{{--        <div class="row">--}}

{{--            <div class="col-md-2">--}}

{{--                <form method="get" action="/posts/edit/{{$post->id}}">--}}

{{--                    {{ csrf_field() }}--}}

{{--                    <div class="form-group">--}}

{{--                        <button type="submit" class="btn btn-warning">EDITAR</button>--}}

{{--                    </div>--}}

{{--                </form>--}}

{{--            </div>--}}

{{--            <div class="col-md-2">--}}

{{--                <form method="post" action="/posts/{{$post->id}}">--}}

{{--                    {{ csrf_field() }}--}}

{{--                    @method('DELETE')--}}

{{--                    <div class="form-group">--}}

{{--                        <button type="submit" class="btn btn-danger">DELETAR</button>--}}

{{--                    </div>--}}

{{--                </form>--}}


{{--            </div>--}}

{{--        </div>--}}

{{--    @endif--}}

{{--    <hr>--}}

        <div class="card mb-3">

            <div class="row no-gutters">

                <div class="col-md-4">

                    <img src="{{$post->image}}" class="card-img" alt="...">

                </div>

                <div class="col-md-8">

                    <div class="card-body">

                        <h5 class="card-title blog-post-title">{{ $post->title }}</h5>
{{--                        <p class="card-text">{{ substr(strip_tags($post->body), 0, 255) }}--}}
                        <p class="card-text">{{ $post->body }}

                            <br>

                            <a href="/posts/{{ $post->id}}" class="">Continue lendo...</a></p>

                        <p class="card-text">

                            <small class="text-muted">{{ $post->created_at->toFormattedDateString() }}o</small>

                        </p>

                    </div>

                </div>

            </div>

        </div>


        @if (Auth::check())

            <div class="row">

                <div class="col-md-2">

                    <form method="get" action="/posts/edit/{{$post->id}}">

                        {{ csrf_field() }}

                        <div class="form-group">

                            <button type="submit" class="btn btn-warning">EDITAR</button>

                        </div>

                    </form>

                </div>

                <div class="col-md-2">

                    <form method="post" action="/posts/{{$post->id}}">

                        {{ csrf_field() }}

                        @method('DELETE')

                        <div class="form-group">

                            <button type="submit" class="btn btn-danger">DELETAR</button>

                        </div>

                    </form>

                </div>
            </div>

        @endif

        <hr>

</div>

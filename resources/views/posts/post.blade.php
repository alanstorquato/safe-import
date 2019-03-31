
            <div class="blog-post">

                <h2 class="blog-post-title">

                    <a href="/posts/{{ $post->id}}">

                        {{ $post->title }}

                    </a>
                </h2>

                <p class="blog-post-meta">

                    {{ $post->user->name }} on
                    {{ $post->created_at->toFormattedDateString() }}

                </p>

                <p>

                    {{ $post->body }}

                </p>

                <hr>

                <div class="card w-100 mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img img
                                 src="https://cdn-engage.s3.amazonaws.com/2019/03/29/03/22/13/0892628c-a4fd-4238-92c2-218c0d38431f/andre-a-xavier-1131410-unsplash-jpg"
                                 class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title blog-post-title">
                                    <a href="/posts/{{ $post->id}}">

                                        {{ $post->title }}

                                    </a></h5>
                                <p class="card-text">{{ $post->user->name }}
                                    on {{ $post->created_at->toFormattedDateString() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card w-100 mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img img
                                 src="https://images.pexels.com/photos/2052644/pexels-photo-2052644.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                 class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title blog-post-title">
                                    <a href="/posts/{{ $post->id}}">

                                        {{ $post->title }}

                                    </a></h5>
                                <p class="card-text">{{ $post->user->name }}
                                    on {{ $post->created_at->toFormattedDateString() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card w-100 mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img img
                                 src="https://images.pexels.com/photos/2050425/pexels-photo-2050425.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                 class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title blog-post-title">
                                    <a href="/posts/{{ $post->id}}">

                                        {{ $post->title }}

                                    </a></h5>
                                <p class="card-text">{{ $post->user->name }}
                                    on {{ $post->created_at->toFormattedDateString() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

<div class="col s12 m12 l12">
    <div class="card horizontal">
        <div class="card-image">
            <img src="{{ $post->image }}" class="resposive-img">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <span class="card-title">
                    {{ $post->title }}
                </span>

                <p>{{ $post->subtitle }}</p>
                <small class="right">{{ $post->created_at->toFormattedDateString() }}</small>

            </div>
            <div class="card-action center">
                <a href="/posts/{{ $post->id }}" style="color: #0C0969;">Leia mais</a>
            </div>
        </div>
    </div>
    @if (Auth::check())
    <div class="row">
        <div class="col s6 m6 l3 center">
            <form method="get" action="/posts/edit/{{$post->id}}" style="padding-bottom: 5px;">
                {{ csrf_field() }}
                <button type="submit" class="btn blue ">EDITAR</button>
                <!-- <button class="btn-floating waves-effect waves-light blue right"><i class="material-icons">edit</i></button> -->
            </form>
        </div>

        <div class="col s6 m6 l3 center">
            <form method="post" action="/posts/{{$post->id}}">
                {{ csrf_field() }}

                @method('DELETE')
                <button type="submit" class="btn red ">DELETAR</button>
                <!-- <button class="btn-floating waves-effect waves-light red left"><i class="material-icons">delete</i></button> -->

            </form>
        </div>

    </div>
    @endif
</div>
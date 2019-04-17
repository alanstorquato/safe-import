
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

                <p class="subtitulo">{{ $post->subtitle }}</p>
                <br>
                <small class="right autor">{{ $post->user->name }},
                    {{ $post->created_at->toFormattedDateString() }}</small>

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
            </form>
        </div>

        <div class="col s6 m6 l3 center">
            <button type="submit" class="btn red modal-trigger" data-target="modal-exclusao"> DELETAR</button>
        </div>

    </div>
    @endif
</div>

<div id="modal-exclusao" class="modal">
    <div class="modal-content">
        <h3 class="center">Confirmar a exclusão?</h3>
    </div>
    <div class="modal-footer">
        <div class="container">
            <a class="waves-effect waves-light btn-flat left" id="btn-cancelar">Cancelar</a>
            <form method="post" action="/posts/{{$post->id}}">
                {{ csrf_field() }}

                @method('DELETE')
                <button class="waves-effect waves-light btn green">Confirmar</button>

            </form>
        </div>
    </div>
</div>
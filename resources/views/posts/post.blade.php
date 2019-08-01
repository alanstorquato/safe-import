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

                <p class="card-subtitulo">{{ $post->subtitle }}</p>
                <br>
                <small class="right autor">{{ $post->user->name }},
                    {{ $post->created_at->toFormattedDateString() }}</small>

            </div>
            <div class="card-action center">
                <a href="/blog/posts/{{ $post->id }}" style="color: #0C0969;">Leia mais</a>
            </div>
        </div>
    </div>
    @if (Auth::check())
        <div class="row">
            <div class="col s6 m6 l3 center">
                <form method="get" action="/blog/posts/edit/{{$post->id}}" style="padding-bottom: 5px;">
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
        <h4 class="center">Confirmar a exclusão?</h4>
    </div>
    <div class="modal-footer">
        <div class="container">
            <form method="post" action="/blog/posts/{{$post->id}}">
                <a class="waves-effect waves-light btn-flat left" id="btn-cancelar">Cancelar</a>
                {{ csrf_field() }}

                @method('DELETE')
                <button class="waves-effect waves-light btn green right">Sim</button>

            </form>
        </div>
    </div>
</div>

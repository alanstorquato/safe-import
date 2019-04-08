
<div class="col s12 m3">
  <div class="card z-depth-2">
    <div class="card-image">
      <!-- <img src="{{ $post->image }}"> -->
      <img class="responsive-img" src="https://www.sciencenews.org/sites/default/files/2018/09/main/articles/091118_AC_placebo_feat.jpg">

    </div>
    <div class="card-content">
      <span class="card-title truncate">{{ $post->title }}</span>
      <p class="truncate">{{ $post->subtitle }}</p>
      <small class="right">{{ $post->created_at->toFormattedDateString() }}</small>
    </div>
    <div class="card-action center">
      <a href="/posts/{{ $post->id }}" style="color: #0C0969;">Leia mais</a>
    </div>
    <div class="divider"></div>
  </div>
  <div class="row" style="padding: 5px;">
    @if (Auth::check())
    <div class="col s6 m12 l6">
      <form method="get" action="/posts/edit/{{$post->id}}"style="padding-bottom: 5px;">
        {{ csrf_field() }}
        <button type="submit" class="btn blue">EDITAR</button>
        <!-- <button class="btn-floating waves-effect waves-light blue right"><i class="material-icons">edit</i></button> -->
      </form>
    </div>

    <div class="col s6 m12 l6">
      <form method="post" action="/posts/{{$post->id}}">
        {{ csrf_field() }}

        @method('DELETE')
        <button type="submit" class="btn red">DELETAR</button>
        <!-- <button class="btn-floating waves-effect waves-light red left"><i class="material-icons">delete</i></button> -->

      </form>
    </div>
    @endif

  </div>
 </div>

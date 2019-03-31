@extends('layouts.master')

@section('content')

<div class="col-md-8">
  <h1>Publish a Post</h1>

  <hr>

  <form method="POST" action="/posts">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="title">Titulo: </label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    
    <div class="form-group">
      <label for="body">Texto: </label>
      <textarea textarea rows="10" cols="200" name="body" id="body" class="form-control"></textarea>
    </div>

     <div class="form-group">
        <label for="image">Imagem: </label>
        <input type="file" id="image">
     </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>

    @include('layouts.errors')

  </form>

  
</div>
    
@endsection

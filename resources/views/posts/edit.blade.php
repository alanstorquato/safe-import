@extends('layouts.master')

@section('content')

    <div class="col-md-8">
        <form method="POST" action="">
            {{ csrf_field() }}
            @method('PATCH')
{{--            {{$post->title }}--}}
{{--            <br>--}}
{{--            {{$post->body }}--}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value={{ $post->title }}>

            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea rows="10" cols="200" name="body" id="body" class="form-control" value={{$post->body }}></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>

@endsection

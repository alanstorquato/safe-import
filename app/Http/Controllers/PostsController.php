<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show','search']);

    }

    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))->paginate(5);

        return view('posts.index', compact('posts'));
    }


    public function search(Request $request)
    {
        $posts = Post::search($request->criterio);

        return view('posts.index', compact('posts'));
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'subtitle' => 'required',
            'image' => 'required'
        ]);

        $image = Post::images();

        $post = new Post();
        $post->title = $request->get('title');
        $post->subtitle = $request->get('subtitle');
        $post->body = $request->get('body');
        $post->user_id = auth()->id();
        $post->image = $image;
        $post->save();


        return redirect('/');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $image = Post::images();

        if (!empty($image)) {
            $post = Post::find($id);
            $post->title = $request->get('title');
            $post->subtitle = $request->get('subtitle');
            $post->body = $request->get('body');
            $post->image = $image;
            $post->save();
        } else {
            $post = Post::find($id);
            $post->title = $request->get('title');
            $post->subtitle = $request->get('subtitle');
            $post->body = $request->get('body');
            $post->save();

        }

        return redirect('/')->with('success', 'Post atualizado com sucesso');
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/')->with('alert-success', 'O Post foi deletado');
    }


}

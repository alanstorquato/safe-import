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
        $this->middleware('auth')->except(['index', 'show']);

    }

    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        $archives = Post::archives();

        return view('posts.index', compact('posts','archives'));
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

        $nameFile = null;
        // Verifica se informou o arquivo e se é válido
        if (request()->hasFile('image') && request()->file('image')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = request()->image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            // Faz o upload:
            $upload = request()->image->storeAs('img-posts', $nameFile);

            $image = 'storage/img-posts/'.$nameFile;
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$upload )
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();

        }

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

        $nameFile = null;
        // Verifica se informou o arquivo e se é válido
        if (request()->hasFile('image') && request()->file('image')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = request()->image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            // Faz o upload:
            $upload = request()->image->storeAs('img-posts', $nameFile);

            $image = 'storage/img-posts/'.$nameFile;
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if ( !$upload )
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();

        }

        if(!empty($image)){
            $post = Post::find($id);
            $post->title = $request->get('title');
            $post->subtitle = $request->get('subtitle');
            $post->body = $request->get('body');
            $post->image = $image;
            $post->save();
        }else{
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
        return redirect('/')->with('alert-success','O Post foi deletado');
    }

}

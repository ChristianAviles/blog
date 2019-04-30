<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;

class PostsController extends Controller
{
    
    public function index()
    {
        $posts = Post::all();


        return view('admin.posts.index', compact('posts'));

    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.create', compact('categories', 'tags'));

    }

    public function store (Request $request)
    {
        $this-> validate($request, [
            'titulo' => 'required',
            'body' => 'required',
            'category' => 'required',
            'contenido' => 'required'

        ]);
        //Validacion
        //return Post::create($request->all());
        //dd($request->get('tags'));
        $post = new Post;
        $post->titulo = $request->get('titulo');
        $post->body =$request->get('body');
        $post->contenido =$request->get('contenido');
        $post->fecha_publicacion = $request->has('fecha_publicacion') ? Carbon::parse($request->get('fecha_publicacion')) : null;
        $post->category_id =$request->get('category');
        
        $post->save();
        
        //etiquetas
        $post->tags()->attach($request->get('tags'));
        return back()->with('flash', 'Tu publicacion ha sido creada');

    }

}

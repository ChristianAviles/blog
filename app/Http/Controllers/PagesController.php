<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function home($value='')
    {
        $posts = Post::latest('fecha_publicacion')->get();
    
    return view('welcome', compact('posts'));

    }

}

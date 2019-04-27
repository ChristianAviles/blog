<?php

use App\Post;
use App\Category;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Category::truncate();

        $category = new Category;
        $category->categoria = "Catregoria 1";
        $category->save();

        $category = new Category;
        $category->categoria = "Catregoria 2";
        $category->save();

        $post = new Post;

        $post->titulo ="MI PRIMER POST";
        $post->contenido ="ESTE ES EL CONTENIDO DE MI PRIMER POST";
        $post->body ="ESTE ES EL BODY DE MI PRIMER POST";
        $post->fecha_publicacion = Carbon::now();
        $post->category_id = 1;
        $post->save();

        $post = new Post;

        $post->titulo ="MI SEGUNDO POST";
        $post->contenido ="ESTE ES EL CONTENIDO DE MI SEGUNDO POST";
        $post->body ="ESTE ES EL BODY DE MI SEGUNDO POST";
        $post->fecha_publicacion = Carbon::now();
        $post->category_id = 2;
        $post->save();

        $post = new Post;

        $post->titulo ="MI TERCER POST";
        $post->contenido ="ESTE ES EL CONTENIDO DE MI TERCER POST";
        $post->body ="ESTE ES EL BODY DE MI TERCER POST";
        $post->fecha_publicacion = Carbon::now();
        $post->category_id = 1;
        $post->save();

        $post = new Post;

        $post->titulo ="MI CUARTO POST";
        $post->contenido ="ESTE ES EL CONTENIDO DE MI CUARTO POST";
        $post->body ="ESTE ES EL BODY DE MI CUARTO POST";
        $post->fecha_publicacion = Carbon::now();
        $post->category_id = 2;
        $post->save();

        $post = new Post;

        $post->titulo ="MI QUINTO POST";
        $post->contenido ="ESTE ES EL CONTENIDO DE MI QUINTO POST";
        $post->body ="ESTE ES EL BODY DE MI QUINTO POST";
        $post->fecha_publicacion = Carbon::now();
        $post->category_id = 1;
        $post->save();
    }
}

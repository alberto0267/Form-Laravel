<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {


        $posts = Post::all();
        // return $posts;

        //Este es un metodo
        //    return view('post.index',[

        //      'posts' => $posts
        //    ]);

        // Este es otro metodo pero muestra es el contenido de la paginas, mas no el de phpMyadmin
        return view('post.index', compact('posts'));
    }

    public function create()
    {

        return view('post.create');
    }


    public function store(Request $request)
    {


        $post = new Post();

        $post->title = $request->title;
        $post->categorias = $request->categorias;
        $post->content = $request->content;

        $post->save();



   
        return redirect(url('/post'));
        // return 'se manda';
    }

    public function show($post)
    {
        // return " {$post}";

        // return view('post.show',[
        //     'post' => $post
        // ]);


        // return $post;
        $post = Post::find($post);
        return view('post.show', compact('post'));
    }


    public function edit($post){


        $post = Post::find($post);
        return view ('post.edit', compact('post'));
    }

    public function update(Request $request, $post){

        

    }
}

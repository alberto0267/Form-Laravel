<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PostController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;

Route::get('/', [HomeController::class, "index"]);

//Si uso _invoke puedo usar esto:

Route::get('/', HomeController::class);

Route::get('/post', [PostController::class, "index"]);

Route::get("/post/create", [PostController::class, "create"]);

Route::post("/post" , [PostController::class , "store"]);

Route::get("/post/{post}", [PostController::class, "show"]);

Route::get("/post/{post}/edit", [PostController::class, "edit"]);

Route::put("/post/{post}" , [PostController::class,"update"]);



Route::get('prueba', function () {

    // $post = Post::find(2);

    // return $post->created_at->diffForHumans();

    // return "Hola desde ruta de prueba";

    //    Crea nuevo registro
//     $post = new Post;

    // $post->title = 'titulo de prueba 2';
// $post->content = ' contenido de prueba 2';
// $post->categorias = 'categoria de prueba 2';

    // $post->save();

    // return $post;

    // $post = Post::find(1); este lo busca por id

    // $post = Post::where('title', 'titulo de prueba 1')->first();

    // $post ->categorias = "Desarrollo de aplicaciones web";
// $post->save();
// return $post;

$user= User::all();
return $user;

    // $post = Post::all();

    // $post = Post::where('id','>=','2')->get();
// return $post;


      //***********Listar los registros

    // $post = Post::orderBy('id', 'asc')->take(2)->select('title')->get();

    // return $post;

    //******Eliminar un registro */


// $post = Post::find(3);
// $post->delete();


// $post = Post::find(2);

// $post->title= "titulo de prueba 2";
// $post->content= "contenido de prueba 2";
// $post->categorias="categoria de prueba 2";
// $post=save();
// return $post;
});





// Route:: get ('/post/{post}/{category}', function($post, $category){

//     return "Aqui se mostrara el post {$post} de la categoria {$category}";

//     });

// Route::get('/post/{post}/{category?}',function($post,$category=null){



    

// });
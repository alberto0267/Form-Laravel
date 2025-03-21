<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | show</title>
</head>
<body>
    <h1>Titulo: {{$post->title}}</h1>
    <p>
        <b>Id : {{$post->id}} </b> <br>
        <b>Categorias :  {{$post->categorias}}</b><br>
        <b>Contenido  : {{$post->content}}  </b><br>
        <b>Creacion : {{$post->created_at}} </b>

    </p>

        <a href="{{ url('/post/') }}">
            Volver
        </a>
        <br>
        <br>
        <br>
        <a href="{{ url('/post/' . $post->id) .'/edit' }}">
            Editar post
        </a>
</body>
</html>
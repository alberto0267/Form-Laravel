<x-app-layout>

    <h1>Formulario</h1>
    <form action="{{url("/post" . $post->id)}}" method="POST">

        {
        @csrf

        <label for="">
            Titulo:
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br>
        <label for="">
            Categorias
            <input type="text" name="categorias" value="{{$post->categorias}}"></label>
        <br>
        <label for="">
            Contenido
            <textarea name="content" id="" cols="20" rows="10" >{{$post->content}}</textarea>
        </label>
        <br>
        <button type="submit">actualizar post</button>

    </form>
</x-app-layout>
<x-app-layout>

    <h1>Formulario</h1>
    <form action="http://localhost/laravel/blog/public/post" method="POST">

        {
        @csrf

        <label for="">
            Titulo:
            <input type="text" name="title">
        </label>
        <br>
        <label for="">
            Categorias
            <input type="text" name="categorias"></label>
        <br>
        <label for="">
            Contenido
            <textarea name="content" id="" cols="20" rows="10"></textarea>
        </label>
        <br>
        <button type="submit">Send</button>

    </form>
</x-app-layout>

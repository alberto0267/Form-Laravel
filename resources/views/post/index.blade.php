<x-app-layout>


    {{-- <ul>
    @foreach ($posts as $post)

<li>
    <a href="/post/{{$post->id}}">
        
        {{ $post->id }} 
    </a>
</li>
    
    @endforeach
</ul> --}}

    <x-app-layout>
        <h1>Aquí se mostrarán todos los posts desde Blade</h1>


        <a href="{{url('/post/' . 'create')}}">
            + nuevo post
        </a>
        <ul>
            @foreach ($posts as $post)
                {{-- <li>
            <a href="/post/{{$post->id}}"> --}}
                {{-- Es mas seguro usar url porque asi va la url 
                    absoluta, en cambio el otro si no esta en la razi podria dar errores. --}}
                    <li>
                <a href="{{ url('/post/' . $post->id) }}">


                    {{ $post->title }}
                </a>
                </li>
            @endforeach
        </ul>
    </x-app-layout>

</x-app-layout>

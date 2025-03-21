{{-- <x-app-layout>


    <div class="max-w-7xl mx-auto px-4">
        <h1>Welcome to HomePage desde blade.php</h1>
    </div>
    <x-alert type="danger">
        <x-slot name="title">
            Titulo!
        </x-slot>

        Contenido de la alerta
    </x-alert>
</x-app-layout>
--}}


@extends('layouts.app')

@section('title', 'suputamadre')

{{-- @endsection --}}

{{-- 
la diferencia entre @push con stack es que s epuede cambiar
el yield no se puede o debe cambiar con section es cuando es unico, --}}


@push('css')
<style>
    body {
        background-color: yellowgreen;
    }
</style>
@endpush
@section('content')



    <div class="max-w-7xl mx-auto px-4">
        {{-- <h1>Welcome to HomePage desde blade.php</h1> --}}
    </div>
    <x-alert type="danger">
        <x-slot name="title">
            Titulo2!
        </x-slot>

        Contenido de la alerta
    </x-alert>
@endsection
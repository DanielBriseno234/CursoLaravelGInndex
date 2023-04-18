@extends('web.layout')

@section('content')
    
    <x-web.blog.post.index :posts="$posts" >
        {{-- Slot por defecto --}}
        <h1>Listado principal de posts</h1>
        
        {{-- Slot en multiples lineas --}}
        {{-- @slot('header')
            <h1>Listado de contenido de posts</h1>
        @endslot

        {{-- Slot en una sola linea --}}
        {{-- @slot('extra', 'extra')
        @slot('footer', 'Footer') --}}


    </x-web.blog.post.index>

@endsection
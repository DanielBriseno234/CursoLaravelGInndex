@extends('web.layout')

@section('content')
    
    <x-web.blog.post.show :post="$post" class="bg-red-100" id="1"/>

    {{-- <x-dynamic-component component="web.blog.post.show" :post="$post" class="bg-red-100" id="1"/> --}}

@endsection
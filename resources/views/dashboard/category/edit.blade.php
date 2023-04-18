@extends('dashboard.layout')

@section('content')
    <h1>Editar {{ $category->title }}</h1>
    <form action="{{ route('category.update', $category) }}" method="post">
        @method('PUT')
        @include('dashboard.category._form')
    </form>
@endsection
@extends('dashboard.layout')

@section('content')
<h1>Crear categoria</h1>
    <form action="{{ route('category.store') }}" method="post">
        @include('dashboard.category._form')
    </form>
@endsection
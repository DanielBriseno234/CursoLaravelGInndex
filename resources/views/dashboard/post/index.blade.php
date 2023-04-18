@extends('dashboard.layout')

@section('content')

    <a href="{{ route('post.create') }}" class="btn btn-success my-2">Crear</a>
    <table class="table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Posted</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>{{ $p->title }}</td>
                    <td>{{ $p->category->title }}</td>
                    <td>{{$p->posted}}</td>
                    <td>
                        <a href="{{ route('post.edit', $p) }}" class="mt-2 btn btn-primary">Editar</a>
                        <a href="{{ route('post.show', $p)}}" class="m2-2 btn btn-primary">Ver</a>
                        <form action="{{ route('post.destroy', $p) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="mt-2 btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
    
@endsection
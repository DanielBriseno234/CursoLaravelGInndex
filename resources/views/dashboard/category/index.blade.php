@extends('dashboard.layout')

@section('content')

    <a href="{{ route('category.create') }}" class="my-2 btn btn-success">Crear categoria</a>
    <table class="table ">
        <thead>
            <th>Titulo</th>
            <th>Slug</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>{{ $c->title }}</td>
                    <td>{{ $c->slug }}</td>
                    <td>
                        <a href="{{ route('category.edit', $c) }}" class="mt-2 btn btn-primary">Editar</a>
                        <a href="{{ route('category.show', $c) }}" class="mt-2 btn btn-primary">Ver</a>
                        <form action="{{ route('category.destroy', $c) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="mt-2 btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
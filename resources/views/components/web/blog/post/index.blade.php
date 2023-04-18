<div>
    {{ $slot }}

    {{-- {{ $header }} --}}

    @foreach ($posts as $p)
        <div class="card card-white">
            <h2 class="f-bold">{{ $p->title }}</h2>
            <p>{{ $p->content }}</p>
            <a href="{{route('web.blog.show', $p)}}" class="btn btn-primary">Ir</a>
        </div>
    @endforeach
    {{-- {{ $extra }} --}}
    {{$posts->links() }}
    {{-- {{$footer}} --}}
</div>
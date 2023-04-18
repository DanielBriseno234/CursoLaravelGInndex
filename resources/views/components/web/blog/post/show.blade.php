
{{-- <x-alert class="my-4" type="error" :message="$post->title" data-id="1" data-priority="medium"/> --}}

<div {{$attributes->class(['my-5', 'bg-blue-100' => false ])->merge(['id' => "2"]) }}>
    {{ $changeTitle() }}
    <h1> {{ $post->title }} </h1>
    <p> {{ $post->created_at }} </p>
    <p> {{ $post->content }} </p>
</div>
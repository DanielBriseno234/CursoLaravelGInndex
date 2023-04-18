
@props(['type', 'message'])

<div {{ $attributes->class('alert alert-'.$type)}}>
    {{$message}}

    <ul>
        <li>whereStartsWith:  {{ $attributes->whereStartsWith('data') }}</li>
        <li>whereDoesntStartWith: {{ $attributes->whereDoesntStartWith('da') }} </li>
        <li>has: {{ $attributes->has('class') }}</li>
        <li>get:  {{ $attributes->get('class') }}</li>
        <li>filter: {{ $attributes->filter(fn(String $values, String $key) => $key == 'data-id') }}</li>
    </ul>
</div>
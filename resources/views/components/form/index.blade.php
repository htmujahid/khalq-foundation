@props([
    'action' => '',
    'method' => '',
    'class' => '',
])
<form action="{{ $action }}" method="{{ $method }}" class="{{ $class }}">
    @csrf
    @method('POST')
    {{ $slot }}
</form>
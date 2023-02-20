@props([
    'id' => '',
    'top' => false,
    'bottom' => false,
    'topBottom' => false,
])
<div id="{{ $id }}" class="container mx-auto {{$top? 'mt-16': ''}} {{$bottom? 'mb-16': ''}} {{$topBottom? 'my-16': ''}}"> {{ $slot }} </div>
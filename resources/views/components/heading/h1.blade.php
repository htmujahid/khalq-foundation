@props([
    'bottom' => '',
    'center' => ''
    ])
<h1 style="{{$bottom? 'margin-bottom: 40px': ''}}; {{$center? 'text-align: center':''}}" {{$attributes->merge(["class" => "text-5xl sm:text-6xl font-serif text-center sm:text-left"])}}>{{$slot}}</h1>

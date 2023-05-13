<h1 {{$attributes->merge(["class" => "text-5xl sm:text-6xl font-serif text-center pb-5"])}} style="line-height: 1.3">{{ $title }}</h1>
<p {{$attributes->merge(["class" => "text-xl font-medium pb-8 text-center text-gray-dark"])}}>{{ $slot}}</p>

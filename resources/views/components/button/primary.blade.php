<p {{$attributes->merge(["class" => "font-medium w-full sm:w-max text-2xl mx-auto lg:mx-0"])}}>
    <a href="{{$href}}" class="inline-block bg-primary text-white text-center py-2 px-8 duration-300 border border-primary rounded-md w-full hover:bg-opacity-90">{{$slot}}</a>
</p>

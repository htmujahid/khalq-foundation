<div class="border border-black rounded-3xl">
    <a href="{{$item->link}}">
        <div class="h-56 w-full rounded-t-3xl overflow-hidden"><img src={{$item->image}} alt={{$item->title}} class="h-auto aspect-[4/3] mx-auto w-full"></div>
        <div class="color-3 rounded-b-3xl px-6 pt-6 h-40 border-t overflow-hidden">
            <p class="text-base font-bold text-black">{{$item->title}}</p>
            <div class="h-24 pb-3 pt-1 h-24 overflow-hidden">
                <span class="h-full">
                    {{$item->description}}
                </span>
            </div>
        </div>
    </a>
</div>
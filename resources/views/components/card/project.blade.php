@if ($item->image)
    @php        
        if (strpos($item->image, 'drive.google.com') !== false) {
            $parts = explode('/', parse_url($item->image, PHP_URL_PATH));
            $image = "https://drive.google.com/u/0/uc?export=view&id=" . $parts[3];
        } else {
            $image = $item->image;
        }
    @endphp
@endif
{{-- 
<div class="border border-black rounded-3xl">
    <a href="{{$item->link}}">
        <div class="h-56 w-full rounded-t-3xl overflow-hidden"><img src={{$image ?? ""}} alt={{$item->title}} class="h-auto aspect-[4/3] mx-auto w-full"></div>
        <div class="color-3 rounded-b-3xl px-6 pt-6 h-40 border-t overflow-hidden">
            <p class="text-base font-bold text-black">{{$item->title}}</p>
            <div class="h-24 pb-3 pt-1 h-24 overflow-hidden">
                <span class="h-full">
                    {{$item->description}}
                </span>
            </div>
        </div>
    </a>
</div> --}}
<x-card>
    <a href="{{$item->link}}">
        <div class="grid grid-cols-1 items-center gap-x-16 gap-y-8 p-4 md:p-9">
            <div class="mx-auto rounded-3xl overflow-hidden">
                <img src="{{$image ?? ""}}" alt="{{$item->title}}" class="h-[240px]">
            </div>
            <div class="sm:mx-auto lg:mx-0">
                {{-- <div class="pb-4 text-center sm:text-left">
                    <span class="inline-block px-5 py-1 rounded-xl text-primary text-sm border border-primary">{{ __("Verified") }}</span>
                </div> --}}
                <x-heading.h3 class="font-serif">{{ $item->title }}</x-heading.h3>
                <div class="py-4 2xl:py-6">
                    <p class="w-full text-center sm:text-left text-lg text-gray-dark max-h-36 sm:h-20 overflow-hidden">{{ $item->description }}</p>
                </div>
                {{-- <div class="flex justify-center sm:justify-start">
                    <div class="pr-4 sm:pr-10 border-r ">
                        <p class="text-gray-dark">Goal</p>
                        <p class="font-medium font-bold pt-1">PKR {{ number_format($required) }}</p>
                    </div>
                    <div class="px-4 sm:px-10 border-r ">
                        <p class="text-gray-dark">Raised</p>
                        <p class="font-medium font-bold pt-1">PKR {{ number_format($collected) }}</p>
                    </div>
                    <div class="pl-4 sm:pl-10">
                        <p class="text-gray-dark">Remaining</p>
                        <p class="font-medium font-bold pt-1">PKR {{ number_format($remaining) }}</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </a>
</x-card>
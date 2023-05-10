@if($type == 'type-1')
<div class="bg-white rounded-3xl">
    <div class=""><img alt="" src="{{$image}}" class="rounded-t-3xl w-full"></div>
    <div class="color-3 rounded-b-3xl px-12 pt-6 ">
        <p class="text-4xl font-bold text-black">{{$title}}</p>
        <p class="text-2xl pt-1 5 text-black"><img src="assets/logo/geo.svg" alt="" class="inline"><span class="pl-1">{{$location}}</span></p>
        <p class="pt-3 h-16 overflow-hidden">{{$description}}</p>
        <div class="w-full bg-gray-200 rounded-full h-4 mt-6 flex">
            <div class="gradient-2 h-4 rounded-full" style="width: {{$case_description->case_donation->sum('amount') / $case_description->amount * 100}}%"></div>
            {{-- <div class="gradient-2 text-white border-white border-4 rounded-full w-9 h-9 -pt-4 relative bottom-2.5 -left-2.5 px-auto"> --}}
                {{-- <span class="color-6 text-xs left-0.5 top-1.5 absolute">90%</span> --}}
                {{-- <div class=" absolute top-7 color-3 pt-0.5 text-2xl font-medium">Rs:1000</div> --}}
            {{-- </div> --}}
        </div>
        <div class="flex pt-4 pb-6">
            <p class="text-left">Required :{{$case_description->case_donation->sum('amount')}}</p>
            <p class="flex-1"></p>
            <p class="text-right">Collected :{{$case_description->amount}}</p>
        </div>
    </div>
    {{-- <div class="h-max">this</div> --}}
</div>
@else
<div class="">
    <div class=""><img alt="" src="{{$image}}" class="rounded-t-3xl"></div>
    <div class="color-3 rounded-b-3xl px-6 pt-6 h-32">
        <p class="text-base font-bold text-black">{{$title}}</p>
        <div class="w-full pb-3 pt-1 flex h-14 overflow-hidden">
            {{$description}}
        </div>
    </div>
</div>
@endif
@props([
    'id' => '',
    'review' => []
])
@if ($id)
    <div id="first-courosel" class="flex-shrink-0 -mr-1 sm:-mr-6"></div>    
@else
    <div class="p-6 sm:px-10 sm:py-8 rounded-3xl flex-shrink-0 bg-primary-light shadow w-5/6 sm:w-[448px]">
        <div class="flex gap-3 items-center">
            <div class="w-12 h-12 rounded-full"><img class="rounded-full" src="/assets/images/default.png" alt=""></div>
            <div><p class="font-medium text-2xl">{{$review->name}}</p></div>
        </div>
        <div class="mt-4">
            <p class="text-lg whitespace-normal">{{$review->message}}</p>
        </div>
    </div>
@endif
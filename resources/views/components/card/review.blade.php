@props([
    'review' => []
])
<x-card class="h-min">
    <div class="p-6 sm:px-8 sm:py-10 flex-shrink-0 w-5/6 h-min sm:w-[420px]">
        <div class="flex gap-3 items-center">
            <div><p class="font-medium text-3xl">{{$review->name}}</p></div>
        </div>
        <div class="mt-4">
            <p class="text-lg whitespace-normal text-gray-dark">{{$review->message}}</p>
        </div>
    </div>
</x-card>
<x-heading.h1 bottom>Upcoming</x-heading.h1>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 xl:gap-6 mb-14">
    @forelse ($upcoming as $item)    
        <x-card.project :item="$item"/>
    @empty
        No Upcoming Project
    @endforelse
</div>
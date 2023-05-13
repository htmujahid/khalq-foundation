<x-container topBottom>
    <x-heading.h1 bottom center>Upcoming Projects</x-heading.h1>
    <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-3 xl:gap-6 mb-14">
        @forelse ($upcoming as $item)    
            <x-card.project :item="$item"/>
        @empty
            No Upcoming Project
        @endforelse
    </div>
</x-container>
<x-container topBottom>
    <x-heading.h1 center>Previous Projects</x-heading.h1>
    <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-3 xl:gap-6 mb-14">
        @forelse ($previous as $item)    
            <x-card.project :item="$item"/>
        @empty
            No Previous Project
        @endforelse
    </div>
</x-container>
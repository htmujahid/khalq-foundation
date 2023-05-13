
<x-container topBottom>
<x-heading.h1 center>Ongoing Projects</x-heading.h1>
    <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-3 xl:gap-6 mb-14">
        {{-- <x-card.project name="Cases" description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam minus est facilis ea, eveniet ducimus id, quas, voluptates in iste autem laboriosam enim excepturi. Nam animi maxime consequatur id!" link="/cases"/> --}}
        @forelse ($ongoing as $item)    
            <x-card.project :item="$item"/>
        @empty
            No ongoing project
        @endforelse
    </div>
</x-container>
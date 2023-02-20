<x-container bottom>
    <x-heading title="Our Stories">
        How we are Sharing Happiness         
    </x-heading>
    <div class="w-full sm:w-[600px] pt-10 pb-20 text-lg">
        <p>
            At KHALQ Foundation Pakistan, we are dedicated to creating positive change in our community and beyond. On this page, you will find a collection of success stories that showcase the impact of our work on individuals and society as a whole. We are proud to share these stories with you and are grateful for your support in helping us create positive change in the world.    
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 xl:gap-6 mb-14">
        {{-- <x-card.project name="Cases" description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam minus est facilis ea, eveniet ducimus id, quas, voluptates in iste autem laboriosam enim excepturi. Nam animi maxime consequatur id!" link="/cases"/> --}}
        @forelse ($stories as $item)    
            <x-card.project :item="$item"/>
        @empty
            No stories
        @endforelse
    </div>
</x-container>
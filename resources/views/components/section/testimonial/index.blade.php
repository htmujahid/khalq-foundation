<x-container id="container">
    <div class="py-10">
        <x-heading title="Testimonials">Here’s how our donors say about us</x-heading>
        <x-wrapper.multicarousel>
            @foreach ($reviews as $review)    
            <x-card.review :review="$review" />
            @endforeach
        </x-wrapper.multicarousel>
    </div>
</x-container>
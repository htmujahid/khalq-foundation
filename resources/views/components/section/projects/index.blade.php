<x-container bottom>
    <x-heading title="Projects">
        How we are Going        
    </x-heading>
    <div class="w-full sm:w-[600px] pt-10 pb-20 text-lg">
        <p>
            These are the projects of KHALQ Foundation Pakistan, demonstrating the progress and successes achieved by the people we serve and the positive ripple effect that our work can have on families, communities, and the larger society. From improving access to education and healthcare to building stronger, more vibrant communities, our work is making a real difference in the world.
        </p>
    </div>
    <x-section.projects.ongoing :ongoing="$ongoing" />
    <x-section.projects.upcoming :upcoming="$upcoming" />
    <x-section.projects.previous :previous="$previous" />
</x-container>
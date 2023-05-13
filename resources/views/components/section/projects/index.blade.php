<x-container topBottom>
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
        <div class="order-2 lg:order-1">
            <x-heading.main title="Our Journey to Serve the Society">
                OUR PROJECTS
            </x-heading.main>
            <x-heading.h5 class="mt-4 text-gray-dark" style="line-height: 1.9">
                Our community projects are designed to serve the needs of our neighbourhoods
            </x-heading.h5>
        </div>
        <div class="order-1 lg:order-2">
            <img src="assets/images/courtesy.png" alt="" class="ml-auto">
        </div>
    </div> 
</x-container>
<x-section.projects.ongoing :ongoing="$ongoing" />
<x-section.projects.previous :previous="$previous" />
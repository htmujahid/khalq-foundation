<x-container topBottom>
    <x-heading title="How You Can Help">
        Here’s how you can help us in our work & projects etc
    </x-heading>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6 justify-between items-center">
        <x-card>
            <div class="bg-white rounded-3xl shadow-md p-10 lg:py-12 lg:px-20">
                <div class="flex justify-center pt-4 py-9">
                    <img src="/assets/icons/projects.svg" alt="projects">
                </div>
                <div class="">
                    <x-heading.h3 class="font-serif pb-5 sm:text-center">
                        Our Projects
                    </x-heading.h3>
                    <x-heading.h6 class="text-gray-dark sm:text-center">
                        Our community projects are designed to serve the needs of our neighbourhoods
                    </x-heading.h6>
                </div>
                <div class="pt-6 flex justify-center">
                    <a href="/projects">
                        <x-button>
                            Check More
                        </x-button>
                    </a>
                </div>
            </div>
        </x-card>
        <x-card>
            <div class="bg-white rounded-3xl shadow-md p-10 lg:py-12 lg:px-20">
                <div class="flex justify-center pt-4 py-9">
                    <img src="/assets/icons/cases.svg" alt="projects">
                </div>
                <div class="">
                    <x-heading.h3 class="font-serif pb-5 sm:text-center">
                        Our Cases
                    </x-heading.h3>
                    <x-heading.h6 class="text-gray-dark sm:text-center">
                        Our individual cases are focused on helping those in need with specific and immediate needs. 
                    </x-heading.h6>
                </div>
                <div class="pt-6 flex justify-center">
                    <a href="/cases">
                        <x-button>
                            Check More
                        </x-button>
                    </a>
                </div>
            </div>
        </x-card>
    </div>
</x-container>
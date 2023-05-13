<x-container topBottom>
    <x-heading.h1 center>Ongoing {{ $type }}</x-heading.h1>
    <x-card>
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-x-16 gap-y-8 p-9">
            <div class="mx-auto">
                <img src="/assets/images/cases/ongoing.png" alt="ongoing">
            </div>
            <div class="sm:mx-auto lg:mx-0">
                <div class="pb-4 text-center sm:text-left">
                    <span class="inline-block px-5 py-1 rounded-xl text-primary text-sm border border-primary">{{ $category ?? "Verified" }}</span>
                </div>
                <x-heading.h2 class="font-serif">{{ $title }}</x-heading.h2>
                <div class="py-4 2xl:py-6">
                    <p class="w-full text-center sm:text-left xl:w-[450px] text-lg text-gray-dark sm:h-20 overflow-hidden">{{ $description }}</p>
                </div>
                <div class="flex justify-center sm:justify-start">
                    <div class="pr-4 sm:pr-10 border-r ">
                        <p class="text-gray-dark">Goal</p>
                        <p class="font-medium font-bold pt-1">PKR {{ number_format($required) }}</p>
                    </div>
                    <div class="px-4 sm:px-10 border-r ">
                        <p class="text-gray-dark">Raised</p>
                        <p class="font-medium font-bold pt-1">PKR {{ number_format($collected) }}</p>
                    </div>
                    <div class="pl-4 sm:pl-10">
                        <p class="text-gray-dark">Remaining</p>
                        <p class="font-medium font-bold pt-1">PKR {{ number_format($remaining) }}</p>
                    </div>
                </div>
                <div class="pt-4 2xl:pt-10 pb-4">
                    <a href="/donate">
                        <x-button.primary>Donate Now</x-button.primary>
                    </a>
                </div>
                <p><span class="text-gray-dark">Need more details? </span><span class="underline text-primary font-medium"><a href="/contact">Contact Us</a></span></p>
            </div>
        </div>
    </x-card>
</x-container>
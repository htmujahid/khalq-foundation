<x-container>
    <x-heading.h1 bottom>Our Impact</x-heading.h1>
    <div class="flex justify-center items-center w-full">
        {{-- <p class="flex-1"></p>
        <p>
            <a href="" class="hover:opacity-90">
                <p class="text-xl color-3 underline">See Details</p> <img src="/assets/logo/arrow-right.svg" alt="" class="inline">
            </a>
        </p> --}}
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 sm:gap-4 align-center justify-items-center ">
        <div class="w-full sm:w-64 md:w-full bg-primary text-center h-56 rounded-tl-3xl sm:rounded-3xl shadow-1">
            <img src="/assets/icons/cases.svg" alt="" class=" inline-block mt-16 -translate-y-1/2" width="50">
            <p class="text-4xl font-bold text-white mb-2.5">{{$cases}}+</p>
            <p class="text-lg text-white mb-5">Cases Solved</p>
        </div>
        <div class="w-full sm:w-64 md:w-full bg-primary text-center h-56 rounded-tr-3xl sm:rounded-3xl shadow-1">
            <img src="/assets/icons/donors.svg" alt="" class=" inline-block mt-16 -translate-y-1/2">
            <p class="text-4xl font-bold text-white mb-2.5">{{$donors}}+</p>
            <p class="text-lg text-white mb-5">Regular Donors</p>
        </div>
        <div class="w-full sm:w-64 md:w-full bg-primary text-center h-56 rounded-bl-3xl sm:rounded-3xl shadow-1">
            <img src="/assets/icons/rate.svg" alt="" class=" inline-block mt-16 -translate-y-1/2">
            <p class="text-4xl font-bold text-white mb-2.5">100%</p>
            <p class="text-lg text-white mb-5">Cases Solving Rate</p>
        </div>
        <div class="w-full sm:w-64 md:w-full bg-primary text-center h-56 rounded-br-3xl sm:rounded-3xl shadow-1">
            <img src="/assets/icons/funds.svg" alt="" class=" inline-block mt-16 -translate-y-1/2" width="60">
            <p class="text-4xl font-bold text-white mb-2.5">Rs. {{(int) ($donations)}}M+</p>
            <p class="text-lg text-white mb-5">Funds Collected</p>
        </div>
    </div>
</x-container>
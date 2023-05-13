<x-container>
    {{-- <x-heading.h1 bottom center>Our Impact</x-heading.h1> --}}
    <x-card>
        <div class="grid grid-cols-2 lg:grid-cols-4 sm:gap-4 align-center justify-items-center">
            <div class="w-full sm:w-64 md:w-full text-center h-56 rounded-tl-3xl sm:rounded-3xl shadow-1">
                <img src="/assets/icons/verified.svg" alt="" class=" inline-block mt-10 mb-6 h-12" width="50">
                <p class="text-4xl font-bold mb-2.5 font-serif">{{$cases}}+</p>
                <p class="text-lg mb-5">Cases Solved</p>
            </div>
            <div class="w-full sm:w-64 md:w-full text-center h-56 rounded-tr-3xl sm:rounded-3xl shadow-1">
                <img src="/assets/icons/donors.svg" alt="" class=" inline-block mt-10 mb-6 h-12">
                <p class="text-4xl font-bold mb-2.5 font-serif">{{$donors}}+</p>
                <p class="text-lg mb-5">Regular Donors</p>
            </div>
            <div class="w-full sm:w-64 md:w-full text-center h-56 rounded-bl-3xl sm:rounded-3xl shadow-1">
                <img src="/assets/icons/rate.svg" alt="" class=" inline-block mt-10 mb-6 h-12">
                <p class="text-4xl font-bold mb-2.5 font-serif">100%</p>
                <p class="text-lg mb-5">Cases Solving Rate</p>
            </div>
            <div class="w-full sm:w-64 md:w-full text-center h-56 rounded-br-3xl sm:rounded-3xl shadow-1">
                <img src="/assets/icons/funds.svg" alt="" class=" inline-block mt-10 mb-6 h-12" width="60">
                <p class="text-4xl font-bold mb-2.5 font-serif">Rs. {{(int) ($donations)}} M+</p>
                <p class="text-lg mb-5">Funds Collected</p>
            </div>
        </div>
    </x-card>
</x-container>
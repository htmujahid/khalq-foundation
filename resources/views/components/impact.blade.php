<div class="container mx-auto my-14">
    <div class="flex justify-center items-center">
        <p class="text-6xl font-1 color-3">Our Impact</p>
        <p class="flex-1"></p>
        {{-- <p>
            <a href="" class="hover:opacity-90">
                <p class="text-xl color-3 underline">See Details</p> <img src="/assets/logo/arrow-right.svg" alt="" class="inline">
            </a>
        </p> --}}
    </div>
    <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 align-center justify-items-center">
        <div class="w-64 md:w-full gradient-1 text-center h-56 rounded-3xl shadow-1">
            <img src="/assets/logo/cases.svg" alt="" class=" inline-block mt-16 -translate-y-1/2" width="50">
            <p class="text-4xl font-bold text-white mb-2.5">{{$case_count}}+</p>
            <p class="text-lg text-white mb-5">Cases Solved</p>
        </div>
        <div class="w-64 md:w-full gradient-1 text-center h-56 rounded-3xl shadow-1">
            <img src="/assets/logo/donors.svg" alt="" class=" inline-block mt-16 -translate-y-1/2">
            <p class="text-4xl font-bold text-white mb-2.5">{{$donor_count}}+</p>
            <p class="text-lg text-white mb-5">Regular Donors</p>
        </div>
        <div class="w-64 md:w-full gradient-1 text-center h-56 rounded-3xl shadow-1">
            <img src="/assets/logo/rate.svg" alt="" class=" inline-block mt-16 -translate-y-1/2">
            <p class="text-4xl font-bold text-white mb-2.5">100%</p>
            <p class="text-lg text-white mb-5">Cases Solving Rate</p>
        </div>
        <div class="w-64 md:w-full gradient-1 text-center h-56 rounded-3xl shadow-1">
            <img src="/assets/logo/funds.svg" alt="" class=" inline-block mt-16 -translate-y-1/2" width="60">
            <p class="text-4xl font-bold text-white mb-2.5">Rs {{$donation_count}}</p>
            <p class="text-lg text-white mb-5">Funds Collected</p>
        </div>
    </div>
</div>
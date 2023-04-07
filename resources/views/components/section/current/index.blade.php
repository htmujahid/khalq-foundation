<div class="bg-primary-light">
    <x-container topBottom>
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-x-16 gap-y-8 py-16 ">
            <div class="mx-auto">
                <x-card.case :id="$id" :type="$type" :description="$description" :required="$required" :remaining="$remaining" :collected="$collected" :accounts="$accounts" />
            </div>
            <div class="sm:mx-auto lg:mx-0">
                <x-heading.h4>{{$category ?? $title}}</x-heading.h4>
                <x-heading.h1>Current {{$type}}</x-heading.h1>
                <p class="w-full text-center sm:text-left sm:w-[450px] my-5 text-lg">We believe that every person has the right to live a healthy, fulfilling life. Your donation allows us to make a real difference in the lives of those in need. Please consider supporting KHALQ with a donation. Every contribution, no matter how big or small, matters.</p>
                <div class="flex overflow-auto gap-5 hide-scrollbar justify-between sm:justify-start">
                    <div class="bg-white py-2 w-32 flex justify-center text-center flex-col gap-5 flex-shrink-0 rounded-3xl">
                        <div class="text-lg text-center flex justify-center items-center gap-1"><span> Donate </span><img src="/assets/icons/donate.svg" width="20" alt=""></div>
                    </div>
                    <div class="bg-white py-2 w-32 flex justify-center text-center flex-col gap-5 flex-shrink-0 rounded-3xl">
                        <div class="text-lg text-center flex justify-center items-center gap-1"><span> Share </span><img src="/assets/icons/share.svg" width="20" alt=""></div>
                    </div>
                    <div class="bg-white py-2 w-32 flex justify-center text-center flex-col gap-5 flex-shrink-0 rounded-3xl">
                        <div class="text-lg text-center flex justify-center items-center gap-1"><span> Help </span><img src="/assets/icons/help.svg" width="20" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</div>
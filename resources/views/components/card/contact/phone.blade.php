<x-card class="w-full sm:sm:w-[450px]">
    <div class="h-full p-8">
        <div class="flex gap-2 items-center justify-center sm:justify-start pb-2 mx-auto">
            <img src="/assets/icons/phone.svg" alt="">
            <p class="text-lg text-center sm:text-left text-gray-dark">Mobile/Whatsapp</p>
        </div>
        <div class="flex gap-2 mx-auto w-fit sm:w-full">
            <p id="phone" class="font-medium text-xl sm:text-2xl text-center sm:text-left">
                <a href="tel:{{$phone}}">{{$phone}}</a>    
            </p>
            <img src="/assets/icons/copy.svg" alt="" class="active:opacity-60" onclick="navigator.clipboard.writeText(document.getElementById('phone').innerText)" >
        </div>
    </div>
</x-card>
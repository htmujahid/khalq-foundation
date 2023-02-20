<div class="sm:w-[600px] sm:h-52 p-8 flex gap-10 items-center flex-col sm:flex-row bg-primary-light rounded-3xl">
    <div class="w-[140px] h-[140px] sm:h-full bg-primary-dark rounded-xl"><img src="" alt=""></div>
    <div>
        <p class="font-bold text-3xl pb-5 tracking-wide text-center sm:text-left">{{$name}}</p>
        <p class="text-lg pb-2 text-center sm:text-left">Mobile Number</p>
        <div class="flex gap-5 mx-auto w-fit sm:w-full">
            <p id="phone" class="font-medium text-xl text-center sm:text-left">{{$phone}}</p>
            <img src="/assets/icons/copy.svg" alt="" class="active:opacity-60" onclick="navigator.clipboard.writeText(document.getElementById('phone').innerText)" >
        </div>
    </div>
</div>
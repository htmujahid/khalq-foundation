<div class="container mx-auto">
    <div class="flex items-center mb-16 gap-3">
        <h1 class="text-6xl font-1 color-3">Words From our Donors</h1>
        <div class="flex-1"></div>
        <div class="">
            <button id="prev"><img src="./assets/logo/prev.svg" alt="prev"></button>
        </div>
        <div class="">
            <button id="next"><img src="./assets/logo/next.svg" alt="next"></button>
        </div>
    </div>
    <div class="overflow-hidden">
        <div id="caro" class="whitespace-nowrap transition duration-300" style="transform: translateX(-0%)">
            @foreach ($review as $item)
                <div class="inline-flex items-center justify-center w-full md:w-3/6 xl:w-2/6">
                    @component('components.reviewcard')
                    @slot('userProfile')
                    {{$item->image}}
                    @endslot
                    @slot('userName')
                    {{$item->name}}
                    @endslot
                    @slot('reviewText')
                    {{$item->message}}
                    @endslot
                    @endcomponent
                </div>
            @endforeach
            @foreach ($review as $item)
            <div class="inline-flex items-center justify-center w-full md:w-3/6 xl:w-2/6">
                @component('components.reviewcard')
                @slot('userProfile')
                {{$item->image}}
                @endslot
                @slot('userName')
                {{$item->name}}
                @endslot
                @slot('reviewText')
                {{$item->message}}
                @endslot
                @endcomponent
            </div>
            @endforeach
      
            
        </div>
    </div>
</div>
<script>
    const caro = document.getElementById("caro");
    const prev = document.getElementById("prev");
    const next = document.getElementById("next");
    let items = caro.childElementCount;
    let count = 1;
    let translate = 0;
    if(count === 1){
        prev.style.visibility = 'hidden'
    }
    window.addEventListener('resize',()=>{
        count = 1;
        translate = 0;
        caro.style.transform = 'translateX(0%)'
        prev.style.visibility = 'hidden'
        next.style.visibility = 'visible'
    })
    prev.addEventListener('click',()=>{
        if(count === 2){
            prev.style.visibility = 'hidden'
        }
        next.style.visibility = 'visible'
        count--;
        if(window.innerWidth < 768){
            translate += 100;
        }
        else if(window.innerWidth < 1280){
            translate += 50;
        }
        else{
            translate += 34;
        }
        // translate = 0;
        caro.style.transform = 'translateX('+translate+'%)'

    })
    
    next.addEventListener('click',()=>{
        prev.style.visibility = 'visible';

        if(window.innerWidth < 768){
            translate -= 100;
            if(count === items-1){
            next.style.visibility = 'hidden'
        }
        }
        else if(window.innerWidth < 1280){
            translate -= 50;
            if(count === items-2){
            next.style.visibility = 'hidden'
        }
        }
        else{
            translate -= 34;
            if(count === items-3){
            next.style.visibility = 'hidden'
        }
        }
        caro.style.transform = 'translateX('+translate+'%)'
        count++;
    })
</script>
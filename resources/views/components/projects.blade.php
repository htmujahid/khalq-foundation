<div class="color-4 my-14 pt-14">
    <div class="container mx-auto">
        <div>
            <p class="text-6xl pb-14 font-1">Ongoing Projects</p></div>
            <div class="grid lg:grid-cols-2 items-stretch gap-3 xl:gap-6 cursor-pointer">
                <div id="case-description">
                    @component('components.projectcard', compact('case_description'))
                    @slot('type')
                    type-1
                    @endslot
                    @slot('image')
                    ./assets/img/case1.png
                    @endslot
                    @slot('title')
                    {{$case_description->title}}
                    @endslot
                    @slot('description')
                    {{$case_description->description}}
                    @endslot
                    @slot('location')
                    {{$case_description->needy_address}}
                    @endslot
                    @slot('amount')
                    {{$case_description->amount}}
                    @endslot
                    @slot('recv')
                    {{$case_description->case_donation->sum('amount')}}
                    @endslot
                    @endcomponent
                </div>
    
            <div class="grid grid-cols-2 gap-3 xl:gap-6">
                @foreach ($project_description as $item)
                    
                @component('components.projectcard')
                @slot('type')
                type-2
                @endslot
                @slot('image')
                ./assets/img/case1.png
                @endslot
                @slot('title')
                {{$item->title}}
                @endslot
                @slot('description')
                {{$item->description}}
                @endslot
                @endcomponent
                @endforeach
{{-- 
                @component('components.projectcard')
                @slot('type')
                type-2
                @endslot
                @slot('image')
                ./assets/img/case1.png
                @endslot
                @slot('title')
                Sindh Education Fund
                @endslot
                @slot('description')
                @endslot
                @endcomponent
           
                @component('components.projectcard')
                @slot('type')
                type-2
                @endslot
                @slot('image')
                ./assets/img/case1.png
                @endslot
                @slot('title')
                Sindh Education Fund
                @endslot
                @slot('description')
                Lorem ipsum dolor sit amet consectetur adipisicing elit.       
                @endslot
                @endcomponent
           
                @component('components.projectcard')
                @slot('type')
                type-2
                @endslot
                @slot('image')
                ./assets/img/case1.png
                @endslot
                @slot('title')
                Sindh Education Fund
                @endslot
                @slot('description')
                Lorem ipsum dolor sit amet consectetur adipisicing elit.       
                @endslot
                @endcomponent
            --}}


            </div>
        </div>
        <div class="text-center color-4 py-10 underline"><a href="/projects">Explore all Compaigns <img src="assets/logo/arrow-right.svg" alt="" class="inline"></a>
        </div>
    </div>
</div>
    <div id="case-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed w-max z-50 border border-red h-modal md:h-max -translate-x-1/2 -translate-y-1/2" style="top: 50%; left: 50%;">
        <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b">
                <h3 class="text-3xl font-medium text-gray-900">
                    {{$case_description->title}}
                </h3>
                <button id="close-modal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-cente" data-modal-toggle="medium-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500">
                    {{$case_description->description}}
                </p>
                {{-- <p class="text-base leading-relaxed text-gray-500">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p> --}}
            </div>
            <!-- Modal footer -->
            <div class="p-6 space-x-2 rounded-b border-t border-gray-200">
                <div class="w-full bg-gray-200 rounded-full h-4 flex">
                    <div class="gradient-2 h-4 rounded-full" style="width: {{$case_description->case_donation->sum('amount') / $case_description->amount * 100}}%"></div>
                    {{-- <div class="gradient-2 text-white border-white border-4 rounded-full w-9 h-9 -pt-4 relative bottom-2.5 -left-2.5 px-auto"> --}}
                        {{-- <span class="color-6 text-xs left-0.5 top-1.5 absolute">90%</span> --}}
                        {{-- <div class=" absolute top-7 color-3 pt-0.5 text-2xl font-medium">Rs:1000</div> --}}
                    {{-- </div> --}}
                </div>
                <div class="flex pt-4">
                    <p class="text-left text-lg">Required :{{$case_description->case_donation->sum('amount')}}</p>
                    <p class="flex-1"></p>
                    <p class="text-right text-lg">Collected :{{$case_description->amount}}</p>
                </div>           
            </div>
        </div>
    </div>
</div>

<script>
    var case_description = document.getElementById('case-description');
    var case_modal = document.getElementById('case-modal');
    var close_modal = document.getElementById('close-modal');
    case_description.addEventListener('click', function(){         
        case_modal.style.setProperty('display', 'block', 'important');
    })    
    close_modal.addEventListener('click', function(){         
        case_modal.style.setProperty('display', 'none', 'important');
    })
</script>
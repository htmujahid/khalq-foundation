@extends('layouts.layout')
@section('content')
    
<div class="container mx-auto my-14 color-1">
    <p class="text-2xl color-3"><span class="w-6 inline-block border-t-2 border-black border-solid" ></span> Join Us</p>
    <p class="text-6xl font-1 color-3 my-6">Hold Our Hands to Serve Humanity</p>
    <div class="flex flex-col md:flex-row justify-around items-center gap-6">
        <div>  
            <a href="/join-us/gtm">
                <button id="gtm-label" class="{{Request::path()=='join-us' || Request::path()=='join-us/gtm'? 'color-2': 'color-1'}} button text-center border border-1 py-2 px-4 rounded-md">General Team Member</button>
            </a>
        </div>
        <div>
            <a href="/join-us/am">
                <button id="am-label" class="{{Request::path()=='join-us/am'? 'color-2': 'color-1'}} button text-center border border-1 py-2 px-4 rounded-md">Area Manager</button>
            </a>   
        </div>
        <div>
            <a href="/join-us/ca">
                <button id="ca-label" class="{{Request::path()=='join-us/ca'? 'color-2': 'color-1'}} button text-center border border-1 py-2 px-4 rounded-md">Campus Ambassador</button>
            </a>   
        </div>
        </div>   
    @if (Request::path() == 'join-us' || Request::path() == 'join-us/gtm')
        @component('components.joingtm')
            
        @endcomponent

        @elseif (Request::path() == 'join-us/am')
        @component('components.joinam')
            
        @endcomponent

    @elseif (Request::path() == 'join-us/ca')
        @component('components.joinca')
            
        @endcomponent
         
    @endif

</div>
    
@endsection
<script>
    var gtm = document.getElementById('gtm');
    gtm.addEventListener('click',function(){
        console.log('okay')
    })
</script>
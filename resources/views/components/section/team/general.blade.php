<div>
    <x-heading.h1 bottom center>
        Team Members
    </x-heading.h1>
    <div class="flex flex-wrap text-center gap-x-10 gap-y-4 justify-center mb-10 text-xl">
        <button id="psbtn" class="bg-primary-light px-4 py-2 rounded-3xl w-full sm:w-auto">
            Press Secertary Wing
        </button>
        <button id="gsbtn" class="bg-primary text-white px-4 py-2 rounded-3xl w-full sm:w-auto">
            General Secertary Wing
        </button>
        <button id="eabtn" class="bg-primary-light px-4 py-2 rounded-3xl w-full sm:w-auto">
            External Affairs Wing
        </button>
    </div>
    <div id="ps" class="flex gap-20 justify-center flex-wrap hidden">
        @forelse ($press as $member)    
            <x-card.team :member="$member" />
        @empty
            No Press Secertary Member Found
        @endforelse
    </div>
    <div id="gs" class="flex gap-20 justify-center flex-wrap">
        @forelse ($general as $member)
            <x-card.team :member="$member" />        
        @empty
            No General Secertary Member Found
        @endforelse
    </div>
    <div id="ea" class="flex gap-20 justify-center flex-wrap hidden">
        @forelse ($external as $member)
            <x-card.team :member="$member" />
        @empty
            No External Affair Member Found
        @endforelse
    </div>
</div>
<script>
    var psbtn = document.getElementById('psbtn')
    var gsbtn = document.getElementById('gsbtn')
    var eabtn = document.getElementById('eabtn')
    var ps = document.getElementById('ps')
    var gs = document.getElementById('gs')
    var ea = document.getElementById('ea')

    psbtn.addEventListener('click',function(){
        psbtn.classList.add('bg-primary', 'text-white')
        gsbtn.classList.remove('bg-primary', 'text-white')
        eabtn.classList.remove('bg-primary', 'text-white')
        psbtn.classList.remove('bg-primary-light')
        gsbtn.classList.add('bg-primary-light')
        eabtn.classList.add('bg-primary-light')
        ps.classList.add('block')
        gs.classList.remove('block')
        ea.classList.remove('block')
        ps.classList.remove('hidden')
        gs.classList.add('hidden')
        ea.classList.add('hidden')
    })
    gsbtn.addEventListener('click',function(){
        gsbtn.classList.add('bg-primary', 'text-white')
        psbtn.classList.remove('bg-primary', 'text-white')
        eabtn.classList.remove('bg-primary', 'text-white')
        gsbtn.classList.remove('bg-primary-light')
        psbtn.classList.add('bg-primary-light')
        eabtn.classList.add('bg-primary-light')
        gs.classList.add('block')
        ps.classList.remove('block')
        ea.classList.remove('block')
        gs.classList.remove('hidden')
        ps.classList.add('hidden')
        ea.classList.add('hidden')
    })
    eabtn.addEventListener('click',function(){
        eabtn.classList.add('bg-primary', 'text-white')
        gsbtn.classList.remove('bg-primary', 'text-white')
        psbtn.classList.remove('bg-primary', 'text-white')
        eabtn.classList.remove('bg-primary-light')
        gsbtn.classList.add('bg-primary-light')
        psbtn.classList.add('bg-primary-light')
        ea.classList.add('block')
        gs.classList.remove('block')
        ps.classList.remove('block')
        ea.classList.remove('hidden')
        gs.classList.add('hidden')
        ps.classList.add('hidden')
    })
</script>
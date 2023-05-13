<div x-data="{active: 'gs'}" class="mb-20">
    <x-heading.h1 center>
        General Team Members
    </x-heading.h1>
    <x-card class="md:rounded-full w-fit mx-auto">
        <div class="flex flex-wrap text-center gap-x-4 gap-y-4 justify-center mb-10 text-xl p-6">
            <button id="psbtn" class="px-4 py-2 border-2 border-primary rounded-3xl w-full sm:w-auto" :class="{'bg-primary text-white': active == 'ps'}" @click="active = 'ps'">
                Press Secertary Wing
            </button>
            <button id="gsbtn" class="px-4 py-2 border-2 border-primary rounded-3xl w-full sm:w-auto" :class="{'bg-primary text-white': active == 'gs'}" @click="active = 'gs'">
                General Secertary Wing
            </button>
            <button id="eabtn" class="px-4 py-2 border-2 border-primary rounded-3xl w-full sm:w-auto" :class="{'bg-primary text-white': active == 'ea'}" @click="active = 'ea'">
                External Affairs Wing
            </button>
        </div>
    </x-card>
    <div id="ps" class="flex gap-10 justify-center flex-wrap" x-show="active == 'ps'">
        @forelse ($press as $member)    
            <x-card.team :member="$member" />
        @empty
            No Press Secertary Member Found
        @endforelse
    </div>
    <div id="gs" class="flex gap-10 justify-center flex-wrap" x-show="active == 'gs'">
        @forelse ($general as $member)
            <x-card.team :member="$member" />        
        @empty
            No General Secertary Member Found
        @endforelse
    </div>
    <div id="ea" class="flex gap-10 justify-center flex-wrap" x-show="active == 'ea'">
        @forelse ($external as $member)
            <x-card.team :member="$member" />
        @empty
            No External Affair Member Found
        @endforelse
    </div>
</div>

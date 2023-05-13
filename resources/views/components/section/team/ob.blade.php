<div class="mb-20">
    <x-heading.h1 center>
        Office Bearers
    </x-heading.h1>
    <div class="flex gap-10 justify-center flex-wrap">
        @forelse ($obs as $ob)
            <x-card.team :member="$ob"/>        
        @empty
            No OB Member Found
        @endforelse
    </div>
</div>
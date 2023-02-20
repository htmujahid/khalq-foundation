<div class="flex items-center flex-col">
    <div class="w-44 h-44 border border- black rounded-full shadow-lg overflow-hidden">
        <img src={{$member->image}}>
    </div>
    <div class="w-52 text-center">
        <p class="text-2xl font-medium pt-2">{{$member->name}}</p>
        <p class="text-lg">
            {{$member->designation !== "OB"? $member->designation: ''}}
            
            {{$member->portfolio}}
        </p>
    </div>
</div>
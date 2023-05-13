<x-card>
    <div class="flex items-center flex-col p-6 w-[290px]">
        <div class="max-w-[240px] h-[200px] rounded-lg mx-auto overflow-hidden">
            <img src={{$member->image ?? "/assets/images/default.png"}}>
        </div>
        <div class="text-center">
            <p class="text-2xl font-medium pt-3">{{$member->name}}</p>
            <p class="text-lg text-gray-dark">
                {{$member->designation !== "OB"? $member->designation: ''}}
                
                {{$member->portfolio}}
            </p>
        </div>
    </div>
</x-card>
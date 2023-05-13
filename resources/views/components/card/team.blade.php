@if ($member->image)
    @php        
        if (strpos($member->image, 'drive.google.com') !== false) {
            $parts = explode('/', parse_url($member->image, PHP_URL_PATH));
            if(count($parts) > 3) {
                $image = "https://drive.google.com/u/0/uc?export=view&id=" . $parts[3];
            } else {
                $image = $member->image;
            }
        } else {
            $image = $member->image;
        }
    @endphp
@endif
<x-card>
    <div class="flex items-center flex-col p-6 w-[290px]">
        <div class="max-w-[240px] h-[200px] rounded-lg mx-auto overflow-hidden">
            <img src={{$image ?? ""}}>
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
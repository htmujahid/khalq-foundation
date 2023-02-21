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
<div class="flex items-center flex-col">
    <div class="w-44 h-44 border border- black rounded-full shadow-lg overflow-hidden">
        <img src={{$image ?? ""}}>
    </div>
    <div class="w-52 text-center">
        <p class="text-2xl font-medium pt-2">{{$member->name}}</p>
        <p class="text-lg">
            {{$member->designation !== "OB"? $member->designation: ''}}
            
            {{$member->portfolio}}
        </p>
    </div>
</div>
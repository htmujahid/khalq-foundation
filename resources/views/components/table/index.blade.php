<div class="overflow-x-visible">
    <div class="py-2 align-middle overflow-x-auto">
        <table  {{$attributes->merge(["class" => "flex flex-col divide-y divide-gray-200 rounded-lg px-2 min-w-[620px]"])}}>
            {{ $slot }}
        </table>
    </div>
</div>
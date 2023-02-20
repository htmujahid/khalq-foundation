<div class="container my-14 mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
        <div class="order-2 lg:order-1">
            <x-heading :title="$headline">
                <x-application.name />
            </x-heading>
            <x-heading.h4 class="mt-8">
                {{$subheadline}}
            </x-heading.h4>
            <x-button.cta class="mt-12">{{ __("Donate Now")}}</x-button.cta>
        </div>
        <div class="order-1 lg:order-2">
            <img src="assets/images/hero.png" alt="" class="mx-auto">
        </div>
    </div>
</div>
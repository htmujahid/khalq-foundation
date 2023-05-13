<div class="container my-24 mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
        <div class="order-2 lg:order-1">
            <x-heading.main :title="$headline">
                <x-application.name />
            </x-heading.main>
            <x-heading.h5 class="mt-4 text-gray-dark" style="line-height: 1.9">
                {{$subheadline}}
            </x-heading.h5>
            <x-button.cta class="mt-16">{{ __("Donate Now")}}</x-button.cta>
        </div>
        <div class="order-1 lg:order-2">
            <img src="assets/images/hero.png" alt="" class="ml-auto">
        </div>
    </div>
</div>
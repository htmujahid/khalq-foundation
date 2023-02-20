<x-container>
    <x-heading title="Donate Now">
        Every Penny Matters
    </x-heading>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-10 mx-auto w-fit sm:w-full mt-12 mb-16">
        @forelse ($accounts as $account)        
            <x-card.donate :account="$account" bank="easypaisa" name="Habib Bank Limited" number="+92 312 6588344" title="Talha Mujahid" />
        @empty
            No Account Information Available
        @endforelse
    </div>
</x-container>
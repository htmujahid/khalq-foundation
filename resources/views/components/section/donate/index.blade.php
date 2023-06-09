<x-container topBottom>
    <x-heading title="Donate Now">
        You can send your donations on any of the following accounts
    </x-heading>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-10 mx-auto sm:w-full mt-12 mb-16">
        @forelse ($accounts as $account)        
            <x-card.donate :account="$account" bank="easypaisa" name="Habib Bank Limited" number="+92 312 6588344" title="Talha Mujahid" />
        @empty
            No Account Information Available
        @endforelse
    </div>
</x-container>
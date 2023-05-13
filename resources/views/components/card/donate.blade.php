<x-card>
    <div id="donate-card" class="p-8" >
        <div class="pb-5">
            <img src="/assets/images/accounts/{{strtolower($account->bank_name)}}.png" class=" h-10" alt="">
        </div>
        <div class="pt-3">
            <p class="pb-1 text-gray-dark">Bank Name</p>
            <div class="flex gap-2">
                <p class="text-2xl font-medium" id="bank-name">{{$account->bank_name}}</p>
                <img src="/assets/icons/copy.svg" alt="" class="active:opacity-60" onclick="navigator.clipboard.writeText(document.getElementById('bank-name').innerText)"  />
            </div>
        </div>
        <div class="pt-3">
            <p class="pb-1 text-gray-dark">Bank Account Number</p>
            <div class="flex gap-2">
                <p class="text-2xl font-medium" id="bank-number">{{$account->account_number}}</p>
                <img src="/assets/icons/copy.svg" alt="" class="active:opacity-60" onclick="navigator.clipboard.writeText(document.getElementById('bank-number').innerText)" />
            </div>
        </div>
        <div class="pt-3">
            <p class="pb-1 text-gray-dark">Account Title</p>
            <div class="flex gap-2">
                <p class="text-2xl font-medium" id="bank-title">{{$account->account_name}}</p>
                <img src="/assets/icons/copy.svg" alt="" class="active:opacity-60" onclick="navigator.clipboard.writeText(document.getElementById('bank-title').innerText)" />
            </div>
        </div>
    </div>
</x-card>
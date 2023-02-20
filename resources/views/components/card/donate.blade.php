<div id="donate-card" 
    class="bg-primary-light h-full xl:h-72 w-full xl:w-96 2xl:w-full rounded-3xl flex overflow-hidden" 
    onmouseover="this.children[0].style.transform = 'translateX(-100%)';
    this.children[1].style.transform = 'translateX(-100%)'"
    onclick="this.children[0].style.transform = 'translateX(-100%)';
    this.children[1].style.transform = 'translateX(-100%)'"
    onmouseout="this.children[0].style.transform = 'translateX(0%)';
    this.children[1].style.transform = 'translateX(0%)'">
    <div id="donate-title" class="w-full h-full flex items-center justify-center rounded-3xl flex-shrink-0 duration-300">
        <img src="/assets/images/accounts/{{strtolower($account->bank_name)}}.png" class="w-48" alt="" width="200px">
    </div>
    <div id="donate-detail" class="h-full w-full rounded-3xl p-6 flex-shrink-0 duration-300 relative"
        onclick="this.style.transform='translateX(100px)'">
        <div class="pt-3">
            <p class="pb-1 text-lg">Bank Name</p>
            <div class="flex gap-2">
                <p class="text-2xl font-medium" id="bank-name">{{$account->bank_name}}</p>
                <img src="/assets/icons/copy.svg" alt="" class="active:opacity-60" onclick="navigator.clipboard.writeText(document.getElementById('bank-name').innerText)"  />
            </div>
        </div>
        <div class="pt-3">
            <p class="pb-1 text-lg">Bank Account Number</p>
            <div class="flex gap-2">
                <p class="text-2xl font-medium" id="bank-number">{{$account->account_number}}</p>
                <img src="/assets/icons/copy.svg" alt="" class="active:opacity-60" onclick="navigator.clipboard.writeText(document.getElementById('bank-number').innerText)" />
            </div>
        </div>
        <div class="pt-3">
            <p class="pb-1 text-lg">Account Title</p>
            <div class="flex gap-2">
                <p class="text-2xl font-medium" id="bank-title">{{$account->account_name}}</p>
                <img src="/assets/icons/copy.svg" alt="" class="active:opacity-60" onclick="navigator.clipboard.writeText(document.getElementById('bank-title').innerText)" />
            </div>
        </div>
    </div>
</div>
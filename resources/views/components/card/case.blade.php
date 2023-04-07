<div class="relative h-[450px] w-[350px] sm:w-[400px] overflow-hidden rounded-3xl bg-white pt-4 ring-1 ring-gray-900/5">
  <div class="text-center text-xl font-bold">KHALQ Foundation Pakistan</div>
  <div class="mx-auto my-2 w-fit font-bold">
    <div class="rounded-full border py-1 px-2">{{$type}} # {{$id}}</div>
  </div>
  <div class="px-6">
    <p class="hide-scrollbar h-[140px] overflow-y-scroll text-justify text-sm">{{$description}}</p>
    <p class="mt-3 text-justify text-sm">For Details Please Contact: 0315-4381490</p>
    <div class="my-2 flex justify-between text-center text-sm font-semibold">
      <div class="w-full rounded-l-full border">Required <span class="block">{{$required ?? "-"}}</span></div>
      <div class="w-full border">Collected <span class="block">{{$collected?? "-"}}</span></div>
      <div class="w-full rounded-r-full border">Remaining <span class="block">{{$remaining?? "-"}}</span></div>
    </div>
  </div>
  <div class="bg-red-600 py-1 text-center text-lg font-bold text-white">FOR DONATIONS</div>
  <div class="relative bg-primary px-6 pt-3 pb-5 text-white">
      <div class="hide-scrollbar overflow-x-auto unselectable flex justify-between gap-3">
          @forelse ($accounts as $account)        
              <div class="shrink-0 text-center">
                  <div class="mx-auto w-full rounded-full bg-white border border-white py-1 px-2">
                      <img src="/assets/images/accounts/{{strtolower($account->bank_name)}}.png" alt="" class="h-4 mx-auto">
                  </div>
                  <p class="mt-1 h-4 overflow-hidden text-xs w-24 mx-auto">{{$account->account_name}}</p>
                  <p class="text-sm">{{$account->account_number}}</p>
              </div>
          @empty
              No Account Information Available
          @endforelse
      </div>
  </div>
</div>
<div class="relative h-[450px] w-[350px] sm:w-[400px] overflow-hidden rounded-3xl bg-white pt-4 ring-1 ring-gray-900/5">
  <div class="text-center text-xl font-bold">KHALQ Foundation Pakistan</div>
  <div class="mx-auto my-2 w-fit font-bold">
    <div class="rounded-full border py-1 px-2">Case # {{$id}}</div>
  </div>
  <p class="hide-scrollbar h-[140px] overflow-y-scroll px-6 text-justify text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos explicabo, aliquam laboriosam voluptatem optio dolor iusto nihil labore ut commodi at dolorem? Laboriosam voluptate ipsa amet odio esse in repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet porro optio suscipit, architecto iure animi in? Vel, totam odio, nihil sapiente possimus, illo ipsa eos eveniet quibusdam doloribus quae magni? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique voluptatem ut enim alias, repudiandae harum quas in explicabo</p>
  <p class="mt-2 px-6 text-justify text-sm">For Details Please Contact: 0315-4381490</p>
  <div class="my-1 flex justify-between px-6 text-center text-sm font-semibold">
    <div class="w-full rounded-l-full border">Required <span class="block">{{(int)($required)}}</span></div>
    <div class="w-full border">Collected <span class="block">{{(int)($collected)}}</span></div>
    <div class="w-full rounded-r-full border">Remaining <span class="block">{{(int)($remaining)}}</span></div>
  </div>
  <div class="bg-red-600 py-1 text-center text-lg font-bold text-white">FOR DONATIONS</div>
  <div class="relative bg-primary px-6 pt-3 pb-5 text-white">
      <div class="hide-scrollbar overflow-x-auto unselectable flex justify-between gap-3">
          @forelse ($accounts as $account)        
              <div class="shrink-0 text-center">
                  <div class="mx-auto w-full rounded-full bg-white border border-white py-1 px-2">
                      <img src="/assets/images/accounts/{{strtolower($account->bank_name)}}.png" alt="" class="h-5 mx-auto">
                  </div>
                  <p class="mt-1 h-4 overflow-hidden text-xs">{{$account->account_name}}</p>
                  <p class="text-sm">{{$account->account_number}}</p>
              </div>
          @empty
              No Account Information Available
          @endforelse
      </div>
  </div>
</div>
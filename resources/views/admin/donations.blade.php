<x-app-layout class="">    
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mt-6">
        <div>  
            <a href="">
                <button id="" class="button text-center border py-2 px-4 rounded-md shadow color-2">Donations</button>
            </a>
        </div>
    </div>
    <div class="relative overflow-x-scroll scroll shadow-md sm:rounded-lg ">
        <div class="flex">
            <div class="p-4">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  " placeholder="Search for items">
                </div>
            </div>
            <div class="flex-1"></div>
            <div class="p-4">
                <a href="/admin/donations/create">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="mt-1">
                        <div id="table-add" class="border border-gray-300 text-gray-900 text-sm rounded-lg block p-2.5">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Case ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $item)
                <tr class="bg-white  hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->case_id }}    
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->amount }}    
                    </td>
                    <td class="px-6 py-4">
                        {{ explode(" ", $item->created_at)[0] }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        {{ Form::open(array('route' => array('donations.edit', $item->id), 'method' => 'get', 'class'=>'inline')) }}
                            <button type="submit" >Edit</button>
                        {{ Form::close() }}
                        | 
                        {{ Form::open(array('route' => array('donations.destroy', $item->id), 'method' => 'delete', 'class'=>'inline')) }}
                            <button type="submit" >Delete</button>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
        
</x-app-layout>
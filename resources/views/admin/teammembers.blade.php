<x-app-layout class="">  
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mt-6">
        <div>  
            <a href="">
                <button id="" class="button text-center border py-2 px-4 rounded-md shadow color-2">Team Members</button>
            </a>
        </div>
    </div> 
    <div class="flex flex-col md:flex-row justify-around items-center gap-6 mt-6">
        <div>  
            <a href="/admin/team-members/gtm">
                <button id="gtm-label" class="button text-center border py-2 px-4 rounded-md shadow">General Team Member</button>
            </a>
        </div>
        <div>
            <a href="/admin/team-members/am">
                <button id="am-label" class="button text-center border py-2 px-4 rounded-md shadow">Area Manager</button>
            </a>   
        </div>
        <div>
            <a href="/admin/team-members/ca">
                <button id="ca-label" class="button text-center border py-2 px-4 rounded-md shadow">Campus Ambassador</button>
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
            
        </div>
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contact
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teammembers as $item)
                <tr class="bg-white  hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->name }}    
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->contact }}    
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->type }}    
                    </td>
                    <td class="px-6 py-4">
                        {{ explode(" ", $item->created_at)[0] }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
        
</x-app-layout>
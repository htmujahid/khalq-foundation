<x-app-layout class="">    
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 my-6">
        <div>  
            <a href="">
                <button id="" class="button text-center border py-2 px-4 rounded-md shadow color-2">Joining Members</button>
            </a>
        </div>
    </div>
    <div class="relative overflow-x-scroll scroll">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-0">
                <tr>
                    <th scope="col" class="px-6 py-3">
                    ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Service
                    </th>
                    <th scope="col" class="px-6 py-3">
                    Date
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joiningmembers as $item)
                    <tr class="bg-white  hover:bg-gray-50">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $item->id }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $item->name }}
                        </th>
                        <td class="px-6 py-4">
                            <a href="mailto:{{$item->email}}">
                                {{ $item->email }}    
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="tel:{{$item->contact}}">
                                {{ $item->contact }}    
                            </a>
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
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
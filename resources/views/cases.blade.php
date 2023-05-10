@extends('layouts.layout')
@section('content')
    <div class="container mx-auto my-14 color-1">
        <p class="text-2xl color-3"><span class="w-6 inline-block border-t-2 border-black border-solid" ></span> Cases</p>
        <p class="text-6xl font-1 color-3 my-6"></p>
            <div class="relative overflow-x-scroll scroll shadow-md sm:rounded-lg ">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Collected
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Start Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                End Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cases as $item)
                        @php
                            $status = $item->status;
                        @endphp
                        <tr class="bg-white  hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->title }}    
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->amount }}    
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->case_donation->sum('amount') }}    
                            </td>
                            <td class="px-6 py-4">
                                {{ explode(" ", $item->created_at)[0] }}
                            </td>      
                            @if ($status == "continue")
                                <td class="px-6 py-4">
                                    Continue
                                </td>
                            @elseif ($status == "finished")
                                <td class="px-6 py-4">
                                    {{ explode(" ", $item->updated_at)[0] }}
                                </td>
                            @endif              

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
                
    </div>
@endsection
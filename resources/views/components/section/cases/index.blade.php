<style>tbody tr:nth-child(odd){background-color: #f9fafb;}</style>
<x-container topBottom>
    <x-heading.h1 center bottom>Cases History</x-heading.h1>
    <x-card class="overflow-hidden">
        <x-table>
            <x-table.thead class="p-4">
                <x-table.tr class="">
                    <x-table.th>
                    </x-table.th>

                    <x-table.th class="w-1/12">
                        ID
                    </x-table.th>

                    <x-table.th class="w-3/12">
                        Title
                    </x-table.th>

                    <x-table.th class="w-3/12">
                        Category
                    </x-table.th>

                    <x-table.th class="w-3/12">
                        Amount
                    </x-table.th>

                    <x-table.th class="w-2/12 text-right">
                        Date
                    </x-table.th>
                </x-table.tr>
            </x-table.thead>
            <x-table.tbody>
                @foreach ($cases as $case)
                    <x-table.tr>
                        <x-table.td>
                        </x-table.td>

                        <x-table.td class="w-1/12 pl-4">
                            {{ $cases->firstItem() + $loop->index }}
                        </x-table.td>

                        <x-table.td class="w-3/12" >
                            {{$case->title}}
                        </x-table.td>

                        <x-table.td class="w-3/12" >
                            {{$case->category}}
                        </x-table.td>

                        <x-table.td class="w-3/12" >
                            {{$case->amount}}
                        </x-table.td>

                        <x-table.td class="w-2/12 pr-4 text-right">
                            <x-slot name="first">
                                {{$case->start_date}}
                            </x-slot>
                            <x-slot name="second">
                                @if ($case->end_date)
                                    {{$case->end_date}}   
                                @else
                                    Continue
                                @endif
                            </x-slot>
                        </x-table.td>
                    </x-table.tr>
                @endforeach
            </x-table.tbody>
        </x-table>
        <div class="pb-3 px-3">
            {{ $cases->links() }}
        </div>
    </x-card>
</x-container>
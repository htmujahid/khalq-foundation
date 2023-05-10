<x-app-layout>
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mt-6">
        <div>  
            <a href="">
                <button id="" class="button text-center border py-2 px-4 rounded-md shadow color-2">Dashboard</button>
            </a>
        </div>
    </div>  
    <div class="flex my-6 items-center w-full space-y-4 md:space-x-4 md:space-y-0 flex-col md:flex-row">
        <div class="w-full md:w-6/12 rounded-lg">
            <div class="shadow-lg w-full bg-white relative overflow-hidden rounded-lg">
                <a href="#" class="w-full h-full block">
                    <div class="flex items-center justify-between px-4 py-6 space-x-4">
                        <div class="flex items-center">
                            <span class="rounded-full relative p-5 bg-yellow-100">
                                <svg width="40" fill="currentColor" height="40" class="text-yellow-500 h-5 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                                    </path>
                                </svg>
                            </span>
                            <p class="text-sm text-gray-700 ml-2 font-semibold border-b border-gray-200">
                                {{$current_case->title}}
                            </p>
                        </div>
                        <div class="border-b border-gray-200 mt-6 md:mt-0 text-black font-bold text-xl">
                            ${{$current_case->case_donation->sum('amount')}}
                            <span class="text-xs text-gray-400">
                                /${{$current_case->amount}}
                            </span>
                        </div>
                    </div>
                    <div class="w-full h-3 bg-gray-100">
                        <div class="h-full text-center text-xs text-white bg-green-400" style="width: {{$current_case->case_donation->sum('amount')/$current_case->amount*100}}%">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex items-center w-full md:w-1/2 space-x-4 rounded-lg">
            <div class="w-1/2">
                <div class="shadow-lg px-4 py-6 w-full bg-white relative rounded-lg">
                    <p class="text-2xl text-black font-bold">
                        {{$current_case->case_donation->count()}}
                    </p>
                    <p class="text-gray-400 text-sm">
                        Total Donations
                    </p>
                </div>
            </div>

            <div class="w-1/2 rounded-lg">
                <div class="shadow-lg px-4 py-6 w-full bg-white relative rounded-lg">
                    <p class="text-2xl text-black  font-bold">
                        {{ ceil((strtotime(date('Y-m-d H:i:s', time())) - strtotime($current_case->created_at)) / 86400)}}
                    </p>
                    <p class="text-gray-400 text-sm">
                        Days
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="flex items-start justify-between">
        <div class="flex flex-col w-full md:space-y-4">
            <div class="overflow-auto pb-6 px-4 md:px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-4">
                    <div class="w-full rounded-lg">
                        <div class="shadow-lg px-4 py-6 w-full bg-white relative rounded-lg">
                            <p class="text-sm w-max text-gray-700 font-semibold border-b border-gray-200">
                                Donations
                            </p>
                            <div class="flex items-end space-x-2 my-6">
                                <p class="text-5xl text-black font-bold">
                                    {{($case_donation->sum('amount') + $project_donation->sum('amount'))/1000}}K
                                </p>
                                <span class="text-green-500 text-xl font-bold flex items-center">
                                    <svg width="20" fill="currentColor" height="20" class="h-3" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                        </path>
                                    </svg>
                                    {{($case_donation->count() + $project_donation->count())}}
                                </span>
                            </div>
                            <div class="">
                                <div class="flex items-center pb-2 mb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        Donors
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$donor->count()}}
                                        {{-- <span class="hidden" class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            20%
                                        </span> --}}
                                    </div>
                                </div>
                                <div class="flex items-center mb-2 pb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        Case Donations
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$case_donation->sum('amount')}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            2%
                                        </span> --}}
                                    </div>
                                </div>
                                <div class="flex items-center text-sm space-x-12 md:space-x-24 justify-between">
                                    <p>
                                        Project Donations
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$project_donation->sum('amount')}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-red-500 rotate-180 transform" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            12%
                                        </span>--}}
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full rouned-lg">
                        <div class="shadow-lg px-4 py-6 w-full bg-white relative rounded-lg">
                            <p class="text-sm w-max text-gray-700 font-semibold border-b border-gray-200">
                                Cases
                            </p>
                            <div class="flex items-end space-x-2 my-6">
                                <p class="text-5xl text-black font-bold">
                                    {{$cases->count()}}
                                </p>
                                <span class="text-green-500 text-xl font-bold flex items-center">
                                    <svg width="20" fill="currentColor" height="20" class="h-3" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                        </path>
                                    </svg>
                                    100%
                                </span>
                            </div>
                            <div class="">
                                <div class="flex items-center pb-2 mb-2 text-sm sm:space-x-12  justify-between border-b border-gray-200">
                                    <p>
                                        Fee
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$cases->where('category','Education')->count()}}
                                        <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            100%
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2 pb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        Medical
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$cases->where('category','Health')->count()}}
                                        <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            100%
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center text-sm space-x-12 md:space-x-24 justify-between">
                                    <p>
                                        Others
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$cases->count() - $cases->where('category','Education')->count() - $cases->where('category','Health')->count() }}
                                        <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            100%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full rounded-lg">
                        <div class="shadow-lg px-4 py-6 w-full bg-white relative rounded-lg">
                            <p class="text-sm w-max text-gray-700 font-semibold border-b border-gray-200">
                                Projects
                            </p>
                            <div class="flex items-end space-x-2 my-6">
                                <p class="text-5xl text-black font-bold">
                                    {{$project->count()}}
                                </p>
                                <span class="text-green-500 text-xl font-bold flex items-center">
                                    <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                        </path>
                                    </svg>
                                    100%
                                </span>
                            </div>
                            <div class="">
                                <div class="flex items-center pb-2 mb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        Ration Drive
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$project->where('title','Ration Drive')->count()}}
                                        <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            100%
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2 pb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        Clothes Drive
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$project->where('title','Clothes Drive')->count()}}
                                        <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            100%
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center text-sm space-x-12 md:space-x-24 justify-between">
                                    <p>
                                        Eid/Ramzan Drive
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$project->where('title','Eid Drive')->count() + $project->where('title','Ramzan Drive')->count()}}
                                        <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            100%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full rounded-lg">
                        <div class="shadow-lg px-4 py-6 w-full bg-white relative rounded-lg">
                            <p class="text-sm w-max text-gray-700  font-semibold border-b border-gray-200">
                                Team Members
                            </p>
                            <div class="flex items-end space-x-2 my-6">
                                <p class="text-5xl text-black font-bold">
                                    {{$teammember->count()}}
                                </p>
                                {{-- <span class="text-red-500 text-xl font-bold flex items-center">
                                    <svg width="20" fill="currentColor" height="20" class="h-3 transform rotate-180" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                        </path>
                                    </svg>
                                    14%
                                </span> --}}
                            </div>
                            <div class="">
                                <div class="flex items-center pb-2 mb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        General Team Members
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$teammember->where('type', 'gtm')->count()}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-red-500 rotate-180 transform" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            12%
                                        </span> --}}
                                    </div>
                                </div>
                                <div class="flex items-center mb-2 pb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        Area Managers
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$teammember->where('type', 'am')->count()}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            19%
                                        </span> --}}
                                    </div>
                                </div>
                                <div class="flex items-center text-sm space-x-12 md:space-x-24 justify-between">
                                    <p>
                                        Campus Ambassadors
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$teammember->where('type', 'ca')->count()}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-red-500 rotate-180 transform" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            4%
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full rounded-lg">
                        <div class="shadow-lg px-4 py-6 w-full bg-white relative rounded-lg">
                            <p class="text-sm w-max text-gray-700 font-semibold border-b border-gray-200">
                                Joining Members
                            </p>
                            <div class="flex items-end space-x-2 my-6">
                                <p class="text-5xl text-black font-bold">
                                    {{$joiningmember->count()}}
                                </p>
                                {{-- <span class="text-red-500 text-xl font-bold flex items-center">
                                    <svg width="20" fill="currentColor" height="20" class="h-3 transform rotate-180" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                        </path>
                                    </svg>
                                    14%
                                </span> --}}
                            </div>
                            <div class="">
                                <div class="flex items-center pb-2 mb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        General Team Members
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$joiningmember->where('type', 'gtm')->count()}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-red-500 rotate-180 transform" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            12%
                                        </span> --}}
                                    </div>
                                </div>
                                <div class="flex items-center mb-2 pb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        Area Managers
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$joiningmember->where('type', 'am')->count()}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            19%
                                        </span> --}}
                                    </div>
                                </div>
                                <div class="flex items-center text-sm space-x-12 md:space-x-24 justify-between">
                                    <p>
                                        Campus Ambassadors
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$joiningmember->where('type', 'ca')->count()}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-red-500 rotate-180 transform" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            4%
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full rounded-lg">
                        <div class="shadow-lg px-4 py-6 w-full bg-white relative rounded-lg">
                            <p class="text-sm w-max font-semibold border-b border-gray-200">
                                Growth
                            </p>
                            <div class="flex items-end space-x-2 my-6">
                                <p class="text-5xl text-green-500 text-black font-bold">
                                    +ve
                                </p>
                                {{-- <span class="text-green-500 text-xl font-bold flex items-center">
                                    <svg width="20" fill="currentColor" height="20" class="h-3" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                        </path>
                                    </svg>
                                    34%
                                </span> --}}
                            </div>
                            <div class="">
                                <div class="flex items-center pb-2 mb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        Reviews
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$review->count()}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-red-500 rotate-180 transform" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            22%
                                        </span> --}}
                                    </div>
                                </div>
                                <div class="flex items-center mb-2 pb-2 text-sm space-x-12 md:space-x-24 justify-between border-b border-gray-200">
                                    <p>
                                        Contact
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$contact->count()}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            9%
                                        </span> --}}
                                    </div>
                                </div>
                                <div class="flex items-center text-sm space-x-12 md:space-x-24 justify-between">
                                    <p>
                                        Newsletter
                                    </p>
                                    <div class="flex items-end text-xs">
                                        {{$newsletter->count()}}
                                        {{-- <span class="flex items-center">
                                            <svg width="20" fill="currentColor" height="20" class="h-3 text-green-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z">
                                                </path>
                                            </svg>
                                            41%
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

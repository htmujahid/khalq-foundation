@extends('layouts.layout')
@section('content')
    <div class="container mx-auto my-14 color-1">
        <p class="text-2xl color-3"><span class="w-6 inline-block border-t-2 border-black border-solid" ></span> Projects</p>
        <p class="text-6xl font-1 color-3 my-6">Ongoing Projects</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 xl:gap-6">

                        <div class="border border-black rounded-3xl">
                            <a href="/cases">
                                <div class="w-fit"><img alt="" src="./assets/img/case1.png" class="rounded-t-3xl"></div>
                                <div class="color-3 rounded-b-3xl px-6 pt-6 h-40">
                                    <p class="text-base font-bold text-black">Cases</p>
                                    <div class="w-full pb-3 pt-1 flex h-24 overflow-hidden">
                                        Cases is main project of our society which purpose is to serve the needy people.
                                    </div>
                                </div>
                            </a>
                        </div>
                        @foreach ($c_project_description as $item)                        
                            @component('components.projectscard')
                            @slot('image')
                            ./assets/img/case1.png
                            @endslot
                            @slot('title')
                            {{$item->title}}
                            @endslot
                            @slot('description')
                            this is test description for this purpose only Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, architecto.
                            @endslot
                            @endcomponent
                        @endforeach
                    

        </div>
        <p class="text-6xl font-1 color-3 my-6">Upcoming Projects</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 xl:gap-6">
            @foreach ($u_project_description as $item)                        
                @component('components.projectscard')
                @slot('image')
                ./assets/img/case1.png
                @endslot
                @slot('title')
                {{$item->title}}
                @endslot
                @slot('description')
                this is test description for this purpose only Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, architecto.
                @endslot
                @endcomponent
            @endforeach
                    

        </div>
        <p class="text-6xl font-1 color-3 my-6">Previous Projects</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 xl:gap-6">

            @foreach ($f_project_description as $item)                        
                @component('components.projectscard')
                @slot('image')
                ./assets/img/case1.png
                @endslot
                @slot('title')
                {{$item->title}}
                @endslot
                @slot('description')
                this is test description for this purpose only Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, architecto.
                @endslot
                @endcomponent
            @endforeach
        

        </div>
    </div>
@endsection
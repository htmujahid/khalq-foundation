<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Khalq Foundation Pakistan') }}</title>


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="h-screen overflow-hidden bg-gray-100">
        <div class="h-screen ">
            <button id="toggler" class="fixed top-5 left-5" style="z-index: 999">
                <div class="border border-white rounded-md px-1" alt="aside-toggler">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>                    
                </div>
            </button>
            <div class="z-999 sticky top-0">
                @component('layouts.navigation')   
                @endcomponent
            </div>
            <div class="" style="">
                <div class="fixed top-15 left-0 scroll color-2 h-screen" style="z-index: 1; overflow-y: scroll; max-height: calc(100% - 64px)">
                    @component('layouts.sidebar', compact('status', 'count'))
                    @endcomponent
                </div>
                
                <main id="content" class="absolute right-0 left-0 top-20 bottom-5 py-12 pr-4 overflow-y-scroll scroll z-0" style="margin-left: 264px; max-height: calcu(100% - 164px)">
                    <div class="pl-4">
                        <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                            <div class="bg-white border-b border-gray-200">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
        </div>
        <script>
            var span = document.querySelectorAll('span')
            var toggler = document.getElementById('toggler')
            var sidebar = document.getElementById('sidebar')
            var content = document.getElementById('content')
            window.addEventListener('load',()=>{
                if(screen.availWidth <= 768)
                    hideSidebar()
                else
                    displaySidebar()
            })
            window.addEventListener('resize',()=>{
                if(screen.availWidth <= 768)
                    hideSidebar()
                else
                    displaySidebar()
            })
            toggler.addEventListener('click',()=>{
                if(!span[0].style.display){
                    if(screen.availWidth <= 768)
                        displaySidebar()
                    else
                        hideSidebar()
                }
                else if(span[0].style.display == 'none'){
                    displaySidebar()
                }
                else if(span[0].style.display == 'inline-flex'){
                    hideSidebar()
                }
                })
            function displaySidebar(){
                span.forEach(element => {
                    element.style.setProperty("display", "inline-flex", "important");
                });
                sidebar.style.width = '256px'
                content.style.marginLeft = '264px'
            }
            function hideSidebar(){
                span.forEach(element => {
                        element.style.setProperty("display", "none", "important");
                });
                sidebar.style.width = 'min-content'
                content.style.marginLeft = '70px'
            }
        </script>
    </body>
</html>

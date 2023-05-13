<nav class="bg-white w-full z-20 top-0 left-0" x-data="{ open: false }" @keydown.window.escape="open = false">
    <div class="container flex flex-wrap items-center justify-between mx-auto py-5 relative">
        <a href="/" class="flex items-center">
            <x-application.logo />                   
        </a>
        <div class="items-center justify-between hidden relative md:static w-full md:flex md:w-auto md:order-1" id="navbar-sticky" x-cloak>
            <ul class="flex flex-col p-4 md:static text-gray-dark md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white" >
                <li>
                    <a href="/" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:opacity-80 md:p-0">Home</a>
                </li>
                <li>
                    <a href="/projects" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:opacity-80 md:p-0">Projects</a>
                </li>
                <li>
                    <a href="/cases" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:opacity-80 md:p-0">Cases</a>
                </li>
                <li>
                    <a href="/about" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:opacity-80 md:p-0">About Us</a>
                </li>
                <li>
                    <a href="/contact" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:opacity-80 md:p-0">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="flex md:order-2">
            <a href="/donate">
                <x-button.primary>Donate Now</x-button.primary>
            </a>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center px-3 py-2 border-2 text-gray-dark rounded-lg md:hidden hover:bg-gray-light focus:outline-none focus:ring-2 focus:ring-gray-light" aria-controls="navbar-sticky" :aria-expanded="open.toString()" @click="open = !open">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>
    <div class="items-center justify-between hidden absolute md:static w-full md:w-auto md:order-1 px-6 md:hidden" id="navbar-sticky" :class="{ 'block': open, 'hidden': !open }" x-cloak>
        <ul class="flex flex-col p-4 text-gray-dark font-medium border border-gray-100 rounded-lg bg-gray-50 border-2" >
            <li>
                <a href="/" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:opacity-80 md:p-0">Home</a>
            </li>
            <li>
                <a href="/projects" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:opacity-80 md:p-0">Projects</a>
            </li>
            <li>
                <a href="/cases" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:opacity-80 md:p-0">Cases</a>
            </li>
            <li>
                <a href="/about" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:opacity-80 md:p-0">About Us</a>
            </li>
            <li>
                <a href="/contact" class="block py-2 pl-3 pr-4 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:opacity-80 md:p-0">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>

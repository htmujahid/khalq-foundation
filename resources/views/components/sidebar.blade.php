<style>
</style>
<aside id="sidebar" class="w-min md:w-64" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 color-2 h-screen scroll">
        <ul class="space-y-2">
            <li>
                <button id="toggler" class="py-2 px-0.25">
                    <div class="border border-white rounded-md px-1" alt="aside-toggler">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>                    
                    </div>
                </button>
            </li>
            <li>
                <a href="/admin" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3  hidden md:inline-flex">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap hidden md:inline-flex">Cases</span>
                    <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300 hidden md:inline-flex">Continue</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap hidden md:inline-flex">Projects</span>
                    <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200 hidden md:inline-flex">3</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>                    
                    <span class="flex-1 ml-3 whitespace-nowrap hidden md:inline-flex">Donors</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap hidden md:inline-flex">Donations</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap hidden md:inline-flex">Team Members</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    <span class="ml-3 hidden md:inline-flex">Reviews</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                    <span class="ml-3 hidden md:inline-flex">Alert</span>
                </a>
            </li>
            <li>
                <a href="/admin/joiningmembers" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap hidden md:inline-flex">Joining Members</span>
                </a>
            </li>
            <li>
                <a href="/admin/contacts" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                    <span class="ml-4 hidden md:inline-flex">Contacts</span>
                </a>
            </li>
            <li>
                <a href="/admin/newsletter" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M9 8.5h2.793l.853.854A.5.5 0 0 0 13 9.5h1a.5.5 0 0 0 .5-.5V8a.5.5 0 0 0-.5-.5H9v1z"/>
                        <path d="M12 3H4a4 4 0 0 0-4 4v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7a4 4 0 0 0-4-4zM8 7a3.99 3.99 0 0 0-1.354-3H12a3 3 0 0 1 3 3v6H8V7zm-3.415.157C4.42 7.087 4.218 7 4 7c-.218 0-.42.086-.585.157C3.164 7.264 3 7.334 3 7a1 1 0 0 1 2 0c0 .334-.164.264-.415.157z"/>
                      </svg>
                    <span class="ml-3 hidden md:inline-flex">Newsletter</span>
                </a>
            </li>
        </ul>
        {{-- <ul class="pt-4 mt-4 space-y-2 border-t border-white">
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path></svg>
                    <span class="ml-3 hidden md:inline-flex">Website</span>
            </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-gray-100 hover:text-black">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>                    <span class="flex-1 ml-3 whitespace-nowrap hidden md:inline-flex">Logout</span>
                </a>
            </li>
        </ul> --}}
    </div>
</aside>
<script>
    var span = document.querySelectorAll('span')
    var toggler = document.getElementById('toggler')
    var sidebar = document.getElementById('sidebar')
    window.addEventListener('resize',()=>{
        if(screen.availWidth <= 768)
            hideSidebar()
        else
            displaySidebar()
    })
    toggler.addEventListener('click',()=>{
        console.log(span[0].style.display)
        console.log(screen.availWidth)
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
}
function hideSidebar(){
    span.forEach(element => {
            element.style.setProperty("display", "none", "important");
    });
    sidebar.style.width = 'min-content'
}
</script>
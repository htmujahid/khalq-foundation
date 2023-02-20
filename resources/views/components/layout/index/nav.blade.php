<nav class="bg-primary text-white">
    <div class="md:container mx-auto relative">
        <div class="pl-4 
            md:flex md:items-center md:justify-between md:gap-8 md:h-16 md:pl-0">
            <div class="flex items-center justify-between h-16 gap-8 
                md:h-full md:w-full md:w-auto">
                <div id="logo" class="">
                    <a href="/" >
                        <x-application.logo />                   
                    </a>
                </div>
                <div id="nav-toggler" style="cursor:pointer" class="pr-4 md:hidden">
                    <img src="./assets/icons/menu-icon.svg" alt="" style="border: 1px solid white" class="rounded-md">
                </div>
            </div>
            <div id="backdrop" class="hidden backdrop-blur-sm absolute top-16 left-0 h-screen w-screen"></div>
            <div id="nav" class="absolute z-50 top-16 left-0 h-[calc(100vh-64px)] w-64 pl-4 border -translate-x-full bg-primary overflow-hidden text-lg
                md:h-auto md:w-auto md:pl-0 md:w-full md:static md:flex md:items-center md:gap-8 md:border-none md:translate-x-0"           
            data-visible="false">
                <ul class="font-medium py-2 w-full flex gap-2 flex-col 
                    md:flex-row md:gap-8 ">
                    <li class="border-b px-4 md:border-none md:px-0"><a href="/projects" class="hover:opacity-80 duration-300">Projects</a></li>
                    <li class="border-b px-4 md:border-none md:px-0"><a href="/cases" class="hover:opacity-80 duration-300">Cases</a></li>
                    <li class="border-b px-4 md:border-none md:px-0"><a href="/stories" class="hover:opacity-80 duration-300">Our Stories</a></li>
                    <li class="border-b px-4 md:border-none md:px-0"><a href="/about" class="hover:opacity-80 duration-300">About</a></li>
                    <li class="border-b px-4 md:border-none md:px-0"><a href="/contact" class="hover:opacity-80 duration-300">Contact</a></li>
                </ul>
                <div class="pt-2 h-12 w-full 
                    md:h-auto md:pt-0 md:w-auto">
                    <a href="/donate" class="bg-white text-primary px-4 py-1 inline-block w-full duration-300 border border-white 
                        md:rounded-md 
                        hover:bg-opacity-90">Donate</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<x-script>
        let toggle = document.getElementById("nav-toggler")
        let nav =document.getElementById("nav")
        let backdrop = document.getElementById("backdrop")
        window.addEventListener("resize", function(){
            if(window.innerWidth > 768){
                backdrop.style.display = "none"
                nav.style.transform = "translateX(0)"
            }else{
                nav.style.transform = "translateX(-100%)"
                toggle.children[0].src = "./assets/icons/menu-icon.svg"
            }
            nav.setAttribute("data-visible", "false")
            nav.style.transitionDuration = "0s"
        })
        toggle.addEventListener("click",()=>{
            let visible = nav.getAttribute("data-visible")
            nav.style.transitionDuration = "0.5s"
            if(visible=="false"){
                nav.style.transform = "translateX(0%)"
                nav.setAttribute("data-visible","true")
                toggle.children[0].src = "./assets/icons/menu-close.svg"
                document.body.style.overflow = "hidden"
                backdrop.style.display = "block"
            }else{
                nav.style.transform = "translateX(-100%)"
                nav.setAttribute("data-visible","false")
                toggle.children[0].src = "./assets/icons/menu-icon.svg"
                document.body.style.overflow = "auto"
                backdrop.style.display = "none"
            }
        })
</x-script>
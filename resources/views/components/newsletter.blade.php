<div class="container mx-auto flex items-center flex-col  my-14">
    <h1 class="text-6xl font-1 color-3">Join Our Newsletter</h1>
    <h3 class="text-3xl mt-4">Be the first to know our latest Compaigns! </h3>
    <div>
        <form action="/newsletter" method="POST" class="mt-14 flex flex-col md:flex-row gap-3">
        @csrf
        @method('POST')
            <input type="email" name="email" id="email" placeholder="Email Address" class="h-16 text-2xl rounded-md px-6" style="border: 1px solid black; width: 480px">
            {{-- <span class="px-3"></span> --}}
            <input type="submit" value="Subscribe" class="h-16 text-2xl font-medium rounded-lg color-2 px-10" style="background-color: var(--primary-color)">
        </form>
    </div>
</div>
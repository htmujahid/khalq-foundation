<x-form action="/newsletter" method="POST" class="mt-4 sm:mt-14 flex flex-col md:flex-row gap-3 w-full sm:w-auto">
    @csrf
    @method('POST')
    <input type="email" name="email" id="email" placeholder="Email Address" class="h-16 text-2xl rounded-md px-6 border w-full sm:w-[360px]">
    <input type="submit" value="Subscribe" class="h-16 text-2xl font-medium rounded-lg color-2 px-10 bg-primary text-white  w-full sm:w-auto">
</x-form>
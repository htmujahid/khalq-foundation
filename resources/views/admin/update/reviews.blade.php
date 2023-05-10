<x-app-layout class=""> 
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mt-6">
        <div>  
            <a href="">
                <button id="" class="button text-center border py-2 px-4 rounded-md shadow color-2">Update Review</button>
            </a>
        </div>   
    </div>
    <div class="relative overflow-x-scroll scroll shadow-md sm:rounded-lg px-6">
        {{ Form::open(array('route' => array('reviews.update', $id), 'method' => 'put')) }}
            @csrf
            <div class="grid gap-6 my-6 lg:grid-cols-2">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" id="name" name="name" value="{{$review->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>
                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                    <input type="text" id="image" name="image" value="{{$review->image}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>
            </div>
            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Message</label>
                <textarea id="message" name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500" placeholder=""> {{$review->message}}</textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="color-2 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style="background-color: var(--primary-color)">Submit</button>
            </div>
        {{ Form::close() }}
        </div>
</x-app-layout>
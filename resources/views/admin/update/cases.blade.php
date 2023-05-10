<x-app-layout class="">    
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mt-6">
        <div>  
            <a href="">
                <button id="" class="button text-center border py-2 px-4 rounded-md shadow color-2">Update Case</button>
            </a>
        </div>
    </div>
    <div class="relative overflow-x-scroll scroll shadow-md sm:rounded-lg px-6">
        {{ Form::open(array('route' => array('cases.update', $id), 'method' => 'put')) }}
            @csrf
            <div class="grid gap-6 my-6 lg:grid-cols-2">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Needy Name</label>
                    <input type="text" id="name" name="name" value="{{$case->needy_name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>
                <div>
                    <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">Needy Phone</label>
                    <input type="tel" id="contact" name="contact" value="{{$case->needy_contact}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>
            </div>
            <div class="mb-6">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Needy Address</label>
                <textarea id="address"  name="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500" placeholder="">{{$case->needy_address}}</textarea>
            </div>
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                <input type="text" id="title" name="title" value="{{$case->title}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
            </div>
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                    <input type="text" id="category" name="category" value="{{$case->category}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 " placeholder="" required="">
                </div>
                <div>
                    <label for="amount" class="block mb-2 text-sm font-medium text-gray-900">Amount</label>
                    <input type="number" id="amount" name="amount" value="{{$case->amount}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>                
                <div>
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                    <input type="text" id="status" name="status" value="{{$case->status}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>
                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                    <input type="text" id="image" name="image" value="{{$case->image}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500" placeholder=""> {{$case->description}}</textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="color-2 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mb-2" style="background-color: var(--primary-color)">Update</button>
            </div>
        {{ Form::close() }}
        
    </div>
</x-app-layout>
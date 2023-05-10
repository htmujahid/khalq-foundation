<x-app-layout class=""> 
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mt-6">
        <div>  
            <a href="">
                <button id="" class="button text-center border py-2 px-4 rounded-md shadow color-2">Update Donation</button>
            </a>
        </div>   
    </div>
    <div class="relative overflow-x-scroll scroll shadow-md sm:rounded-lg px-6">
        {{ Form::open(array('route' => array('donations.update', $id), 'method' => 'put')) }}
            @csrf
            <div class="grid gap-6 my-6 lg:grid-cols-2">
                <div>
                    <label for="case-id" class="block mb-2 text-sm font-medium text-gray-900">Case ID</label>
                    <input type="number" id="case-id" name="case-id" value="{{$donation->case_id}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>
                <div>
                    <label for="donor-id" class="block mb-2 text-sm font-medium text-gray-900">Donor ID</label>
                    <input type="number" id="donor-id" name="donor-id" value="{{$donation->donor_id}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>
                <div>
                    <label for="amount" class="block mb-2 text-sm font-medium text-gray-900">Amount</label>
                    <input type="number" id="amount" name="amount" value="{{$donation->amount}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>
                <div>
                    <label for="account" class="block mb-2 text-sm font-medium text-gray-900">Account Number</label>
                    <input type="text" id="account" name="account" value="{{$donation->account_number}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 " placeholder="" required="">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="color-2 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style="background-color: var(--primary-color)">Submit</button>
            </div>
        {{ Form::close() }}
        
    </div>
</x-app-layout>
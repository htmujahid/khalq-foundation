<x-app-layout class="">    
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mt-6">
        <div>  
            <a href="">
                <button id="" class="button text-center border py-2 px-4 rounded-md shadow color-2">Update General Team Member</button>
            </a>
        </div>
    </div>
    <div class="relative overflow-x-scroll scroll shadow-md sm:rounded-lg px-6">
        {{ Form::open(array('route' => array('gtm.update', $id), 'method' => 'put')) }}
            @csrf
            <div class="grid gap-6 my-6 lg:grid-cols-2">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" id="name" name="name" value="{{$teammember->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 acc" placeholder="" required="">
                </div>
                <div>  
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Gender</label>
        
                    <div class="flex py-2.5">
                        <div class="flex items-center mr-4">
                            <input {{$teammember->gender == 'male'? 'checked': ''}} id="male" type="radio" value="male" name="gender" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-gray-500 accent-current">
                            <label for="male" class="ml-2 text-sm font-medium text-gray-900">Male</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input {{$teammember->gender == 'female'? 'checked': ''}} id="female" type="radio" value="female" name="gender" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-gray-500 accent-current">
                            <label for="female" class="ml-2 text-sm font-medium text-gray-900">Female</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input {{$teammember->gender == 'others'? 'checked': ''}} id="others" type="radio" value="others" name="gender" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-gray-500 accent-current">
                            <label for="others" class="ml-2 text-sm font-medium text-gray-900">Others</label>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="email" name="email" value="{{$teammember->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 " placeholder="" required="">
                </div>
                <div>
                    <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
                    <input type="tel" id="contact" name="contact" value="{{$teammember->contact}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder=""  required="">
                </div>
            </div>
            <div class="mb-6">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                <textarea id="address"  name="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500" placeholder="">{{$teammember->address}}</textarea>
            </div>
            <div class="mb-6">
                <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company</label>
                <input type="text" id="company" name="company" value="{{$teammember->company}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
            </div>
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="department" class="block mb-2 text-sm font-medium text-gray-900">Department</label>
                    <input type="text" id="department" name="department" value="{{$teammember->department}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 " placeholder="" required="">
                </div>
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input type="text" id="title" name="title" value="{{$teammember->title}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
                </div>
            </div>
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="designation" class="block mb-2 text-sm font-medium text-gray-900">Designation</label>
                    <select id="designation" name="designation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" required="">
                        <option value="">Designation in KHALQ</option>
                        <option {{$teammember->team_member_gtm->designation == "Director" ? "selected": ""}} value="Director">Director</option>
                        <option {{$teammember->team_member_gtm->designation == "Deputy Director" ? "selected": ""}} value="Deputy Director">Deputy Director</option>
                        <option {{$teammember->team_member_gtm->designation == "Executive" ? "selected": ""}} value="Executive">Exective</option>
                    </select>
                </div>
                <div>
                    <label for="portfolio" class="block mb-2 text-sm font-medium text-gray-900">Portfolio</label>
                    <select id="portfolio" name="portfolio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" required="">
                        <option value="">Select first preference</option>
                        <option {{$teammember->team_member_gtm->portfolio == "Human Resource" ? "selected": ""}} value="Human Resource">Human Resources</option>
                        <option {{$teammember->team_member_gtm->portfolio == "Content Planning" ? "selected": ""}} value="Content Planning">Content Planning</option>
                        <option {{$teammember->team_member_gtm->portfolio == "Admin Events" ? "selected": ""}} value="Admin Events">Admin Events</option>
                        <option {{$teammember->team_member_gtm->portfolio == "Publications" ? "selected": ""}} value="Publications">Publications</option>
                        <option {{$teammember->team_member_gtm->portfolio == "Social Media Marketing" ? "selected": ""}} value="Social Media Marketing">Social Media Marketing</option>
                        <option {{$teammember->team_member_gtm->portfolio == "Ground Marketing" ? "selected": ""}} value="Ground Marketing">Ground Marketing</option>
                        <option {{$teammember->team_member_gtm->portfolio == "Graphics" ? "selected": ""}} value="Graphics">Graphics</option>
                        <option {{$teammember->team_member_gtm->portfolio == "Media and Coverage" ? "selected": ""}} value="Media and Coverage">Media and Coverage</option>
                        <option {{$teammember->team_member_gtm->portfolio == "External Relations" ? "selected": ""}} value="External Relations">External Relations</option>
                    </select>
                </div>
            </div>
                <div class="text-center">
                    <button type="submit" class="color-2 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style="background-color: var(--primary-color)">Submit</button>
                </div>
            </div>
        {{ Form::close() }}
     
                
        
    </div>
</x-app-layout>
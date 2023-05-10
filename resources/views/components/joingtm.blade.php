<form action="/join-us/gtm" method="POST">
    @csrf
    <div class="grid gap-6 my-6 lg:grid-cols-2">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
        </div>
        <div>  
            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Gender</label>

            <div class="flex py-2.5">
                <div class="flex items-center mr-4">
                    <input checked id="male" type="radio" value="male" name="gender" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-gray-500 accent-current">
                    <label for="male" class="ml-2 text-sm font-medium text-gray-900">Male</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="female" type="radio" value="female" name="gender" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-gray-500 accent-current">
                    <label for="female" class="ml-2 text-sm font-medium text-gray-900">Female</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="others" type="radio" value="others" name="gender" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-gray-500 accent-current">
                    <label for="others" class="ml-2 text-sm font-medium text-gray-900">Others</label>
                </div>
            </div>
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 " placeholder="" required="">
        </div>
        <div>
            <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">Phone number</label>
            <input type="tel" id="contact" name="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder=""  required="">
        </div>
    </div>
    <div class="mb-6">
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
        <textarea id="address"  name="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500" placeholder=""></textarea>
    </div>
    <div class="mb-6">
        <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company</label>
        <input type="text" id="company" name="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
    </div>
    <div class="grid gap-6 mb-6 lg:grid-cols-2">
        <div>
            <label for="department" class="block mb-2 text-sm font-medium text-gray-900">Department</label>
            <input type="text" id="department" name="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 " placeholder="" required="">
        </div>
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
            <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="" required="">
        </div>
    </div>
    <div class="grid gap-6 mb-6 lg:grid-cols-2">
        <div>
            <label for="designation" class="block mb-2 text-sm font-medium text-gray-900">Designation</label>
            <select id="designation" name="designation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" required="">
                <option value="">Designation in KHALQ (Interested)</option>
                <option value="Director">Director</option>
                <option value="Deputy Director">Deputy Director</option>
                <option value="Executive">Exective</option>
            </select>
        </div>
        <div>
            
        </div>
        <div>
            <label for="portfolio1" class="block mb-2 text-sm font-medium text-gray-900">Portfolio 1</label>
            <select id="portfolio1" name="portfolio1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" required="">
                <option value="" selected>Select first preference</option>
                <option value="Human Resource">Human Resources</option>
                <option value="Content Planning">Content Planning</option>
                <option value="Admin Events">Admin Events</option>
                <option value="Publications">Publications</option>
                <option value="Social Media Marketing">Social Media Marketing</option>
                <option value="Ground Marketing">Ground Marketing</option>
                <option value="Graphics">Graphics</option>
                <option value="Media and Coverage">Media and Coverage</option>
                <option value="External Relations">External Relations</option>
            </select>
        </div>
        <div>
            <label for="portfolio2" class="block mb-2 text-sm font-medium text-gray-900">Portfolio 2</label>
            <select id="portfolio2" name="portfolio2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" required="">
                <option value="" selected>Select first preference</option>
                <option value="Human Resource">Human Resources</option>
                <option value="Content Planning">Content Planning</option>
                <option value="Admin Events">Admin Events</option>
                <option value="Publications">Publications</option>
                <option value="Social Media Marketing">Social Media Marketing</option>
                <option value="Ground Marketing">Ground Marketing</option>
                <option value="Graphics">Graphics</option>
                <option value="Media and Coverage">Media and Coverage</option>
                <option value="External Relations">External Relations</option>
            </select>
        </div>
    </div>
    <div class="mb-6">
        <label for="motive" class="block mb-2 text-sm font-medium text-gray-900">Your Motive</label>
        <textarea id="motive" name="motive" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500" placeholder=""></textarea>
    </div>
    <div class="text-center">
        <button type="submit" class="color-2 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style="background-color: var(--primary-color)">Submit</button>
    </div>
</form>            

@extends('layouts.layout')
@section('content')
    <div class="container mx-auto my-14 color-1">
        <p class="text-2xl color-3"><span class="w-6 inline-block border-t-2 border-black border-solid" ></span> Contact Us</p>
        <p class="text-6xl font-1 color-3 my-6">We're Here to Answer Your Questions</p>
        <form action="/contact-us" method="POST">
        @csrf
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required="">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required="">
                </div>
                <div>
                    <label for="query" class="block mb-2 text-sm font-medium text-gray-900">Query Type</label>
                    <input type="text" id="query" name="query" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required="">
                </div>
            </div>
            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Message</label>
                <textarea id="message" name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder=""></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="color-2 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style="background-color: var(--primary-color)">Submit</button>    
            </div>
        </form>
    </div>
@endsection
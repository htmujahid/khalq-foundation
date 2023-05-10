@extends('layouts.layout')
@section('content')
    <div class="container mx-auto my-14">
        <p class="text-2xl color-3"><span class="w-6 inline-block border-t-2 border-black border-solid" ></span> Donate Now</p>
        <p class="text-6xl font-1 color-3 my-6">Every Penny Counts</p>
        <div class="flex flex-col md:flex-row justify-between my-6">
            <div>
                <div class="shadow-lg p-6 rounded-lg ">
                    <h3 class="text-3xl font-bold py-4">Bank Details</h3>
                    <ul>
                        <li><span class="font-medium">Account Title: </span>Faran Ali Khan</li>
                        <li><span class="font-medium">Account Number: </span>0266 0048008840011</li>
                        {{-- <li><span class="font-medium">Branch Code: </span></li> --}}
                        <li><span class="font-medium">Bank: </span>Bank Al-Habib</li>
                        {{-- <li><span class="font-medium">Branch: </span></li> --}}
                    </ul>
                </div>
            </div>
            <div>
                <div class="shadow-lg p-6 rounded-lg ">
                    <h3 class="text-3xl font-bold py-4">Easypaisa Details</h3>
                    <ul>
                        <li><span class="font-medium">Account Title: </span>Faran Ali Khan</li>
                        <li><span class="font-medium">Account Number: </span>0313 4981841</li>
                        <li><span class="font-medium">Bank: </span>Telenor Microfinance Bank</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="shadow-lg p-6 rounded-lg ">
                    <h3 class="text-3xl font-bold py-4">Jazzcash Details</h3>
                    <ul>
                        <li><span class="font-medium">Account Title: </span>Faran Ali Khan</li>
                        <li><span class="font-medium">Account Number: </span>0302 4828859</li>
                        <li><span class="font-medium">Bank: </span>Moblink Microfinance Bank</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="">
            <div>
                <div class="shadow-lg p-6 rounded-lg ">
                    <h3 class="text-3xl text-center font-bold py-6">Contact Details</h3>
                    <div class="flex flex-col md:flex-row justify-between gap-6">
                        <ul>
                            <li><span class="font-medium">Name: </span>Syed Sadan Mehmood</li>
                            <li><span class="font-medium">Designation: </span>President</li>
                            <li><span class="font-medium">Contact: </span>+923154381490</li>
                        </ul>
                        <ul>
                            <li><span class="font-medium">Name: </span>Syed Shahzaib Shah</li>
                            <li><span class="font-medium">Designation: </span>Vice President</li>
                            <li><span class="font-medium">Contact: </span>+923028352284</li>
                        </ul>
                        <ul>
                            <li><span class="font-medium">Name: </span>Ali Imran</li>
                            <li><span class="font-medium">Designation: </span>Vice President</li>
                            <li><span class="font-medium">Contact: </span>+923084082339</li>
                        </ul>
                    </div>
                </div>
            </div>
       </div>
    </div>
@endsection
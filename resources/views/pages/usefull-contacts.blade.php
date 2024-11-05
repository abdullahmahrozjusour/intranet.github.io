@extends('layouts.master_layout')

@section('content')
    <div class="bg-bubble bg-primary">
        <div class="max-w-[1100px] mx-auto px-4">
            <div class="header-title lg:h-40 h-20 flex justify-center items-center">
                <h2 class="font-bold lg:text-5xl text-3xl text-white">Useful Contacts</h2>
            </div>
            <div class="flex md:flex-nowrap flex-wrap gap-6 py-8 ">
                <div class="contact-form bg-white lg:py-6 lg:px-10 p-4 rounded-xl shadow-md w-full max-w-[600px] shrink-0 grow-0">
                    
                    <div class="grid grid-cols-2 md:gap-4 gap-2">
                        <div class="col-span-2">
                            <h3 class="text-2xl font-medium">Contact Us</h3>
                            <!-- <p class="text-[#7D7D7D]">Lorem ipsum dollar ismit di larea</p> -->
                        </div>
                        <div class="col-span-2">
                            <label for=""><input type="radio" checked> General Inuiries</label>
                        </div>
                        <div class="col-span-2 for-group">
                            
                            <label for="" class="text-sm mb-1">Full Name</label>
                            <input type="text" placeholder="Insert Name"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                        </div>
                        <div class=" for-group">
                            <label for="" class="text-sm mb-1">Email</label>
                            <input type="text" placeholder="Insert Email"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                        </div>
                        <div class=" for-group">
                            <label for="" class="text-sm mb-1">Phone</label>
                            <input type="text" placeholder="Insert Phone"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                        </div>
                        <div class=" for-group">
                            <label for="" class="text-sm mb-1">Country</label>
                            <input type="text" placeholder="Insert Country"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                        </div>
                        <div class=" for-group">
                            <label for="" class="text-sm mb-1">Subject</label>
                            <input type="text" placeholder="Insert Subject"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                        </div>
                        <div class="col-span-2 for-group">
                            <label for="" class="text-sm mb-1">Message</label>
                            <textarea name="" id="" placeholder="Type Message" cols="4" rows="4"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg px-2 text-[#7D7D7D]"></textarea>
                        </div>
                        <div>
                            <button class="btn-blue whitespace-nowrap">Submit Request</button>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-medium text-white mb-4">Useful Contacts</h3>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-1">
                            <h4 class="font-bold text-base text-secondary">Operation</h4>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-location-arrow"></i><span>14th floor , Doha Tower</span>
                            </div>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-phone"></i><span> <a href="tel:44011044">44011044</a></span>
                            </div>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-envelope"></i><span><a href="mailto:d.aljandaly@jusour.qa">d.aljandaly@jusour.qa</a></span>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-1">
                            <h4 class="font-bold text-base text-secondary">Public Relations</h4>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-location-arrow"></i><span>14th floor , Doha Tower</span>
                            </div>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-phone"></i><span> <a href="tel:44011023">44011023</a></span>
                            </div>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-envelope"></i><span><a href="mailto:Communication@jusour.qa">Communication@jusour.qa</a></span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h4 class="font-bold text-base text-secondary">Corporate Support</h4>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-location-arrow"></i><span>14th floor , Doha Tower</span>
                            </div>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-phone"></i><span> <a href="tel:44011031">44011031</a></span>
                            </div>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-envelope"></i><span><a href="mailto:css@jusour.qa">css@jusour.qa</a></span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h4 class="font-bold text-base text-secondary">Finance</h4>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-location-arrow"></i><span>14th floor , Doha Tower</span>
                            </div>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-phone"></i><span> <a href="tel:44011037">44011037</a></span>
                            </div>
                            <div class="flex items-center gap-2 text-white font-medium text-sm">
                                <i class="fa-solid fa-envelope"></i><span><a href="mailto:finance@jusour.qa">finance@jusour.qa</a></span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
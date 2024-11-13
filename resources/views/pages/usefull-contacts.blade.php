@extends('layouts.master_layout')

@section('styleSheet')
<link href="{{ asset('theme/css/select2.min.css') }}" rel="stylesheet" type="text/css">
<style>
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        background: white !important;
        border: 1px solid rgb(125, 125, 125, 1) !important;
        border-radius: 7px;
        font-size: 12px !important;
        color: rgb(125, 125, 125, 1) !important;
    }

    .for-group .text-secondary {
        font-size: 12px !important;
    }

    .alert-success {
        color: #d1e7dd;
        background-color: #198754;
        border-color: #198754;
    }

    .alert {
        position: relative;
        padding: 1rem 1rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;
    }

    .d-flex {
        display: flex;
    }

    .align-items-center {
        align-items: center;
    }

    .mx-10 {
        margin: 0 !important;
        width: 100%;
    }
</style>
@endsection

@section('content')
<div class="bg-bubble bg-primary">
    <div class="max-w-[1100px] mx-auto px-4">
        <div class="header-title lg:h-40 h-20 flex justify-center items-center">
            <h2 class="font-bold lg:text-5xl text-3xl text-white">Useful Contacts</h2>
        </div>
        <div class="flex md:flex-nowrap flex-wrap gap-6 py-8 ">
            <div
                class="contact-form bg-white lg:py-6 lg:px-10 p-4 rounded-xl shadow-md w-full max-w-[600px] shrink-0 grow-0">

                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-2 md:gap-4 gap-2">
                        <div class="col-span-2">
                            <h3 class="text-2xl font-medium">Contact Us</h3>
                            <!-- <p class="text-[#7D7D7D]">Lorem ipsum dollar ismit di larea</p> -->
                        </div>
                        <div class="col-span-2">
                            @include('components.success')
                        </div>
                        <div class="col-span-2">
                            <label for=""><input type="radio" checked> General Inuiries</label>
                        </div>
                        <div class="col-span-2 for-group">
                            <label for="" class="text-sm mb-1">Full Name <span class="text-secondary">*</span></label>
                            <input type="text" placeholder="Insert Name" name="name"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                            @error('name')
                            <span class="text-secondary">{{ $errors->first('name') }}</span>
                            @enderror
                        </div>
                        <div class=" for-group">
                            <label for="" class="text-sm mb-1">Email <span class="text-secondary">*</span></label>
                            <input type="email" placeholder="Insert Email" name="email"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                            @error('email')
                            <span class="text-secondary">{{ $errors->first('email') }}</span>
                            @enderror
                        </div>
                        <div class=" for-group">
                            <label for="" class="text-sm mb-1">Phone <span class="text-secondary">*</span></label>
                            <input type="text" placeholder="Insert Phone" name="phone"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                            @error('phone')
                            <span class="text-secondary">{{ $errors->first('phone') }}</span>
                            @enderror
                        </div>
                        <div class=" for-group">
                            <label for="" class="text-sm mb-1">Country</label>
                            <select name="country" id="country" class="select2">
                                <option value="">Select a country</option>
                                @foreach ($data['countries'] as $item)
                                <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=" for-group">
                            <label for="" class="text-sm mb-1">Subject</label>
                            <input type="text" placeholder="Insert Subject" name="subject"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                            @error('subject')
                            <span class="text-secondary">{{ $errors->first('subject') }}</span>
                            @enderror
                        </div>
                        <div class="col-span-2 for-group">
                            <label for="" class="text-sm mb-1">Message <span class="text-secondary">*</span></label>
                            <textarea name="message" id="" placeholder="Type Message" cols="4" rows="4"
                                class="w-full border border-[#7D7D7D] text-sm rounded-lg px-2 text-[#7D7D7D]"></textarea>
                            @error('message')
                            <span class="text-secondary">{{ $errors->first('message') }}</span>
                            @enderror
                        </div>
                        <div>
                            <button class="btn-blue whitespace-nowrap" type="submit">Submit Request</button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <h3 class="text-2xl font-medium text-white mb-4">Useful Contacts</h3>
                <div class="grid sm:grid-cols-2 gap-6">
                    @foreach ($data['useful'] as $item)
                    <div class="flex flex-col gap-1">
                        <h4 class="font-bold text-base text-secondary">{{ $item['nameEn'] }}</h4>
                        <div class="flex items-center gap-2 text-white font-medium text-sm">
                            <i class="fa-solid fa-location-arrow"></i><span>{{ $item['addressEn'] }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-white font-medium text-sm">
                            <i class="fa-solid fa-phone"></i><span> <a href="tel:{{ $item['phone'] }}">{{ $item['phone']
                                    }}</a></span>
                        </div>
                        <div class="flex items-center gap-2 text-white font-medium text-sm">
                            <i class="fa-solid fa-envelope"></i><span><a href="mailto:{{ $item['email'] }}">{{
                                    $item['email'] }}</a></span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javaScript')
<script>
    setTimeout(() => {
            $(".alert").remove();
        }, 3000);
</script>
@endsection
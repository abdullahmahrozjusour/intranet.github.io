@extends('layouts.master_layout')

@section('content')
    <div class="bg-bubble bg-primary">
        <div class="container-in">
            <div class="toolbar mb-6">
                <h3 class="text-2xl text-white font-bold">Use-Full Forms And Downloads</h3>
                <div class="flex gap-2">
                    <select name="" id="" class="w-full max-w-[350px] border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                        <option value="">Filter by category</option>
                    </select>
                    <div class="relative w-full max-w-[350px] relative">
                        <input type="text" class="w-full border border-[#7D7D7D] text-sm rounded-lg h-10 px-2 text-[#7D7D7D]">
                        <i class="fa-solid fa-magnifying-glass absolute top-3 right-4 text-[#7D7D7D]"></i>
                    </div>
                </div>
            </div>
            <div class="grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-3  xs:grid-cols-2 grid-cols-1 gap-3 pb-6" style="min-height: 64vh !important;">
                @foreach ($data as $key => $item)
                    <div class="p-4 border border-black/50 bg-white/75 text-center h-[270px] flex items-center justify-center relative">
                        <i class="fa-regular fa-file text-7xl"></i>
                        <div class="bg-green-800 px-4 py-2 absolute bottom-0 left-0 right-0 flex justify-between gap-4 text-left text-white">
                            <div>
                                <div>{{ $item->nameEn }}</div>
                                <div class="text-xs font-light">{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y') }} <br> Uploaded by {{ $item->usernameEn }}</div>
                            </div>
                            <div class="flex flex-col items-end justify-between">
                                <i class="fa-solid fa-ellipsis-vertical text-xl"></i>
                                @if(file_exists(public_path('assets/images/'.$item->extension.'.png')))
                                    <a href="{{ $item->url }}" title="{{ $item->nameEn }}" target="_blank">
                                        <img width="20px" height="20px" src="{{ asset('assets/images/'.$item->extension.'.png') }}" alt="{{ $item->extension }}">
                                    </a>
                                @else
                                    <a href="{{ $item->url }}" title="{{ $item->nameEn }}" target="_blank">
                                        <img width="20px" height="20px" src="{{ asset('assets/images/document.png') }}" alt="{{ $item->extension }}">
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="padding-bottom: 1rem">
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection

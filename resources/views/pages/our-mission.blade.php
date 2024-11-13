@extends('layouts.master_layout')

@section('content')

    <div class="bg-bubble bg-primary">
        <div class="container-in">
            <h3 class="font-bold text-3xl lg:text-4xl text-white text-center mb-4 pt-14">
                {!! html_entity_decode($data['titleEn']) !!}
            </h3>
            <p class="max-w-[700px] mx-auto text-center text-white text-sm lg:text-base">
                {{ $data['descEn'] }}
            </p>
            <div class="grid lg:grid-cols-3 gap-6 py-8">
                @foreach ($data['data'] as $key => $item)
                    @php
                        $titleArray = explode(' ',$item['titleEn']);
                    @endphp
                    <div class="hover-mv flex flex-col justify-between items-center text-center hover:bg-secondary  hover:shadow-md text-white p-4 rounded-xl ">
                        <div>
                            @if(file_exists(public_path('assets/imgs/'.$item['logo'])))
                                <img src="{{ asset('assets/imgs/'.$item['logo']) }}" class="mx-auto" alt="{{ $item['logo'] }}">
                            @elseif(file_exists(public_path('storage/uploads/pages/'.$item['logo'])))
                                <img class="mx-auto" src="{{ asset('storage/uploads/pages/'.$item['logo']) }}" alt="{{ $item['logo'] }}">
                            @else
                                <img class="mx-auto" src="{{ asset('assets/imgs/avatar.png') }}" alt="avatar.png">
                            @endif
                            <div class="uppercase font-bold text-2xl my-4 ">
                                @foreach ($titleArray as $k => $title)
                                    @if($k % 2 == 0)
                                        {{ $title }}
                                    @else
                                     <span class="text-secondary"> {{ $title }}</span>
                                    @endif
                                @endforeach
                            </div>
                            <div class="text-sm font-light max-w-[320px] ">
                                {{ $item['descEn'] }}
                            </div>
                        </div>
                        @if(file_exists(public_path('assets/imgs/'.$item['logo'])))
                            <img src="{{ asset('assets/imgs/'.$item['logo']) }}" class="max-w-16 lg:mt-16" alt="{{ $item['logo'] }}">
                        @elseif(file_exists(public_path('storage/uploads/pages/'.$item['logo'])))
                            <img class="max-w-16 lg:mt-16" src="{{ asset('storage/uploads/pages/'.$item['logo']) }}" alt="{{ $item['logo'] }}">
                        @else
                            <img class="max-w-16 lg:mt-16" src="{{ asset('assets/imgs/avatar.png') }}" alt="avatar.png">
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@extends('layouts.master_layout')

@section('content')

    <div class="bg-primary">
        <div class="container-in">
            <div class="flex justify-between flex-wrap md:flex-nowrap items-center py-6">
                <div class="md:max-w-[50%] text-white">
                    <div class="text-3xl ">{!! html_entity_decode($data['titleEn']) !!}</div>
                    <p class="font-medium mt-2 texl-lg">{{ $data['shortDescEn'] }}</p>
                </div>
                <div class="md:max-w-[55%] text-white">
                    {{ $data['descEn'] }}
                </div>
            </div>
        </div>
        @foreach ($data['data'] as $key => $value)
            <div class="py-6 @if($key % 2 === 0) bg-black/25 @endif">
                <div class="container-in">
                    <div class="grid lg:grid-cols-2 gap-8">
                        @foreach ($value as $item)
                        @php
                            if(file_exists(public_path('assets/imgs/'.$item['logo']))){
                                $item['logo'] = asset('assets/imgs/'.$item['logo']);
                            }else if(file_exists(public_path('storage/uploads/pages/'.$item['logo']))){
                                $item['logo'] = asset('storage/uploads/pages/'.$item['logo']);
                            }else{
                                $item['logo'] = asset('assets/imgs/avatar.png');
                            }
                        @endphp
                                <div class="flex gap-6 sm:flex-nowrap flex-wrap flex-row">
                                    <div
                                        class="border-2 border-secondary h-[200px] w-[200px] basis-[200px] grow-0 shrink-0   overflow-hidden">
                                        <img src="{{ $item['logo'] }}" class="h-full w-full object-cover object-center" alt="{{ $item['logo'] }}">
                                    </div>
                                    <div class="text-white">
                                        <span class="text-secondary font-bold">{{ $item['titleEn'] }}</span>
                                        <div class="text-xl font-medium mt-1">{{ $item['nameEn'] }}</div>
                                        <small class="text-sm font-medium">{{ $item['designationEn'] }}</small>
                                        @if(!empty($item['descEn']))
                                            <div class="text-white/75 mt-3 text-sm">
                                                {!! Str::words(html_entity_decode($item['descEn']), 40, '...') !!}
                                            </div>
                                            @php
                                                $encryptData = base64_encode(json_encode($item));
                                            @endphp
                                            <a href=".directorMessages" data-director="{{ $encryptData }}"
                                                class="modal-in mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                                <span>Read More</span>
                                                <i class="fa-solid fa-chevron-right"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('components.web.directorModals')
@endsection

@section('javaScript')
    <script>
        $(document).on("click","a[href='.directorMessages']",function(event){
            event.preventDefault();

            const encryptData = $(this).attr('data-director');
            // console.log(encryptData);

            const decryptData = JSON.parse(atob(encryptData));
            // console.log(decryptData);
            $("#name").html(decryptData.nameEn);
            $("#name2").html(decryptData.nameEn);
            $("#title").html(decryptData.titleEn);
            $("#desc").html(decryptData.descEn);
            $("#logo").attr('src',decryptData.logo);
            $("#logo").attr('alt',decryptData.logo);
        });
    </script>
@endsection


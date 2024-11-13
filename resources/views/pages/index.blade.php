@extends('layouts.master_layout')

@section('content')
        <div class="container-in lg:mt-14">
            <div class="flex md:justify-between md:items-end flex-col md:flex-row gap-4 mb-4 md:gap-0 lg:mb-0">
                <div class="md:w-[60%] md:max-w-[420px] flex flex-col items-start text-white self-center">
                    <h1 class="lg:text-5xl text-2xl font-bold"><u class="text-secondary font-extrabold">CEO</u> Message
                    </h1>
                    <div class="mt-6 text-lg">
                        {!! html_entity_decode(Str::words($data['Ceo Message']['descEn'], 26, '...')) !!}
                    </div>
                    <a class="btn-blue mt-4 modal-in" href="#ceoMsg">
                        <span>Read More</span>
                        <img src="{{ asset('assets/imgs/double-arrrow.svg') }}" alt="">
                    </a>
                </div>
                <div class="md:max-w-[415px] w-[30%] hidden lg:block">
                    <img src="{{ asset('assets/imgs/ceo.png') }}" class="max-w-[80%]" alt="">
                </div>
                <div class="lg:max-w-[350px] md:max-w-[300px] md:w-[50%] relative min-h-[370px]">
                    <div class="bg-white rounded-lg max-w-[350px] md:ml-auto w-full mx-auto md:absolute top-20">
                        <div class="c-header px-4 py-2">
                            <div class="font-semibold text-2xl">Announcement</div>
                            <div class="bg-secondary rounded-xl px-2 py-1 text-white text-sm">
                                <i class="fa-solid fa-circle-info"></i>
                                Announcement from admin or leader
                            </div>
                        </div>
                        <div class="c-body flex flex-col gap-2 px-4 py-2 overflow-auto max-h-[500px]">
                            @foreach ($data['announcements'] as $key => $item)
                                <div class="c-list p-[2px] rounded-lg w-full @if($item['type'] == \App\Constants\Type::TYPE_IMPORTANT) c-blink @else shadow-md @endif">
                                    <div class="flex gap-2 px-2 py-1 rounded-lg  relative bg-white">
                                        <div class="l-img">
                                            <i class="fa-brands fa-rocketchat"></i>
                                        </div>
                                        <div class="l-content w-full">
                                            <a href="#ac{{ $key }}" class="font-semibold flex justify-between toggle-button">{{ $item['titleEn'] }} <span class="fa-solid fa-chevron-down"></span></a>
                                            <div id="ac{{ $key }}" class="hidden">
                                                <div class="text-sm">{{ $item['descEn'] }}</div>
                                                <div class="text-xs mt-2">{{ \Carbon\Carbon::parse($item['date'])->format('M d, Y') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-wrapper">
        <div class="container-in">
            <div class="news py-4">
                <div class="flex justify-between px-2">
                    <div>
                        <h3 class="text-2xl font-semibold mb-0">Jusour news</h3>
                        <p class="text-sm text-[#666666]">Navigating News with Insight and Integrity</p>
                    </div>
                    <div class="flex ">
                        <button class="prev">
                            <img src="{{ asset('assets/imgs/nav.svg') }}" alt="">
                        </button>
                        <button class="next">
                            <img src="{{ asset('assets/imgs/nav.svg') }}" class="rotate-180" alt="">
                        </button>
                    </div>
                </div>
                <div class="news-carousel">
                    <div class="cl-item p-2">
                        <div class="rounded-lg shadow-md">
                            <div class="img">
                                <img src="{{ asset('assets/imgs/news-1.jpg') }}" alt="">
                            </div>
                            <div class="cl-content px-4 py-2 bg-white">
                                <span class="text-secondary font-bold text-xs">Sep 22, 2024</span>
                                <div class="font-semibold leading-4">Jusour, in partnership with Mada - Qatar Assistive
                                    Technology
                                    Center</div>
                                <a href=""
                                    class="mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                    <span>Read More</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cl-item p-2">
                        <div class="rounded-lg shadow-md">
                            <div class="img">
                                <img src="{{ asset('assets/imgs/news-1.jpg') }}" alt="">
                            </div>
                            <div class="cl-content px-4 py-2 bg-white">
                                <span class="text-secondary font-bold text-xs">Sep 22, 2024</span>
                                <div class="font-semibold leading-4">Jusour, in partnership with Mada - Qatar Assistive
                                    Technology
                                    Center</div>
                                <a href=""
                                    class="mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                    <span>Read More</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cl-item p-2">
                        <div class="rounded-lg shadow-md">
                            <div class="img">
                                <img src="{{ asset('assets/imgs/news-1.jpg') }}" alt="">
                            </div>
                            <div class="cl-content px-4 py-2 bg-white">
                                <span class="text-secondary font-bold text-xs">Sep 22, 2024</span>
                                <div class="font-semibold leading-4">Jusour, in partnership with Mada - Qatar Assistive
                                    Technology
                                    Center</div>
                                <a href=""
                                    class="mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                    <span>Read More</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cl-item p-2">
                        <div class="rounded-lg shadow-md">
                            <div class="img">
                                <img src="{{ asset('assets/imgs/news-1.jpg') }}" alt="">
                            </div>
                            <div class="cl-content px-4 py-2 bg-white">
                                <span class="text-secondary font-bold text-xs">Sep 22, 2024</span>
                                <div class="font-semibold leading-4">Jusour, in partnership with Mada - Qatar Assistive
                                    Technology
                                    Center</div>
                                <a href=""
                                    class="mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                    <span>Read More</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cl-item p-2">
                        <div class="rounded-lg shadow-md">
                            <div class="img">
                                <img src="{{ asset('assets/imgs/news-1.jpg') }}" alt="">
                            </div>
                            <div class="cl-content px-4 py-2 bg-white">
                                <span class="text-secondary font-bold text-xs">Sep 22, 2024</span>
                                <div class="font-semibold leading-4">Jusour, in partnership with Mada - Qatar Assistive
                                    Technology
                                    Center</div>
                                <a href=""
                                    class="mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                    <span>Read More</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-8 bg-about lg:min-h-[800px]">
        <div class="container-in flex flex-col justify-evenly">
            <div class="flex flex-wrap lg:flex-nowrap gap-6">
                <div class="usefull-links lg:max-w-[40%] shrink-0 grow-0 w-full">
                    <h3 class="text-2xl text-white font-semibold">Useful Links</h3>
                    <!-- <p class="text-white">Lorem ipsum dollar</p> -->
                    <div class="u-links grid gap-4 sm:grid-cols-2 mt-4">
                        @foreach ($data['links'] as $item)
                            <div class="link bg-white rounded-lg px-2 py-3">
                                <a href="{{ $item['link'] }}" class="flex justify-between items-center ">
                                    <div class="font-semibold text-lg">{{ $item['titleEn'] }}</div>
                                    <i class="fa-solid fa-angles-right text-secondary"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id='calendar-container'
                    class=" w-full lg:max-w-[57%] bg-white rounded-lg text-sm overflow-hidden min-h-[200px]">
                    <div class="font-bold bg-secondary py-2 text-center text-white text-lg">Event Calendar</div>
                    <!-- <div id='calendar'></div> -->
                    <div class="flex gap-4 p-4 shrink-0 grow-0 w-full">
                        <div id="datepicker" class="w-[280px] h-[200px] shrink-0 grow-0 "></div>
                        <div id="current-events" class="w-full  ">
                            <!-- <h2>Current Events</h2> -->
                            <ul id="current-events-list">
                                @foreach ($data['events'] as $key => $item)
                                    <li class="flex gap-2 p-1 border border-[#E6E6E6] items-center rounded-lg ">
                                        <div class="border-[#E6E6E6] border overflow-hidde w-16 rounded-lg">
                                            <div class="bg-[#FF7437] py-1 text-white text-center text-xs">{{ \Carbon\Carbon::parse($item['date'])->format('M') }}</div>
                                            <div class="bg-white text-center font-semibold">{{ \Carbon\Carbon::parse($item['date'])->format('d') }}</div>
                                        </div>
                                        <div class="w-full">
                                            <a href="#ev{{ $key }}"
                                                class="flex justify-between toggle-button uppercase font-bold">{{ $item['nameEn'] }} {{ \Carbon\Carbon::parse($item['date'])->format('Y') }} <span class="fa-solid fa-chevron-down"></span></a>
                                            <div id="ev{{ $key }}" class="text-black/75 hidden text-sm">
                                                {{ $item['descEn'] }}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:mt-16 mt-4">
                <h3 class="text-white text-2xl font-semibold mb-4">Explore our Special Offers</h3>
                <div class="relative">
                    <button class="onprev text-white text-2xl px-2 absolute left-0 top-0 bottom-0 z-10"><i
                            class="fa-solid fa-chevron-left"></i></button>
                    <div class="carousel-offer w-full px-8">
                        <div class="px-4">
                            <div class="offer-item relative">
                                <img src="https://services.jusour.qa/storage/images/service/JSR-1710690601-65f7112927177.png"
                                    class="max-w-full" alt="">

                            </div>
                            <a href="https://services.jusour.qa/en/service/shakespeare-international-academy"
                                target="_blank" class="cap-layer">
                                <span class="relative font-bold text-lg ">Shakespeare International
                                    Academy</span>
                            </a>
                        </div>
                        <div class="px-4">
                            <div class="offer-item relative">
                                <img src="https://services.jusour.qa/storage/images/service/JSR-1710691080-65f7130801895.png"
                                    class="max-w-full" alt="">

                            </div>
                            <a href="https://services.jusour.qa/en/service/al-ahli-hospital" target="_blank"
                                class="cap-layer ">
                                <span class="relative font-bold text-lg ">Al-Ahli Hospital</span>
                            </a>
                        </div>
                        <div class="px-4">
                            <div class="offer-item relative">
                                <img src="https://services.jusour.qa/storage/images/service/JSR-1710691051-65f712eb9ea71.jpeg"
                                    class="max-w-full" alt="">

                            </div>
                            <a href="https://services.jusour.qa/en/service/doha-clinic-hospital" target="_blank"
                                class="cap-layer ">
                                <span class="relative font-bold text-lg ">Doha Clinic Hospital</span>
                            </a>
                        </div>
                        <div class="px-4">
                            <div class="offer-item relative">
                                <img src="https://services.jusour.qa/storage/images/service/JSR-1710690996-65f712b45519c.jpg"
                                    class="max-w-full" alt="">

                            </div>
                            <a href="https://services.jusour.qa/en/service/qshield" target="_blank"
                                class="cap-layer ">
                                <span class="relative font-bold text-lg ">QShield</span>
                            </a>
                        </div>
                        <div class="px-4">
                            <div class="offer-item relative">
                                <img src="https://services.jusour.qa/storage/images/service/JSR-1710691080-65f7130801895.png"
                                    class="max-w-full" alt="">

                            </div>
                            <a href="https://services.jusour.qa/en/service/shakespeare-international-academy"
                                target="_blank" class="cap-layer ">
                                <span class="relative font-bold text-lg ">Shakespeare International
                                    Academy</span>
                            </a>
                        </div>
                    </div>
                    <button class="onext text-white text-2xl px-2 absolute right-0 top-0 bottom-0"><i
                            class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="weather py-8">
        <div class="container-in">
            <div class="flex flex-wrap md:flex-nowrap justify-between gap-4 text-white">
                <div class="md:max-w-[700px] md:w-[45%] w-full">
                    <div class="mt-4">
                        <h3 class="text-2xl font-bold">Muslim Prayers Time</h3>
                        <p class="font-medium" id="location">in Doha, Qatar (GMT+3)</p>
                        <div id="prayer-times" class="grid md:grid-cols-5 sm:grid-cols-3 grid-cols-2 gap-2 mt-4">
                        </div>
                    </div>
                </div>
                <div class="md:max-w-[870px] md:w-[55%] w-full bg-black/25 p-4 rounded-lg gap-4 grid grid-cols-2">
                    <h3 class="sm:text-2xl text-xl col-span-2 font-semibold">View Jusour policies and procedures</h3>
                    <div id="weather" class="flex p-4 rounded-lg gap-6">
                        <div>
                            <span>Partly Cloudy</span>
                            <img src="{{ asset('assets/imgs/cloud.png') }}" alt="">
                        </div>
                        <div class="font-bold">
                            <div class="big flex text-3xl ">32
                                <div class="deg h-[10px] w-[10px] border-2 border-white rounded-full"></div>
                            </div>
                            Doha, Qatar
                            <span class="block font-normal">Sunday</span>
                        </div>
                    </div>
                    <div class="flex gap-2 self-center justify-end">
                        <a href="#policyModal" class="btn-white modal-in">{{ $data['Policies']['titleEn'] }}</a>
                        <a href="#Procedure" class="btn-blue modal-in">{{ $data['Procedures']['titleEn'] }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.web.modals',['ceoMessage'=>$data['Ceo Message'],'policies'=>$data['Policies'],'procedures'=>$data['Procedures']])
@endsection
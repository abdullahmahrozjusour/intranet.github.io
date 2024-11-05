@extends('layouts.master_layout')
@section('styleSheet')
<link rel="stylesheet" href="{{ asset('assets/css/org.css') }}">
@endsection

@section('content')
    <div class="bg-bubble bg-primary">
        <div class="max-w-[1100px] mx-auto">
            <div class="header-title h-40 flex flex-col items-center justify-center items-center text-center px-4">
                <h2 class="font-bold md:text-5xl text-3xl  text-white">Our organization structure</h2>
                <p class="text-white/75 font-medium md:text-lg text-base mt-2">A Visual Guide to Our Structure and
                    Leadership</p>
            </div>
        </div>
        <div class="py-8">
            <div class="container-in">
                <h1 class="level-1 rectangle">
                    <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                    CEO <span>VP of Engineering</span>
                </h1>
                <ol class="level-2-wrapper">
                    <li>
                        <h2 class="level-2 rectangle">
                            <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                            CEO <span>VP of Engineering</span>
                        </h2>
                        <ol class="level-3-wrapper">
                            <li>
                                <h3 class="level-3 rectangle">
                                    <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                    CEO <span>VP of Engineering</span>
                                </h3>
                                <ol class="level-4-wrapper">
                                    <li>
                                        <h4 class="level-4 rectangle">
                                            <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                            CEO <span>VP of Engineering</span>
                                        </h4>
                                    </li>
                                    <li>
                                        <h4 class="level-4 rectangle">
                                            <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                            CEO <span>VP of Engineering</span>
                                        </h4>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <h3 class="level-3 rectangle">
                                    <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                    CEO <span>VP of Engineering</span>
                                </h3>
                                <ol class="level-4-wrapper">
                                    <li>
                                        <h4 class="level-4 rectangle">
                                            <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                            CEO <span>VP of Engineering</span>
                                        </h4>
                                    </li>
                                    <li>
                                        <h4 class="level-4 rectangle">
                                            <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                            CEO <span>VP of Engineering</span>
                                        </h4>
                                    </li>

                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <h2 class="level-2 rectangle">
                            <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                            CEO <span>VP of Engineering</span>
                        </h2>
                        <ol class="level-3-wrapper">
                            <li>
                                <h3 class="level-3 rectangle">
                                    <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                    CEO <span>VP of Engineering</span>
                                </h3>
                                <ol class="level-4-wrapper">
                                    <li>
                                        <h4 class="level-4 rectangle">
                                            <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                            CEO <span>VP of Engineering</span>
                                        </h4>
                                    </li>
                                    <li>
                                        <h4 class="level-4 rectangle">
                                            <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                            CEO <span>VP of Engineering</span>
                                        </h4>
                                    </li>

                                </ol>
                            </li>
                            <li>
                                <h3 class="level-3 rectangle">
                                    <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                    CEO <span>VP of Engineering</span>
                                </h3>
                                <ol class="level-4-wrapper">
                                    <li>
                                        <h4 class="level-4 rectangle">
                                            <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                            CEO <span>VP of Engineering</span>
                                        </h4>
                                    </li>
                                    <li>
                                        <h4 class="level-4 rectangle">
                                            <img src="{{ asset('assets/imgs/ali.jpg') }}" alt="">
                                            CEO <span>VP of Engineering</span>
                                        </h4>
                                    </li>

                                </ol>
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.master_layout')
@section('styleSheet')
<link rel="stylesheet" href="{{ asset('assets/css/org.css') }}">
@endsection

@section('content')
{{-- <div class="bg-bubble bg-primary">
    <div class="max-w-[1100px] mx-auto">
        <div class="header-title h-40 flex flex-col items-center justify-center items-center text-center px-4">
            <h2 class="font-bold md:text-5xl text-3xl  text-white">Our organization structure</h2>
            <p class="text-white/75 font-medium md:text-lg text-base mt-2">A Visual Guide to Our Structure and
                Leadership</p>
        </div>
    </div>
    <div class="py-8">
        <div class="container">
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
</div> --}}
<div class="max-w-full overflow-auto relative min-h-[100vh] bg-bubble bg-primary">
    <div class="max-w-[1100px] mx-auto">
        <div class="header-title h-40 flex flex-col items-center justify-center items-center text-center px-4">
            <h2 class="font-bold md:text-5xl text-3xl  text-white">Our organization structure</h2>
            <p class="text-white/75 font-medium md:text-lg text-base mt-2">A Visual Guide to Our Structure and
                Leadership</p>
        </div>
    </div>
    <div id="full-container border-transparent">
        <button class="btn-action btn-fullscreen" onclick="params.funcs.toggleFullScreen()">Fullscreen <span
                class='icon' />
            <i class="fa fa-arrows-alt" aria-hidden="true"></i></span></button>
        {{-- <button class="btn-action btn-show-my-self" onclick="params.funcs.showMySelf()"> Show myself <span
                class='icon' />
            <i class="fa fa-user" aria-hidden="true"></i></span></button> --}}

        <button class=" btn-action btn-show-my-self" onclick="params.funcs.search()"> Search <span class='icon' /> <i
                class="fa fa-search" aria-hidden="true"></i></span></button>

        <button class=" btn-action btn-back" onclick="params.funcs.back()"> Back <span class='icon' /> <i
                class="fa fa-arrow-left" aria-hidden="true"></i></span></button>

        <div class="department-information">
            <div class="dept-name">
                dept name
            </div>
            <div class="dept-emp-count">
                dept description test, this is department description
            </div>
            <div class="dept-description">
                dept description test, this is department description
            </div>
        </div>

        <div class="user-search-box">
            <div class="input-box">
                <div class="close-button-wrapper"><i onclick="params.funcs.closeSearchBox()" class="fa fa-times"
                        aria-hidden="true"></i></div>
                <div class="input-wrapper">
                    <input type="text" class="search-input" placeholder="Search" />
                    <div class="input-bottom-placeholder">By Firstname, Lastname, Tags</div>
                </div>
                <div>
                </div>
            </div>
            <div class="result-box">
                <div class="result-header"> RESULTS </div>
                <div class="result-list">


                    <div class="buffer"></div>
                </div>
            </div>
        </div>
        <div id="svgChart"></div>
        <!--
                     <button class="btn btn-expand" onclick="params.funcs.expandAll()">Expand All</button>
                  -->
    </div>
</div>
@endsection
@section('javaScript')
<script src="{{ asset('assets/js/d3.min.js') }}"></script>
<script src="{{ asset('assets/js/d3-cst.js') }}"></script>
@endsection
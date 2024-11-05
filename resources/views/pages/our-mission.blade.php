@extends('layouts.master_layout')

@section('content')

    <div class="bg-bubble bg-primary">
        <div class="container-in">
            <h3 class="font-bold text-3xl lg:text-4xl text-white text-center mb-4 pt-14">Our Mission & Vision</h3>
            <p class="max-w-[700px] mx-auto text-center text-white text-sm lg:text-base">Our mission is to empower and
                inspire communities
                through
                innovative programs and sustainable initiatives
                that promote growth, education, and social equity. We are dedicated to fostering collaboration and
                driving positive change that enhances the quality of life for all individuals. We envision a world where
                every individual has access to opportunities that enable them to thrive—characterized by inclusivity,
                empowerment, and sustainable progress, where communities are resilient, vibrant, and connected.</p>
            <div class="grid lg:grid-cols-3 gap-6 py-8">
                <div class="hover-mv flex flex-col justify-between items-center text-center hover:bg-secondary  hover:shadow-md text-white p-4 rounded-xl ">
                    <div>
                        <img src="{{ asset('assets/imgs/destination-white.png') }}" class="mx-auto" alt="">
                        <div class="uppercase font-bold text-2xl my-4 ">Our <span class="text-secondary">Mission</span>
                        </div>
                        <p class="text-sm font-light max-w-[320px] ">Our mission
                            To deliver a suite of high-quality services that serves both job seekers and employers to
                            retain
                            and attract talent for employment in Qatar's labour market.
                        </p>
                    </div>
                    <img src="{{ asset('assets/imgs/destination-white.png') }}" class=" max-w-16 lg:mt-16" alt="">
                </div>
                <div class="hover-mv flex flex-col justify-between items-center text-center hover:bg-secondary  hover:shadow-md text-white p-4 rounded-xl">
                    <div>
                        <img src="{{ asset('assets/imgs/eye-white.png') }}" class="mx-auto" alt="">
                        <div class="uppercase font-bold text-2xl my-4  ">Our <span
                                class="text-secondary">Vission</span></div>
                        <p class="text-sm font-light max-w-[320px]">To be a key stimulus for Qatar's labor
                            market
                            and a leader in enabling partnerships.</p>
                    </div>
                    <img src="{{ asset('assets/imgs/eye-white.png') }}" class=" max-w-16 lg:mt-16" alt="">
                </div>
                <div class="hover-mv flex flex-col justify-between items-center text-center hover:bg-secondary  hover:shadow-md text-white p-4 rounded-xl">
                    <div>
                        <img src="{{ asset('assets/imgs/shield-white.png') }}" class="mx-auto" alt="">
                        <div class="uppercase font-bold text-2xl my-4  ">Our <span
                                class="text-secondary">Values</span></div>
                        <p class="text-sm font-light max-w-[320px]  ">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit.
                            Curabitur vel est dolor. Nunc consequat
                            dapibus neque, et rutrum libero. Maecenas vel dignissim elit, non blandit ligula. Quisque in
                            lacinia leo. Phasellus sed suscipit neque. Fusce ultricies justo eget ultrices ullamcorper.
                        </p>
                    </div>
                    <img src="{{ asset('assets/imgs/shield-white.png') }}" class=" max-w-16 lg:mt-16" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection

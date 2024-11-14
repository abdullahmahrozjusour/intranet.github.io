<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('theme/media/images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />
    <script src="{{ asset('assets/js/tailwindcss.js') }}"></script>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    @yield('styleSheet')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @include('components.web.tailwind')
    <title>Intranet</title>
</head>

<body>
    @if (url('/'))
        <div class="header-home bg-[#21295B]">
    @endif
    <header class="py-6">
        <div class="container-in">
            <div class="flex justify-between  lg:flex-nowrap flex-wrap gap-2 lg:gap-0">
                <div class="logo">
                    <a href="">
                        <img src="{{ url('assets/imgs/logo.png') }}" class="lg:max-h-14 max-h-12" alt="">
                    </a>
                </div>
                <div class="nav">
                    <ul class="menu order-2 lg:order-1" id="menu">
                        <li class="@if (\Request::is('/')) active @endif"><a
                                href="{{ route('home') }}">Home</a></li>
                        <li class="@if (\Request::is('organization')) active @endif"><a
                                href="{{ route('organization') }}">Organization</a></li>
                        <li class="@if (\Request::is('ourMission')) active @endif"><a
                                href="{{ route('ourMission') }}">Our mission </a></li>
                        <li class="@if (\Request::is('boardOfDirector')) active @endif"><a
                                href="{{ route('boardOfDirector') }}">Board of Directors</a></li>
                        <li class="@if (\Request::is('usefulContacts')) active @endif"><a
                                href="{{ route('usefulContacts') }}">Useful Contacts </a></li>
                    </ul>
                    <div class="search relative order-1 lg:order-2 autocomplete-container">
                        <span class="absolute top-2 left-3">
                            <img src="{{ url('assets/imgs/search.svg') }}" alt="">
                        </span>
                        <input type="text" id="autocomplete-input"
                            class="h-[39px] w-[380px] bg-transparent pl-12 text-white border-2 border-white rounded-3xl"
                            placeholder="Search Directory">
                        <div id="suggestions" class="suggestions bg-white absolute top-full  w-full left-0 right-0">
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 btn-flex">
                    <a class="btn-blue" href="{{ route('downloadCenter') }}">
                        <img src="{{ url('assets/imgs/download.svg') }}" alt="">
                        <span>Download Center</span>
                    </a>

                    <a href="#menu" class="nav-menu-link lg:hidden text-white text-xl">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                    <div class="flex gap-1">
                        <a href="#policyModal" class="btn-white modal-in">{{ $data['Policies']['titleEn'] }}</a>
                        <a href="#Procedure" class="btn-blue modal-in">{{ $data['Procedures']['titleEn'] }}</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    @include('components.web.modals',['ceoMessage'=>$data['ceoMessage'][0],'policies'=>$data['Policies'],'procedures'=>$data['Procedures']])
    <footer class="py-4">
        <div class="container-in">
            <div class="flex flex-wrap md:flex-nowrap gap-2 sm:justify-between justify-center text-white">
                <div class="text-sm text-center md:text-left">&copy; 2024 Qatar Manpower Solutions Company (Jusour),
                    All
                    Right Reserved</div>
                <div class="flex gap-4 flex-wrap sm:flex-nowrap justify-center items-center">
                    <a href="mailto:fo@jusour.qa">
                        <i class="fa-regular fa-envelope"></i>
                        info@jusour.qa
                    </a>
                    <a href="tel:+97444011044">
                        <i class="fa-solid fa-phone"></i>
                        +974 44011044
                    </a>
                    <div class="flex text-white gap-2 text-xl">
                        <a href="https://www.facebook.com/jusourqatar" target="_blank"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="https://x.com/Jusour_qa" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/jusourqa" target="_blank"><i
                                class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('theme/js/select2.min.js') }}" nonce="intranet"></script>
    <script type="text/javascript" src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/index.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Select a country'
            });
        });
    </script>
    @yield('javaScript')

</body>

</html>

<!DOCTYPE html>
<html lang="ar" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Intranet</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('theme/media/images/favicon.ico') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('theme/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('theme/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css">
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('theme/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('theme/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
    <!--end::Global Stylesheets Bundle-->

    <link href="{{ asset('theme/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <link rel="preload" as="style" href="{{ asset('build/assets/app-0bd249ab.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-0bd249ab.css') }}">

    <style>
        .select2-container--default .select2-selection--single{
            background: transparent !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            padding-top: 6px !important;
            padding-bottom: 6px !important;
            border-radius: 5px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 40px !important;
        }
    </style>
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled"
    data-kt-aside-minimize="on">
    <!--begin::Page loading(append to body)-->
    <div class="page-loader flex-column bg-dark bg-opacity-25">
        <span class="spinner-border text-primary" role="status"></span>
        <span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>
    </div>
    <!--end::Page loading-->

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('layouts.navigation')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @yield('section')
            </div>
            <!--end::Wrapper-->
        </div>
    </div>
    <!-- Scripts -->
    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('theme/plugins/global/plugins.bundle.js') }}" nonce="intranet"></script>
    <script src="{{ asset('theme/js/scripts.bundle.js') }}" nonce="intranet"></script>
    <script src="{{ asset('theme/js/jquery.min.js') }}" nonce="intranet"></script>
    <script src="{{ asset('theme/js/select2.min.js') }}" nonce="intranet"></script>
    <script src="{{ asset('theme/js/tinymce.min.js') }}"></script>
    <script src="{{ asset('theme/js/tinymce.min.js') }}"></script>
    <script src="{{ asset('theme/js/tinymce-jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/index.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <!--end::Global Javascript Bundle-->

    <!-- Scripts -->
    <link rel="modulepreload" href="{{ asset('build/assets/app-0dfe298d.js') }}">
    <script type="module" src="{{ asset('build/assets/app-0dfe298d.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>



    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>

    <script src="{{ asset('theme/js/custom/apps/ecommerce/catalog/save-product.js') }}" nonce="intranet"></script>
     @yield('javaScript')
</body>

</html>

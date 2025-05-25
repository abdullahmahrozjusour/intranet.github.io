<!--begin::Header-->
<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-offset="{default: '200px', lg: '300px'}">

    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-center justify-content-between" id="kt_header_container">
        <!--begin::Wrapper-->

        <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
            <!--begin::Aside mobile toggle-->
            <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                            fill="currentColor"></path>
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Aside mobile toggle-->
            <!--begin::Logo-->
            <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center">
                @include('components.application-logo', ['attributes' => 'class=h-30px'])
            </a>
            <!--end::Logo-->
        </div>
        <!--end::Wrapper-->
        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0"
            data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
            <!--begin::Page title-->
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $name }}
            </h2>
            <!--end::Page title=-->
            @if(\Request::segment(3))
            <ul class="breadcrumb breadcrumb-line text-muted fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('admin.dashboard') }}" class="text-muted">
                        Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="{{ request()->url() }}" class="text-muted text-capitalize">
                        {{ \Request::segment(2) }}
                    </a>
                </li>
                @if(\Request::segment(4))
                <li class="breadcrumb-item text-muted">
                    <a href="{{ url('admin/'.\Request::segment(2).'/'.\Request::segment(3)) }}"
                        class="text-muted text-capitalize">
                        {{ $name }}
                    </a>
                </li>
                @else
                <li class="breadcrumb-item text-dark text-capitalize">
                    {{ $name }}
                </li>
                @endif
                @if(\Request::segment(5))
                <li class="breadcrumb-item text-dark text-capitalize">
                    {{ \Request::segment(5).' '.$name }}
                </li>
                @elseif(\Request::segment(4))
                <li class="breadcrumb-item text-dark text-capitalize">
                    {{ \Request::segment(4).' '.$name }}
                </li>
                @endif
            </ul>
            @endif
        </div>
    </div>

    <!--end::Container-->
</div>
@include('components.success')
@include('components.error')
<!--end::Header-->
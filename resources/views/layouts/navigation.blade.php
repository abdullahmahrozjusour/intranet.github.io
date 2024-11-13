<div id="kt_aside" class="aside aside-extended" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Primary-->
    <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
        <!--begin::Logo-->
        <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10"
            id="kt_aside_logo">
            <a href="{{ route('admin.dashboard') }}">
                @include('components.application-logo', ['attributes' => 'class=h-40px'])
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Nav-->
        <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0"
            id="kt_aside_nav">
            <!--begin::Wrapper-->
            <div class="hover-scroll-overlay-y mb-5 px-5" data-kt-scroll="true"
                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#kt_aside_nav" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                data-kt-scroll-offset="0px" style="height: 598px;">
                <!--begin::Nav-->
                <ul class="nav flex-column w-100" id="kt_aside_nav_tabs">
                    <li class="nav-item mb-2" title="Dashboard">
                        <a href="{{ route('admin.dashboard') }}"
                            class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light
           active">

                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-07-10-101904/core/html/src/media/icons/duotune/general/gen024.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    viewBox="0 0 24 24">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                            fill="currentColor"></rect>
                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                            fill="currentColor" opacity="0.3"></rect>
                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                            fill="currentColor" opacity="0.3"></rect>
                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                            fill="currentColor" opacity="0.3"></rect>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </li>

                    <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                        data-bs-dismiss="click" aria-label="operation" data-bs-original-title="operation"
                        data-kt-initialized="1">
                        <a data-bs-toggle="tab" href="#kt_aside_nav_tab_operation"
                            class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light
            ">
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-07-10-101904/core/html/src/media/icons/duotune/files/fil003.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z"
                                        fill="currentColor"></path>
                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </li>
                    <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                        data-bs-dismiss="click" aria-label="Configuration" data-bs-original-title="Configuration"
                        data-kt-initialized="1">
                        <a data-bs-toggle="tab" href="#kt_aside_nav_tab_configuration"
                            class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light
            ">
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-07-10-101904/core/html/src/media/icons/duotune/coding/cod001.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </li>
                    <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover"
                        data-bs-placement="right" data-bs-dismiss="click" aria-label="Administration"
                        data-bs-original-title="Administration" data-kt-initialized="1">
                        <a data-bs-toggle="tab" href="#kt_aside_nav_tab_administration"
                            class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light
            ">
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-07-10-101904/core/html/src/media/icons/duotune/general/gen062.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </li>
                </ul>
                <!--end::Tabs-->
            </div>
            <!--end::Nav-->
        </div>
        <!--end::Nav-->
        <!--begin::Footer-->
        <div class="aside-footer d-flex flex-column align-items-top flex-column-auto" id="kt_aside_footer">
            <!--begin::User-->
            <div class="d-flex align-items-center justify-content-center mb-10" id="kt_header_user_menu_toggle">
                <!--begin::Menu wrapper-->
                <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click"
                    data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-dismiss="click" data-bs-original-title="User profile"
                    data-kt-initialized="1">
                    <div class="symbol-label fs-2 fw-semibold text-primary">{{ substr(Auth::user()->nameEn, 0, 1) }}
                    </div>
                </div>
                <!--begin::User account menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <div class="symbol-label fs-2 fw-semibold text-success">
                                    {{ substr(Auth::user()->nameEn, 0, 1) }}</div>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Username-->
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5">
                                    {{ Auth::user()->nameEn . ' ' . Auth::user()->lnameEn }}
                                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"></span>
                                </div>
                                <a href="#"
                                    class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                            </div>
                            <!--end::Username-->
                        </div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->

                    <!--end::Menu separator-->
                    <!--begin::Menu item-->

                    <!--end::Menu item-->
                    <!--begin::Menu separator-->

                    <!--end::Menu separator-->
                    <!--begin::Menu item-->

                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf

                            <button type="submit" class="btn">Log Out</button>
                        </form>


                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::User account menu-->
                <!--end::Menu wrapper-->
            </div>
            <!--end::User-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Primary-->
    <!--begin::Secondary-->
    <div class="aside-secondary d-flex flex-row-fluid">
        <!--begin::Workspace-->
        <div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
            <div class="d-flex h-100 flex-column">
                <!--begin::Wrapper-->
                <div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace"
                    data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px"
                    style="height: 727px;">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade " id="kt_aside_nav_tab_operation" role="tabpanel">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-5 px-6 my-5 my-lg-0"
                                id="kt_aside_menu" data-kt-menu="true">
                                <div id="kt_aside_menu_wrapper" class="menu-fit">
                                    <!--begin:Menu item-->
                                    <div class="menu-item pt-5">
                                        <!--begin:Menu content-->
                                        <div class="menu-content">
                                            <span class="menu-heading fw-bold text-uppercase fs-7">Operation</span>
                                        </div>
                                        <!--end:Menu content-->
                                    </div>
                                    @can('view-ceo-message')
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{ route('admin.operation.ceoMessage.index') }}">
                                                        <span class="menu-icon">
                                                            <i class="fa-solid fa-message"></i>
                                                        </span>
                                                        <span class="menu-title">CEO Message</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                            <!--end:Menu item-->
                                        </div>
                                    @endcan
                                    @can('view-mission-and-vision')
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="{{ route('admin.operation.missionVision.index') }}">
                                                        <span class="menu-icon">
                                                            <i class="fa-solid fa-person-circle-question"></i>
                                                        </span>
                                                        <span class="menu-title">Missions & Visions</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                            <!--end:Menu item-->
                                        </div>
                                    @endcan
                                    @can('view-board-of-director')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.operation.director.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-user-secret">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Board of Directors</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                </div>
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade " id="kt_aside_nav_tab_configuration" role="tabpanel">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-5 px-6 my-5 my-lg-0"
                                id="kt_aside_menu" data-kt-menu="true">
                                <div id="kt_aside_menu_wrapper" class="menu-fit">
                                    <!--begin:Menu item-->
                                    <div class="menu-item pt-5">
                                        <!--begin:Menu content-->
                                        <div class="menu-content">
                                            <span class="menu-heading fw-bold text-uppercase fs-7">Configuration</span>
                                        </div>
                                        <!--end:Menu content-->
                                    </div>
                                    @can('view-announcement')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.configuration.announcement.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-bullhorn">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Announcements</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                    @can('view-link')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.configuration.link.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-link">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Links</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                    @can('view-event')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.configuration.event.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-calendar-days">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Events</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                    @can('view-modal-page')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.configuration.modal.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-file">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Modal Pages</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                    @can('view-download-center')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.configuration.downloadCenter.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-download">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Download Center</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                    @can('view-organization')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.configuration.organization.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-sitemap">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Organizations</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                </div>
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade " id="kt_aside_nav_tab_administration" role="tabpanel">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-5 px-6 my-5 my-lg-0"
                                id="kt_aside_menu" data-kt-menu="true">
                                <div id="kt_aside_menu_wrapper" class="menu-fit">

                                    <!--begin:Menu item-->
                                    <div class="menu-item pt-5">
                                        <!--begin:Menu content-->
                                        <div class="menu-content">
                                            <span
                                                class="menu-heading fw-bold text-uppercase fs-7">administration</span>
                                        </div>
                                        <!--end:Menu content-->
                                    </div>
                                    @can('view-user')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.administration.user.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-users">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Users</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                    @can('view-role')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.administration.role.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-user">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Roles</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                    @can('view-useful-contact')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.administration.usefulContact.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-sitemap">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Useful Contacts</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                    @can('view-contact')
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="{{ route('admin.administration.contact.index') }}">
                                                    <span class="menu-icon">
                                                        <i class="fa-solid fa-sitemap">
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Contacts</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                        <!--end:Menu item-->
                                    </div>
                                    @endcan
                                </div>
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Wrapper-->
            </div>
        </div>
        <!--end::Workspace-->
    </div>
    <!--end::Secondary-->
    <!--begin::Aside Toggle-->
    <button id="kt_aside_toggle"
        class="aside-toggle btn btn-sm btn-icon bg-body btn-color-gray-700 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex mb-5"
        data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
        data-kt-toggle-name="aside-minimize">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
        <span class="svg-icon svg-icon-2 rotate-180">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor">
                </rect>
                <path
                    d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                    fill="currentColor"></path>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </button>
    <!--end::Aside Toggle-->
</div>

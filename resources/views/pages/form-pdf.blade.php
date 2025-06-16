<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Security-Policy"
        content="script-src 'self' 'unsafe-inline' 'unsafe-eval' cdn.jsdelivr.net code.jquery.com https://static.cloudflareinsights.com http://ajax.googleapis.com https://cdn.tiny.cloud https://cdnjs.cloudflare.com; style-src 'self' 'unsafe-inline' cdn.jsdelivr.net fonts.googleapis.com cdnjs.cloudflare.com https://ajax.googleapis.com https://static.cloudflareinsights.com http://ajax.googleapis.com https://cdn.tiny.cloud; object-src 'none'; connect-src 'self' https://api.aladhan.com https://api.weatherapi.com {{ url('/') }};">
    <meta http-equiv="Permissions-Policy" content="geolocation=(), camera=(), microphone=(), speaker=(), fullscreen=()">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">
    <meta http-equiv="X-XSS-Protection" content="1; mode=block">
    <meta name="referrer" content="no-referrer">
    <link rel="icon" type="image/x-icon" href="{{ asset('theme/media/images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />
    <script src="{{ asset('assets/js/tailwindcss.js') }}"></script>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    @yield('styleSheet')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
    <style type="text/tailwindcss">
        @page {
            margin: 0;
            /* Removes all print margins */
        }

        body {
            margin: 0 !important;
            padding: 0 !important;
            font-family: 'Shubbak' !important;
        }

        .fc-header-toolbar {

            padding-top: 1em;
            padding-left: 1em;
            padding-right: 1em;
        }

        .container-in {
            @apply mx-auto max-w-[1200px] px-4;
        }

        .nav {
            @apply flex flex-col items-center gap-4
        }

        .menu {
            @apply m-0 p-0 lg:flex hidden gap-4 items-center;
            justify-content: center;

            li {
                a {
                    @apply text-white font-medium;
                }

                &.active,
                &:hover {
                    a {
                        @apply text-secondary;
                    }
                }
            }
        }

        .btn-blue {
            @apply bg-secondary md:h-10 h-8 flex gap-2 text-white items-center lg:px-4 px-2 text-sm md:text-base rounded-lg border-2 border-white font-semibold;
        }

        .btn-white {
            @apply bg-white md:h-10 h-8 flex gap-2 text-secondary items-center lg:px-4 px-2 text-sm md:text-base rounded-lg border-2 border-secondary font-semibold;
        }

        .news-wrapper {
            background: url(assets/imgs/u.png) no-repeat right #fff;
        }

        body {
            @apply bg-primary;
        }

        .content-modal {
            h3 {
                @apply text-xl font-semibold text-black/75 mb-4;
            }

            strong {
                @apply text-lg font-medium text-black/75;
            }

            p {
                @apply text-black/75 mb-4 mt-0 text-sm;
            }

            ul {
                padding-left: 1.5rem;
                list-style: disc;
                margin-bottom: 1rem;

                li {
                    font-size: 14px;

                    strong {
                        @apply text-sm;
                    }
                }

                &>ul {
                    padding-left: 1rem;
                    list-style: lower-alpha;
                }
            }
        }

        /* Calendar */
        .fc {
            .fc-toolbar.fc-header-toolbar {
                @apply bg-secondary text-white px-3 py-2;

                .fc-toolbar-title {
                    @apply font-bold text-2xl;
                }
            }

            .fc-button-primary {
                --fc-button-bg-color: transparent;
                --fc-button-border-color: #fff;
                --fc-button-text-color: #fff;
                border-radius: 50%;
                border-width: 2px;
                padding: 3px;
            }
        }

        .form-group {
            @apply flex flex-col;
        }

        .in-input {
            @apply border border-gray-400 bg-[#e9edff] rounded-none px-3 py-1 h-[32px];

            &:focus,
            &:focus-visible {
                @apply border-primary outline-primary;
            }

        }

        textarea.in-input {
            @apply h-[80px] resize-none;
        }

        .specs {}

        select.in-input {
            background-repeat: no-repeat;
            background-position: 98% 9px;
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIGZpbGw9IiMwMDAwMDAiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTUuMjkzIDguMjkzYTEgMSAwIDAgMCAwIDEuNDE0bDYgNmExIDEgMCAwIDAgMS40MTQgMGw2LTZhMSAxIDAgMCAwLTEuNDE0LTEuNDE0TDEyIDEzLjU4NiA2LjcwNyA4LjI5M2ExIDEgMCAwIDAtMS40MTQgMHoiIGNsaXAtcnVsZT0iZXZlbm9kZCIgb3BhY2l0eT0iMSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjwvZz48L3N2Zz4=");
            appearance: none;
            background-size: 20px;
        }

        .in-checkbox input {
            opacity: 0;
            /* display: none; */
            height: 0;
            width: 0;
            visibility: hidden;
        }

        .in-checkbox {
            position: relative;

            &.ch-ar {
                direction: rtl;
                display: flex;

                label {
                    font-size: 11px;
                    line-height: 11px;
                    min-height: 19px;
                    align-items: center;
                    display: flex;

                    &::before {
                        right: 0;
                        left: inherit;
                        top: 0;
                        bottom: 0;
                        margin: auto;
                    }
                }

                input:checked+label:after {
                    left: inherit;
                    right: 0;
                    top: 0;
                    bottom: 0;
                    margin: auto;
                }
            }


        }

        .in-checkbox label {
            padding-inline-start: 20px;
            @apply text-sm;

            &:before {
                content: '';
                position: absolute;
                left: 0;
                height: 17px;
                width: 17px;
                border: 2px solid #333;
                border-radius: 3px;
                top: 2px;
            }

        }


        .in-checkbox input:checked+label:after {
            /* @apply bg-primary; */

            content: '';
            position: absolute;
            left: 0;
            height: 17px;
            width: 17px;
            top: 2px;
            background: no-repeat center url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgMjQgMjQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIGQ9Ik0xOC43IDcuMmMtLjQtLjQtMS0uNC0xLjQgMGwtNy41IDcuNS0zLjEtMy4xYy0uNC0uNC0xLS40LTEuNCAwcy0uNCAxIDAgMS40bDMuOCAzLjhjLjIuMi40LjMuNy4zcy41LS4xLjctLjNsOC4yLTguMmMuNC0uNC40LTEgMC0xLjR6IiBmaWxsPSIjMDAwMDAwIiBvcGFjaXR5PSIxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PC9nPjwvc3ZnPg==");
            background-size: 18px;
        }

        .base64 {}

        /* .in-checkbox input::checked + label:after {
       
    } */
     body{
        background: #222;   
     }
        @media print {
            * {
                -webkit-print-color-adjust: exact !important;
                /* Chrome, Safari */
                print-color-adjust: exact !important;
                /* Standard */
            }

            body {
                background: #fff;
            }

            .print-header {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                /* height: 50px; */
                background: white;
                border-bottom: 1px solid #ccc;
                z-index: 1000;
            }

            .print-footer {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                /* height: 40px; */
                background: white;
                border-top: 1px solid #ccc;
                z-index: 1000;
            }

            /* .print-header,
            .print-footer {
                page-break-after: avoid;
                page-break-before: avoid;
            } */

            .print-header {
                top: 0;
            }

            .print-footer {
                bottom: 0;
            }

            /* Push content so it doesn't overlap header/footer */
            #content-to-print {
                margin-top: 100px;
                /* header height */
                /* margin-bottom: 40px; */
                /* footer height */
            }

            #request,
            #approval {
                page-break-before: always;
                margin-top: 130px;
            }
        }
        #wrapper{
            max-width: 900px;
            margin: 0 auto;
            
        }
    </style>
    <title>Intranet</title>
</head>

<body>

    <div id="wrapper">
        <table>
            <thead>
                <div class="print-header">
                    <img src="{{ asset('assets/imgs/header.png') }}" alt="">
                </div>
            </thead>
            <tbody>
                <div id="content-to-print" class="bg-white px-6 py-4 shadow-lg  -lg  mx-auto">
                    <div
                        class="bg-primary mt-4 px-4 py-2 font-bold text-md  text-white flex items-center justify-between gap-2">
                        <span>Applicant's Details </span> <span>معلومات مقدم الطلب</span>
                    </div>
                    <div class="grid grid-cols-1 gap-4 mt-2">
                        <div class=" flex gap-4 w-full items-center">
                            <label for="applicantName" class="whitespace-nowrap">Applicant name </label>
                            <input type="text" class="in-input w-full" id="applicantName" name="applicantName"
                                placeholder="Applicant name / الاسم">
                            <label for="applicantName">الاسم </label>
                        </div>
                        <div class="flex gap-4 w-full items-center">
                            <label for="applicantContactNumber" class="whitespace-nowrap">Applicant contact no.
                            </label>
                            <input type="text" class="in-input w-full" id="applicantContactNumber"
                                name="applicantContactNumber" placeholder="Applicant contact no. / الهاتف">
                            <label for="applicantContactNumber">الهاتف</label>
                        </div>
                        <div class="flex gap-4 w-full items-center">
                            <label for="applicantEmail" class="whitespace-nowrap">Applicant e-mail </label>
                            <input type="email" class="in-input w-full" id="applicantEmail" name="applicantEmail"
                                placeholder="Applicant e-mail / الإيميل">
                            <label for="">الإيميل</label>
                        </div>
                        <div class="flex gap-4 w-full items-center">
                            <label for="department">Department </label>
                            <input type="text" class="in-input w-full" id="department" name="department"
                                placeholder="Department / القسم">
                            <label for="department">القسم</label>
                        </div>
                    </div>
                    <div
                        class="bg-primary mt-4 px-4 py-2 font-bold text-md  text-white flex justify-between items-center gap-2">
                        <span>Request Details </span> <span>تفاصيل الطلب</span>
                    </div>
                    <div class="grid grid-cols-1 gap-4 mt-2">
                        <div class="grid grid-cols-3 justify-between">
                            <label for="new">New request </label>
                            <div class="in-checkbox mx-auto">
                                <label for="new"> </label>
                                <input type="checkbox" name="newRequest" value="yes" id="new">
                            </div>
                            <label for="new" class="text-right"> طلب جديد </label>
                        </div>
                        <div class="grid grid-cols-3 justify-between">
                            <label for="mod">Modification request of previous design </label>
                            <div class="in-checkbox mx-auto">
                                <input type="checkbox" name="modificationRequestOfPreviousDesign" value="yes"
                                    id="mod">
                                <label for="mod"> </label>
                            </div>
                            <label for="mod" class="text-right">طلب تعديل على تصميم سابق </label>
                        </div>

                        <div class="grid grid-cols-3 justify-between mt-2">
                            <label for="deliveryDate" class="whitespace-nowrap">Delivery date </label>
                            <input type="date" class="in-input w-full" id="deliveryDate" name="deliveryDate">
                            <label for="deliveryDate" class="whitespace-nowrap text-right"> تاريـخ الاحتيـاج
                            </label>
                        </div>
                        <div class="flex flex-col">
                            <label for="">&nbsp;</label>
                            <small class="text-secondary text-center">هذا الطلب للتصميم فقط حيث لا يشمل وقت
                                الطباعة
                                أو
                                التصنيع أو أية
                                آلية
                                تطبيق أخرى
                            </small>
                            <small class="text-secondary text-center">This request is for design only and does
                                not
                                include
                                printing
                                time,
                                manufacturing or any
                                other application
                                mechanism</small>

                        </div>
                    </div>


                    <div
                        class="bg-primary mt-4 px-4 py-2 font-bold text-md  text-white flex items-center justify-between gap-2">
                        <span>Justification for the Urgent Request
                        </span> <span>الطلب من الغرض</span>
                    </div>
                    <div class="grid grid-cols-1 gap-4 mt-2">
                        <div class="form-group">

                            <textarea placeholder="Purpose of the Request" id="purposeOfTheRequest" name="purposeOfTheRequest"
                                class="!h-[160px] in-input" cols="2" row="2"></textarea>
                        </div>
                    </div>

                    <div
                        class="bg-primary mt-4 px-4 py-2 font-bold text-md  text-white flex items-center justify-between gap-2">
                        <span>Purpose of the Request </span> <span>الطلب من الغرض</span>
                    </div>
                    <div class="grid grid-cols-1 gap-4 mt-2">
                        <div class="form-group">

                            <textarea placeholder="Purpose of the Request" id="purposeOfTheRequest" name="purposeOfTheRequest"
                                class="!h-[160px] in-input" cols="2" row="2"></textarea>
                        </div>
                    </div>

                    <div id="request">
                        <div
                            class="bg-primary mt-4 px-4 py-2 font-bold text-md  text-white flex items-center justify-between gap-2">
                            <span>REQUESTS </span> <span>الطلبات</span>
                        </div>
                        <div class="grid grid-cols-4 gap-4 mt-2">
                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                                <label for="vh" class="flex">Vehicle branding <br> تصميم المركبات </label>
                            </div>
                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Signage Design" id="signage">
                                <label for="signage" class="flex">Signage design <br> لوحات إرشادية </label>
                            </div>
                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Trophy / Gift Design"
                                    id="trophy">
                                <label for="trophy" class="flex">Trophy / Gift design <br> تصميم درع / هدية
                                </label>
                            </div>
                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Full New Corporate Identity"
                                    id="identity">
                                <label for="identity" class="flex">Full new corporate identity <br> هوية بصرية
                                    جديدة
                                </label>
                            </div>
                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Other Designs" id="other">
                                <label for="other" class="flex">Other designs <br> تصاميم أخرى </label>
                            </div>
                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Certificate" id="certificate">
                                <label for="certificate" class="flex">Certificate <br> تصميم الشهادات </label>
                            </div>
                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Presentation" id="presentation">
                                <label for="presentation" class="flex">Presentation <br> تصميم عروض تقديمية
                                </label>
                            </div>
                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Letterhead" id="letterhead">
                                <label for="letterhead" class="flex">Letterhead <br> تصميم أوراق المراسلات
                                </label>
                            </div>

                            <div class="form-group col-span-4">
                                <label for="brief" class="d-flex justify-content-between">
                                    <span>Brief</span>
                                    <span>شرح موجز عن الطلب</span>
                                </label>
                                <textarea class="in-input" cols="2" row="2" id="brief" name="brief" placeholder="Brief"></textarea>
                                <small class="text-secondary text-center">
                                    A meeting with department is required In the case of requesting a new corporate
                                    identity.
                                    <br>
                                    في حـال طلـب تصميـم هويـة بصريـة جديـدة يجب تحديـد اجتماع مـع الإدارة لمناقشـة
                                    الطلـب
                                    وتحديـد
                                    المتطلبات.
                                </small>
                            </div>
                            <div dir="rtl" class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500  p-1">


                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="popup[type]" value="1" id="popup">
                                        <label for="popup" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="popupContent" class="d-flex justify-content-between">
                                            <span>المحتوى</span>
                                            <span>Content</span> </label>
                                        <textarea class="in-input" cols="2" row="2" id="popupContent" name="popup[content]"
                                            placeholder="Content"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="specs"> المواصفات <br> Specifications </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="popup[size]" value="3x2 curved frame"
                                            id="3x2">
                                        <label for="3x2" class="flex">3x2 curved frame </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="popup[size]" value="3x3 curved frame"
                                            id="3x3">
                                        <label for="3x3" class="flex">3x3 curved frame </label>
                                        <img src="" alt="">
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="popup[size]" value="3x4 curved frame"
                                            id="3x4">
                                        <label for="3x4" class="flex">3x4 curved frame </label>
                                    </div>
                                </div>
                            </div>
                            <div dir="rtl" class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500  p-1">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="notebook[type]" value="1" id="notebook">
                                        <label for="notebook" class="flex">Notebook <br> تصميم دفاتر الملاحظات
                                        </label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="notebookContent" class="d-flex justify-content-between">
                                            <span>المحتوى</span>
                                            <span>Content</span> </label>
                                        <textarea class="in-input" cols="2" row="2" id="notebookContent" name="notebook[content]"
                                            placeholder="Content"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="specs"> المواصفات <br> Specifications </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="notebook[size]" value="A4 Vertical"
                                            id="verticalA4">
                                        <label for="verticalA4" class="block">
                                            A4 <br>
                                            Vertical طولي
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="notebook[size]" value="A4 Horizontal"
                                            id="horizontalA4">
                                        <label for="horizontalA4" class="block">
                                            A4 <br>
                                            Horizontal عرضي
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="notebook[size]" value="A5 Vertical"
                                            id="verticalA5">
                                        <label for="verticalA5" class="block">
                                            A5 <br>
                                            Vertical طولي
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="notebook[size]" value="A5 Horizontal"
                                            id="horizontalA5">
                                        <label for="horizontalA5" class="block">
                                            A5 <br>
                                            Horizontal عرضي
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div dir="rtl" class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500  p-1">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="flyer[type]" value="1" id="flyer">
                                        <label for="flyer" class="flex">Flyer <br> تصميم ورقة إعلانية (فلاير)
                                        </label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="flyerContent" class="d-flex justify-content-between">
                                            <span>المحتوى</span>
                                            <span>Content</span> </label>
                                        <textarea class="in-input" cols="2" row="2" id="flyerContent" name="flyer[content]"
                                            placeholder="Content"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="specs"> المواصفات <br> Specifications </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="flyer[size]" value="Vertical" id="vertical">
                                        <label for="vertical" class="block">
                                            Vertical طولي
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="flyer[size]" value="Horizontal"
                                            id="horizontal">
                                        <label for="horizontal" class="block">
                                            Horizontal عرضي
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="flyer[size]" value="Folded1" id="folded1">
                                        <label for="folded1" class="block">
                                            Folded مطوية
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="flyer[size]" value="Folded2" id="folded2">
                                        <label for="folded2" class="block">
                                            Folded مطوية
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div dir="rtl" class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500  p-1">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="rollUp[type]" value="1" id="rollUp">
                                        <label for="rollUp" class="flex">Roll-up <br> رول - آب</label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="rollUpContent" class="d-flex justify-content-between">
                                            <span>المحتوى</span>
                                            <span>Content</span> </label>
                                        <textarea class="in-input" cols="2" row="2" id="rollUpContent" name="rollUp[content]"
                                            placeholder="Content"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="specs"> المواصفات <br> Specifications </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="rollUp[size]" value="w100H200" id="w100H200">
                                        <label for="w100H200" class="block">
                                            العرض 100 سم <br>
                                            الطول 200 سم <br>
                                            Width 100 cm <br>
                                            X Height 200 cm
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="rollUp[size]" value="w85H200" id="w85H200">
                                        <label for="w85H200" class="block">
                                            العرض 85 سم <br>
                                            الطول 200 سم <br>
                                            Width 85 cm <br>
                                            X Height 200 cm
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div dir="rtl" class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500  p-1">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="brochure[type]" value="1" id="brochure">
                                        <label for="brochure" class="flex">Brochure <br> كتيب</label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="brochureContent" class="d-flex justify-content-between">
                                            <span>المحتوى</span>
                                            <span>Content</span> </label>
                                        <textarea class="in-input" cols="2" row="2" id="brochureContent" name="brochure[content]"
                                            placeholder="Content"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="specs"> المواصفات <br> Specifications </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="brochure[size]" value="Vertical"
                                            id="verticalBrochure">
                                        <label for="verticalBrochure" class="block">
                                            Vertical طولي
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="brochure[size]" value="Horizontal"
                                            id="horizontalBrochure">
                                        <label for="horizontalBrochure" class="block">
                                            Horizontal عرضي
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="brochure[size]" value="Number of pages"
                                            id="noOfPageBrochure">
                                        <label for="noOfPageBrochure" class="block">
                                            Number of pages
                                            عدد الصفحات
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="brochure[size]" value="Size"
                                            id="sizeBrochure">
                                        <label for="sizeBrochure" class="block">
                                            Size
                                            المقاس
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div dir="rtl" class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500  p-1">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="banner[type]" value="1" id="banner">
                                        <label for="banner" class="flex">Banner <br>خلفية (بانر) </label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="bannerContent" class="d-flex justify-content-between">
                                            <span>المحتوى</span>
                                            <span>Content</span> </label>
                                        <textarea class="in-input" cols="2" row="2" id="bannerContent" name="banner[content]"
                                            placeholder="Content"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="specs"> المواصفات <br> Specifications </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="banner[size]" value="Printed" id="printed">
                                        <label for="printed" class="block">
                                            Printed مطبوعة
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="banner[size]" value="Digital" id="digital">
                                        <label for="digital" class="block">
                                            Digital إليكترونية
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="banner[size]" value="Height" id="height">
                                        <label for="height" class="block">
                                            Height الارتفاع
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="banner[size]" value="Width" id="width">
                                        <label for="width" class="block">
                                            Width العرض
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div dir="rtl" class="col-span-2 grid grid-cols-2 gap-3 border border-gray-500  p-1">
                                <div class="col-span-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox" name="folderbusinessCardotherDesign[folderType]"
                                                value="1" id="folder">
                                            <label for="folder" class="flex">Folder <br> ملف</label>
                                        </div>
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox"
                                                name="folderbusinessCardotherDesign[businessCardType]" value="1"
                                                id="businessCard">
                                            <label for="businessCard" class="flex">business card
                                                <br> بطاقة عمل
                                            </label>
                                        </div>
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox"
                                                name="folderbusinessCardotherDesign[otherDesignType]" value="1"
                                                id="otherDesign">
                                            <label for="otherDesign" class="flex">Other Designs
                                                <br>تصاميم أخرى
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="folderbusinessCardotherDesignContent"
                                            class="d-flex justify-content-between">
                                            <span>شرح موجز عن الطلب</span>
                                            <span>Brief</span> </label>
                                        <textarea class="in-input" cols="2" row="2" id="folderbusinessCardotherDesignContent"
                                            name="folderbusinessCardotherDesign[content]" placeholder="Brief"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div dir="rtl" class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500  p-1">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="uniformDesign[type]" value="1"
                                            id="uniformDesign">
                                        <label for="uniformDesign" class="flex">Uniform Design
                                            <br>تصميم الملابس
                                        </label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="uniformDesignContent" class="d-flex justify-content-between">
                                            <span>شرح موجز عن الطلب </span>
                                            <span>Brief</span>
                                        </label>
                                        <textarea class="in-input" cols="2" row="2" id="uniformDesignContent" name="uniformDesign[content]"
                                            placeholder="Brief"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="specs"> المواصفات <br> Specifications </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="uniformDesign[size]" value="Shirt"
                                            id="shirt">
                                        <label for="shirt" class="block">
                                            Shirt
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="uniformDesign[size]" value="Cap"
                                            id="cap">
                                        <label for="cap" class="block">
                                            Cap
                                        </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="uniformDesign[size]" value="T-shirt"
                                            id="tshirt">
                                        <label for="tshirt" class="block">
                                            T-shirt
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="approval">
                        <div
                            class="bg-primary mt-4 px-4 py-2 font-bold text-md  text-white flex items-center justify-between gap-2">
                            <span>Requesting department approval </span> <span>اعتماد الإدارة الطالبة</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-2">
                            <div class="flex justify-between col-span-2">
                                <div class="in-checkbox col-span-2">
                                    <input type="checkbox" class="in-input" id="termsAndConditions"
                                        name="termsAndConditions" value="1">
                                    <label for="termsAndConditions">All terms have been read below
                                        تم</label>
                                </div>
                                <div class="in-checkbox ch-ar col-span-2" dir="rtl">
                                    <input type="checkbox" class="in-input" id="termsAndConditions"
                                        name="termsAndConditions" value="1">
                                    <label for="termsAndConditions"> أدناه الشروط جميع قراءة
                                        تم</label>
                                </div>
                            </div>
                            <div class="col-span-2 flex justify-between"><span>Department Manager</span> <span>
                                    مدير
                                    الإدارة
                                </span></div>
                            <div class=" border border-secondary -md p-[1px]">
                                <div class=" text-center p-4">Signature - التوقيع</div>
                                <div class="w-full h-[60px] bg-[#e9edff]">

                                </div>
                            </div>
                            <div class=" border border-secondary -md p-[1px]">
                                <div class="text-center p-4">Date - التاريخ</div>
                                <div class="w-full h-[60px] bg-[#e9edff]">

                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-primary mt-4 px-4 py-2 font-medium text-md -md justify-between text-white flex items-center gap-2">
                            <span>Markting &amp; communication department approval</span>
                            <span>اعتماد إدارة
                                التسويق و الاتصال </span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-2">

                            <div class=" border border-secondary -md  p-[1px]">
                                <div class="p-4 text-center">Signature - التوقيع</div>
                                <div class="w-full h-[60px] bg-[#e9edff]">

                                </div>
                            </div>
                            <div class=" border border-secondary -md p-[1px]">
                                <div class="p-4 text-center">Date - التاريخ</div>
                                <div class="w-full h-[60px] bg-[#e9edff]">

                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-primary mt-4 px-4 py-2 font-medium text-md -md justify-between text-white flex items-center gap-2">
                            <span>For design unit official use </span> <span>للاستعمال الرسمي من قبل وحدة
                                التصميم</span>
                        </div>
                        <div class="grid grid-cols-1 gap-4 mt-2">
                            <div class="form-group">
                                <label for="requestNumber" class="flex justify-between"><span>Request
                                        number</span>
                                    <span>رقم
                                        الطلب </span></label>
                                <textarea class="in-input" cols="2" row="2" name="requestNumber" id="requestNumber">FR-2506-001001</textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </tbody>
            <tfoot>
                <div class="print-footer">
                    <img src="{{ asset('assets/imgs/footer.png') }}" alt="">
                </div>
            </tfoot>
        </table>
    </div>

</body>

</html>

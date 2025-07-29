<script src="{{ asset('assets/js/tailwindcss.js') }}"></script>
<script src="{{ asset('assets/js/tailwind.js') }}"></script>
@yield('styleSheet')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@include('components.web.adminTailwind')
<style>
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
</style>
<!--begin::Main column-->
<input type="hidden" name="tab" class="activeTab" value="graphicDesing">

<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <div class="d-flex flex-column gap-7 gap-lg-10">

        <!--begin::General options-->
        <div class="card h-100 py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>{{ $head }}</h2>
                </div>
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-5">
                <div class="row">
                    <div class="bg-white px-6 py-4 shadow-lg  rounded-lg  mx-auto">
                        <div class="title border-2 rounded-lg border-primary mx-auto p-6">
                            <div class="font-semibold text-xl text-[#8d1942] text-center">إسـتـــمـــارة طلـــــب
                                تصـمـــيــــم
                            </div>

                            <div class="font-semibold text-xl text-[#8d1942] text-center">GRAPHIC DESIGN REQUEST</div>

                            <div class="grid grid-cols-2 gap-4 text-left mt-4 ">
                                <div>
                                    <div class=" col-span-2 mt-2 flex form-group">
                                        <label for="requestDate" class="flex justify-between"><span>Date Request</span>
                                            <span>تاريخ
                                                تقديم الطلب</span></label>
                                        <input type="date" class="in-input w-full"
                                            value="{{ $data['requestDate'] ?? old('requestDate') }}" id="requestDate"
                                            name="requestDate">
                                    </div>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="requestId" class="flex justify-between"><span>No. Requests</span>
                                        <span>رقم
                                            الطلب</span></label>
                                    <input type="text" class="in-input"
                                        value="{{ $data['requestId'] ?? old('requestId') }}" id="requestId"
                                        name="requestId" readonly="">
                                </div>

                                <div class="col-span-2">
                                    <div class="flex justify-between"><span>Type of the request</span>
                                        <span>الطــــــــلب
                                            طـــبيــــــــعة
                                        </span>
                                    </div>

                                    <div class="grid grid-cols-1 gap-4 mt-1">
                                        <div class="flex items-center justify-between w-[150px] mx-auto">
                                            <label for="urgent">Urgent </label>
                                            <div class="in-checkbox ch-ar">
                                                <input type="checkbox" name="urgencyType" value="urgent" id="urgent"
                                                    data-id="justification" class="subscribe"
                                                    {{ isset($data['urgencyType']) && $data['urgencyType'] === 'urgent' ? 'checked' : '' }}>
                                                <label for="urgent"></label>
                                            </div>
                                            <label for="urgent"> عاجــــل</label>
                                        </div>

                                        <div class="flex items-center justify-between w-[150px] mx-auto">
                                            <label for="normal">Normal</label>
                                            <div class="in-checkbox ch-ar">
                                                <input type="checkbox" name="urgencyType" value="normal" id="normal"
                                                    data-id="justification" class="subscribe"
                                                    {{ isset($data['urgencyType']) && $data['urgencyType'] === 'normal' ? 'checked' : '' }}>
                                                <label for="normal"> </label>
                                            </div>
                                            <label for="normal">عــــادي</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
                            <span>Applicant's Details </span> <span>معلومات مقدم الطلب</span>
                        </div>

                        <div class="grid grid-cols-1 gap-4 my-4">
                            <div class="flex gap-4 w-full items-center">
                                <label for="applicantName" class="whitespace-nowrap">Applicant name</label>
                                <input type="text" class="in-input w-full" id="applicantName" name="applicantName"
                                    placeholder="Applicant name / الاسم"
                                    value="{{ old('applicantName', $data['applicantName'] ?? '') }}">
                                <label for="applicantName">الاسم</label>
                            </div>

                            <div class="flex gap-4 w-full items-center">
                                <label for="applicantContactNumber" class="whitespace-nowrap">Applicant contact
                                    no.</label>
                                <input type="text" class="in-input w-full" id="applicantContactNumber"
                                    name="applicantContactNumber" placeholder="Applicant contact no. / الهاتف"
                                    value="{{ old('applicantContactNumber', $data['applicantContactNumber'] ?? '') }}">
                                <label for="applicantContactNumber">الهاتف</label>
                            </div>

                            <div class="flex gap-4 w-full items-center">
                                <label for="applicantEmail" class="whitespace-nowrap">Applicant e-mail</label>
                                <input type="email" class="in-input w-full" id="applicantEmail" name="applicantEmail"
                                    placeholder="Applicant e-mail / الإيميل"
                                    value="{{ old('applicantEmail', $data['applicantEmail'] ?? '') }}">
                                <label for="applicantEmail">الإيميل</label>
                            </div>

                            <div class="flex gap-4 w-full items-center">
                                <label for="department">Department</label>
                                <input type="text" class="in-input w-full" id="department" name="department"
                                    placeholder="Department / القسم"
                                    value="{{ old('department', $data['department'] ?? '') }}">
                                <label for="department">القسم</label>
                            </div>
                        </div>


                        <hr>

                        <div class="grid grid-cols-1 gap-4 my-4">
                            <div class="grid grid-cols-3 justify-between items-center">
                                <label for="areYouEmployee">Are you an Employee?</label>

                                <div class="mx-auto">
                                    <input type="checkbox" name="areYouEmployee" id="areYouEmployee" value="yes"
                                        class="w-5 h-5"
                                        {{ old('areYouEmployee', $data['areYouEmployee'] ?? '') === 'yes' ? 'checked' : '' }}>
                                </div>

                                <label for="areYouEmployee" class="text-right">هل أنت موظف؟</label>
                            </div>
                        </div>

                        <!-- Manager fields (hidden by default) -->
                        <div id="manager-fields"
                            class="grid grid-cols-2 gap-4 text-left mt-4 {{ !empty($data['managerName']) || !empty($data['managerEmail']) ? '' : 'hidden' }}">
                            <div>
                                <div class="col-span-2 mt-2 flex form-group">
                                    <label for="managerName" class="flex justify-between w-full">
                                        <span>Your Manager Name</span>
                                        <span>اسم مديرك</span>
                                    </label>
                                    <input type="text" class="in-input w-full" id="managerName"
                                        name="managerName"
                                        value="{{ old('managerName', $data['managerName'] ?? '') }}"
                                        placeholder="Your Manager Name / اسم مديرك">
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <label for="managerEmail" class="flex justify-between">
                                    <span>Your Manager Email</span>
                                    <span>البريد الإلكتروني لمديرك</span>
                                </label>
                                <input type="text" class="in-input" id="managerEmail" name="managerEmail"
                                    value="{{ old('managerEmail', $data['managerEmail'] ?? '') }}"
                                    placeholder="Your Manager Email / البريد الإلكتروني لمديرك">
                            </div>
                        </div>


                        <div
                            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex justify-between items-center gap-2">
                            <span>Request Details </span> <span>تفاصيل الطلب</span>
                        </div>
                        <div class="grid grid-cols-1 gap-4 mt-2">
                            <div class="grid grid-cols-3 justify-between items-center">
                                <label for="new">New request </label>
                                <div class="mx-auto">
                                    <label for="new"> </label>
                                    <input type="checkbox" name="newRequest" value="yes" id="new"
                                        class="w-5 h-5"
                                        {{ !empty($data['newRequest']) && $data['newRequest'] === 'yes' ? 'checked' : '' }}>
                                </div>
                                <label for="new" class="text-right"> طلب جديد </label>
                            </div>

                            <div class="grid grid-cols-3 justify-between items-center">
                                <label for="mod">Modification request of previous design </label>
                                <div class="mx-auto">
                                    <input type="checkbox" name="modificationRequestOfPreviousDesign" value="yes"
                                        class="w-5 h-5" id="mod"
                                        {{ !empty($data['modificationRequestOfPreviousDesign']) && $data['modificationRequestOfPreviousDesign'] === 'yes' ? 'checked' : '' }}>
                                    <label for="mod"> </label>
                                </div>
                                <label for="mod" class="text-right">طلب تعديل على تصميم سابق </label>
                            </div>

                            <div class="grid grid-cols-3 justify-between mt-2">
                                <label for="deliveryDate" class="whitespace-nowrap">Delivery date </label>
                                <input type="date" class="in-input w-full" id="deliveryDate" name="deliveryDate"
                                    value="{{ old('deliveryDate', $data['deliveryDate'] ?? '') }}">
                                <label for="deliveryDate" class="whitespace-nowrap text-right"> تاريـخ الاحتيـاج
                                </label>
                            </div>

                            <div class="flex flex-col">
                                <label for="">&nbsp;</label>
                                <small class="text-[#8d1942] text-center">هذا الطلب للتصميم فقط حيث لا يشمل وقت الطباعة
                                    أو
                                    التصنيع أو أية
                                    آلية
                                    تطبيق أخرى
                                </small>
                                <small class="text-[#8d1942] text-center">This request is for design only and does not
                                    include
                                    printing
                                    time,
                                    manufacturing or any
                                    other application
                                    mechanism</small>
                            </div>
                        </div>

                        <div id="justification" style="display: none">
                            <div
                                class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
                                <span>Justification for the Urgent Request</span> <span>العاجل الطلب مبررات</span>
                            </div>
                            <div class="grid grid-cols-1 gap-4 mt-2">
                                <div class="form-group">
                                    <textarea class="in-input" id="justificationForTheUrgentRequest" name="justificationForTheUrgentRequest"
                                        cols="2" rows="2" placeholder="Justification for the Urgent Request">{{ old('justificationForTheUrgentRequest', $data['justificationForTheUrgentRequest'] ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
                            <span>Purpose of the Request</span> <span>الطلب من الغرض</span>
                        </div>
                        <div class="grid grid-cols-1 gap-4 mt-2">
                            <div class="form-group">
                                <textarea placeholder="Purpose of the Request" id="purposeOfTheRequest" name="purposeOfTheRequest" class="in-input"
                                    cols="2" rows="2">{{ old('purposeOfTheRequest', $data['purposeOfTheRequest'] ?? '') }}</textarea>
                            </div>
                        </div>


                        <div
                            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
                            <span>REQUESTS </span> <span>الطلبات</span>
                        </div>
                        <div class="grid grid-cols-4 gap-4 mt-2">
                            @php
                                $requestTypeValues = $data['requestType'] ?? []; // already an array
                            @endphp

                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh"
                                    {{ in_array('Vehicle Branding', $requestTypeValues) ? 'checked' : '' }}>
                                <label for="vh" class="flex">Vehicle branding <br> تصميم المركبات </label>
                            </div>

                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Signage Design" id="signage"
                                    {{ in_array('Signage Design', $requestTypeValues) ? 'checked' : '' }}>
                                <label for="signage" class="flex">Signage design <br> لوحات إرشادية </label>
                            </div>
                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Trophy / Gift Design"
                                    id="trophy"
                                    {{ in_array('Trophy / Gift Design', $requestTypeValues) ? 'checked' : '' }}>
                                <label for="trophy" class="flex">Trophy / Gift design <br> تصميم درع / هدية
                                </label>
                            </div>

                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Full New Corporate Identity"
                                    id="identity"
                                    {{ in_array('Full New Corporate Identity', $requestTypeValues) ? 'checked' : '' }}>
                                <label for="identity" class="flex">Full new corporate identity <br> هوية بصرية جديدة
                                </label>
                            </div>

                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Other Designs" id="other"
                                    {{ in_array('Other Designs', $requestTypeValues) ? 'checked' : '' }}>
                                <label for="other" class="flex">Other designs <br> تصاميم أخرى </label>
                            </div>

                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Certificate" id="certificate"
                                    {{ in_array('Certificate', $requestTypeValues) ? 'checked' : '' }}>
                                <label for="certificate" class="flex">Certificate <br> تصميم الشهادات </label>
                            </div>

                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Presentation" id="presentation"
                                    {{ in_array('Presentation', $requestTypeValues) ? 'checked' : '' }}>
                                <label for="presentation" class="flex">Presentation <br> تصميم عروض تقديمية </label>
                            </div>

                            <div class="in-checkbox ch-ar">
                                <input type="checkbox" name="requestType[]" value="Letterhead" id="letterhead"
                                    {{ in_array('Letterhead', $requestTypeValues) ? 'checked' : '' }}>
                                <label for="letterhead" class="flex">Letterhead <br> تصميم أوراق المراسلات </label>
                            </div>

                            <div class="form-group col-span-4">
                                <label for="brief" class="d-flex justify-content-between">
                                    <span>Brief</span>
                                    <span>شرح موجز عن الطلب</span>
                                </label>
                                <textarea class="in-input" cols="2" rows="2" id="brief" name="brief" placeholder="Brief">{{ old('brief', $data['brief'] ?? '') }}</textarea>
                                <small class="text-[#8d1942] text-center">
                                    A meeting with department is required in the case of requesting a new corporate
                                    identity.
                                    <br>
                                    في حـال طلـب تصميـم هويـة بصريـة جديـدة يجب تحديـد اجتماع مـع الإدارة لمناقشـة
                                    الطلـب وتحديـد المتطلبات.
                                </small>
                            </div>

                            @php
                                $popup = $data['popup'] ?? [];
                                $popupType = $popup['type'] ?? null;
                                $popupContent = $popup['content'] ?? '';
                                $selectedSizes = $popup['size'] ?? [];
                                if (!is_array($selectedSizes)) {
                                    $selectedSizes = [$selectedSizes];
                                }
                            @endphp
                            <div dir="rtl"
                                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="popup[type]" value="1" id="popup"
                                            {{ $popupType == '1' ? 'checked' : '' }}>
                                        <label for="popup" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="popupContent" class="d-flex justify-content-between">
                                            <span>Content</span>
                                            <span>المحتوى</span>
                                        </label>
                                        <textarea class="in-input" cols="2" rows="2" id="popupContent" name="popup[content]"
                                            placeholder="Content">{{ old('popup.content', $popupContent) }}</textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div>Specifications <br> المواصفات</div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="popup[size][]" value="3x2 curved frame"
                                            id="3x2"
                                            {{ in_array('3x2 curved frame', $selectedSizes) ? 'checked' : '' }}>
                                        <label for="3x2" class="flex">3x2 curved frame </label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="popup[size][]" value="3x3 curved frame"
                                            id="3x3"
                                            {{ in_array('3x3 curved frame', $selectedSizes) ? 'checked' : '' }}>
                                        <label for="3x3" class="flex">3x3 curved frame </label>
                                        <img src="" alt="">
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="popup[size][]" value="3x4 curved frame"
                                            id="3x4"
                                            {{ in_array('3x4 curved frame', $selectedSizes) ? 'checked' : '' }}>
                                        <label for="3x4" class="flex">3x4 curved frame </label>
                                    </div>
                                </div>
                            </div>

                            @php
                                $notebook = $data['notebook'] ?? [];
                                $notebookType = $notebook['type'] ?? null;
                                $notebookContent = $notebook['content'] ?? '';
                                $selectedNotebookSizes = $notebook['size'] ?? [];
                                if (!is_array($selectedNotebookSizes)) {
                                    $selectedNotebookSizes = [$selectedNotebookSizes];
                                }
                            @endphp

                            <div dir="rtl"
                                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="notebook[type]" value="1" id="notebook"
                                            {{ $notebookType == '1' ? 'checked' : '' }}>
                                        <label for="notebook" class="flex">Notebook <br> تصميم دفاتر
                                            الملاحظات</label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="notebookContent" class="d-flex justify-content-between">
                                            <span>Content</span>
                                            <span>المحتوى</span>
                                        </label>
                                        <textarea class="in-input" cols="2" rows="2" id="notebookContent" name="notebook[content]"
                                            placeholder="Content">{{ old('notebook.content', $notebookContent) }}</textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div>Specifications <br> المواصفات</div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="notebook[size][]" value="A4 Vertical"
                                            id="verticalA4"
                                            {{ in_array('A4 Vertical', $selectedNotebookSizes) ? 'checked' : '' }}>
                                        <label for="verticalA4" class="block">
                                            A4 <br>
                                            Vertical طولي
                                        </label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="notebook[size][]" value="A4 Horizontal"
                                            id="horizontalA4"
                                            {{ in_array('A4 Horizontal', $selectedNotebookSizes) ? 'checked' : '' }}>
                                        <label for="horizontalA4" class="block">
                                            A4 <br>
                                            Horizontal عرضي
                                        </label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="notebook[size][]" value="A5 Vertical"
                                            id="verticalA5"
                                            {{ in_array('A5 Vertical', $selectedNotebookSizes) ? 'checked' : '' }}>
                                        <label for="verticalA5" class="block">
                                            A5 <br>
                                            Vertical طولي
                                        </label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="notebook[size][]" value="A5 Horizontal"
                                            id="horizontalA5"
                                            {{ in_array('A5 Horizontal', $selectedNotebookSizes) ? 'checked' : '' }}>
                                        <label for="horizontalA5" class="block">
                                            A5 <br>
                                            Horizontal عرضي
                                        </label>
                                    </div>
                                </div>
                            </div>

                            @php
                                $flyer = $data['flyer'] ?? [];
                                $flyerType = $flyer['type'] ?? null;
                                $flyerContent = $flyer['content'] ?? '';
                                $selectedFlyerSizes = $flyer['size'] ?? [];
                                if (!is_array($selectedFlyerSizes)) {
                                    $selectedFlyerSizes = $selectedFlyerSizes ? [$selectedFlyerSizes] : [];
                                }
                            @endphp

                            <div dir="rtl"
                                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="flyer[type]" value="1" id="flyer"
                                            {{ $flyerType == '1' ? 'checked' : '' }}>
                                        <label for="flyer" class="flex">Flyer <br> تصميم ورقة إعلانية
                                            (فلاير)</label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="flyerContent" class="d-flex justify-content-between">
                                            <span>Content</span>
                                            <span>المحتوى</span>
                                        </label>
                                        <textarea class="in-input" cols="2" rows="2" id="flyerContent" name="flyer[content]"
                                            placeholder="Content">{{ old('flyer.content', $flyerContent) }}</textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div>Specifications <br> المواصفات</div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="flyer[size][]" value="Vertical" id="vertical"
                                            {{ in_array('Vertical', $selectedFlyerSizes) ? 'checked' : '' }}>
                                        <label for="vertical" class="block">
                                            Vertical طولي
                                        </label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="flyer[size][]" value="Horizontal"
                                            id="horizontal"
                                            {{ in_array('Horizontal', $selectedFlyerSizes) ? 'checked' : '' }}>
                                        <label for="horizontal" class="block">
                                            Horizontal عرضي
                                        </label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="flyer[size][]" value="Folded1" id="folded1"
                                            {{ in_array('Folded1', $selectedFlyerSizes) ? 'checked' : '' }}>
                                        <label for="folded1" class="block">
                                            Folded مطوية
                                        </label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="flyer[size][]" value="Folded2" id="folded2"
                                            {{ in_array('Folded2', $selectedFlyerSizes) ? 'checked' : '' }}>
                                        <label for="folded2" class="block">
                                            Folded مطوية
                                        </label>
                                    </div>
                                </div>
                            </div>

                            @php
                                $rollUp = $data['rollUp'] ?? [];
                                $rollUpType = $rollUp['type'] ?? null;
                                $rollUpContent = $rollUp['content'] ?? '';
                                $selectedRollUpSizes = $rollUp['size'] ?? [];
                                if (!is_array($selectedRollUpSizes)) {
                                    $selectedRollUpSizes = $selectedRollUpSizes ? [$selectedRollUpSizes] : [];
                                }
                            @endphp

                            <div dir="rtl"
                                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="rollUp[type]" value="1" id="rollUp"
                                            {{ $rollUpType == '1' ? 'checked' : '' }}>
                                        <label for="rollUp" class="flex">Roll-up <br> رول - آب</label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="rollUpContent" class="d-flex justify-content-between">
                                            <span>Content</span>
                                            <span>المحتوى</span>
                                        </label>
                                        <textarea class="in-input" cols="2" rows="2" id="rollUpContent" name="rollUp[content]"
                                            placeholder="Content">{{ old('rollUp.content', $rollUpContent) }}</textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div>Specifications <br> المواصفات</div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="rollUp[size][]" value="w100H200" id="w100H200"
                                            {{ in_array('w100H200', $selectedRollUpSizes) ? 'checked' : '' }}>
                                        <label for="w100H200" class="block">
                                            العرض 100 سم <br>
                                            الطول 200 سم <br>
                                            Width 100 cm <br>
                                            X Height 200 cm
                                        </label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="rollUp[size][]" value="w85H200" id="w85H200"
                                            {{ in_array('w85H200', $selectedRollUpSizes) ? 'checked' : '' }}>
                                        <label for="w85H200" class="block">
                                            العرض 85 سم <br>
                                            الطول 200 سم <br>
                                            Width 85 cm <br>
                                            X Height 200 cm
                                        </label>
                                    </div>
                                </div>
                            </div>

                            @php
                                $brochure = $data['brochure'] ?? [];
                                $brochureType = $brochure['type'] ?? null;
                                $brochureContent = $brochure['content'] ?? '';
                                $selectedBrochureSizes = $brochure['size'] ?? [];
                                if (!is_array($selectedBrochureSizes)) {
                                    $selectedBrochureSizes = $selectedBrochureSizes ? [$selectedBrochureSizes] : [];
                                }
                            @endphp

                            <div dir="rtl"
                                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="brochure[type]" value="1" id="brochure"
                                            {{ $brochureType == '1' ? 'checked' : '' }}>
                                        <label for="brochure" class="flex">Brochure <br> كتيب</label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="brochureContent" class="d-flex justify-content-between">
                                            <span>Content</span>
                                            <span>المحتوى</span>
                                        </label>
                                        <textarea class="in-input" cols="2" rows="2" id="brochureContent" name="brochure[content]"
                                            placeholder="Content">{{ old('brochure.content', $brochureContent) }}</textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div>Specifications <br> المواصفات</div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="brochure[size][]" value="Vertical"
                                            id="verticalBrochure"
                                            {{ in_array('Vertical', $selectedBrochureSizes) ? 'checked' : '' }}>
                                        <label for="verticalBrochure" class="block">Vertical طولي</label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="brochure[size][]" value="Horizontal"
                                            id="horizontalBrochure"
                                            {{ in_array('Horizontal', $selectedBrochureSizes) ? 'checked' : '' }}>
                                        <label for="horizontalBrochure" class="block">Horizontal عرضي</label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="brochure[size][]" value="Number of pages"
                                            id="noOfPageBrochure"
                                            {{ in_array('Number of pages', $selectedBrochureSizes) ? 'checked' : '' }}>
                                        <label for="noOfPageBrochure" class="block">
                                            Number of pages<br>عدد الصفحات
                                        </label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="brochure[size][]" value="Size"
                                            id="sizeBrochure"
                                            {{ in_array('Size', $selectedBrochureSizes) ? 'checked' : '' }}>
                                        <label for="sizeBrochure" class="block">
                                            Size<br>المقاس
                                        </label>
                                    </div>

                                </div>
                            </div>

                            @php
                                $banner = $data['banner'] ?? [];
                                $bannerType = $banner['type'] ?? null;
                                $bannerContent = $banner['content'] ?? '';
                                $selectedBannerSizes = $banner['size'] ?? [];
                                if (!is_array($selectedBannerSizes)) {
                                    $selectedBannerSizes = $selectedBannerSizes ? [$selectedBannerSizes] : [];
                                }
                            @endphp

                            <div dir="rtl"
                                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="banner[type]" value="1" id="banner"
                                            {{ $bannerType == '1' ? 'checked' : '' }}>
                                        <label for="banner" class="flex">Banner <br>خلفية (بانر)</label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="bannerContent" class="d-flex justify-content-between">
                                            <span>Content</span>
                                            <span>المحتوى</span>
                                        </label>
                                        <textarea class="in-input" cols="2" rows="2" id="bannerContent" name="banner[content]"
                                            placeholder="Content">{{ old('banner.content', $bannerContent) }}</textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div>Specifications <br> المواصفات</div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="banner[size][]" value="Printed" id="printed"
                                            {{ in_array('Printed', $selectedBannerSizes) ? 'checked' : '' }}>
                                        <label for="printed" class="block">Printed مطبوعة</label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="banner[size][]" value="Digital" id="digital"
                                            {{ in_array('Digital', $selectedBannerSizes) ? 'checked' : '' }}>
                                        <label for="digital" class="block">Digital إليكترونية</label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="banner[size][]" value="Height" id="height"
                                            {{ in_array('Height', $selectedBannerSizes) ? 'checked' : '' }}>
                                        <label for="height" class="block">Height الارتفاع</label>
                                    </div>

                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="banner[size][]" value="Width" id="width"
                                            {{ in_array('Width', $selectedBannerSizes) ? 'checked' : '' }}>
                                        <label for="width" class="block">Width العرض</label>
                                    </div>
                                </div>
                            </div>

                            @php
                                $fbod = $data['folderbusinessCardotherDesign'] ?? [];
                                $folderTypeChecked = !empty($fbod['folderType']) && $fbod['folderType'] == '1';
                                $businessCardTypeChecked =
                                    !empty($fbod['businessCardType']) && $fbod['businessCardType'] == '1';
                                $otherDesignTypeChecked =
                                    !empty($fbod['otherDesignType']) && $fbod['otherDesignType'] == '1';
                                $fbodContent = $fbod['content'] ?? '';
                            @endphp

                            <div dir="rtl"
                                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                <div class="col-span-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox" name="folderbusinessCardotherDesign[folderType]"
                                                value="1" id="folder"
                                                {{ $folderTypeChecked ? 'checked' : '' }}>
                                            <label for="folder" class="flex">Folder <br> ملف</label>
                                        </div>
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox"
                                                name="folderbusinessCardotherDesign[businessCardType]" value="1"
                                                id="businessCard" {{ $businessCardTypeChecked ? 'checked' : '' }}>
                                            <label for="businessCard" class="flex">business card <br> بطاقة
                                                عمل</label>
                                        </div>
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox"
                                                name="folderbusinessCardotherDesign[otherDesignType]" value="1"
                                                id="otherDesign" {{ $otherDesignTypeChecked ? 'checked' : '' }}>
                                            <label for="otherDesign" class="flex">Other Designs <br> تصاميم
                                                أخرى</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="folderbusinessCardotherDesignContent"
                                            class="d-flex justify-content-between">
                                            <span>Brief</span>
                                            <span>شرح موجز عن الطلب</span>
                                        </label>
                                        <textarea class="in-input" cols="2" rows="2" id="folderbusinessCardotherDesignContent"
                                            name="folderbusinessCardotherDesign[content]" placeholder="Brief">{{ old('folderbusinessCardotherDesign.content', $fbodContent) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            @php
                                $ud = $data['uniformDesign'] ?? [];
                                $typeChecked = !empty($ud['type']) && $ud['type'] == '1';
                                $sizes = $ud['size'] ?? [];
                                if (!is_array($sizes)) {
                                    $sizes = [$sizes];
                                }
                                $content = $ud['content'] ?? '';
                            @endphp

                            <div dir="rtl"
                                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                <div class="col-span-2">
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="uniformDesign[type]" value="1"
                                            id="uniformDesign" {{ $typeChecked ? 'checked' : '' }}>
                                        <label for="uniformDesign" class="flex">Uniform Design <br>تصميم
                                            الملابس</label>
                                    </div>
                                    <div class="form-group col-span-4">
                                        <label for="uniformDesignContent" class="d-flex justify-content-between">
                                            <span>Brief</span>
                                            <span>شرح موجز عن الطلب </span>
                                        </label>
                                        <textarea class="in-input" cols="2" rows="2" id="uniformDesignContent" name="uniformDesign[content]"
                                            placeholder="Brief">{{ old('uniformDesign.content', $content) }}</textarea>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div>Specifications <br> المواصفات</div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="uniformDesign[size][]" value="Shirt"
                                            id="shirt" {{ in_array('Shirt', $sizes) ? 'checked' : '' }}>
                                        <label for="shirt" class="block">Shirt</label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="uniformDesign[size][]" value="Cap"
                                            id="cap" {{ in_array('Cap', $sizes) ? 'checked' : '' }}>
                                        <label for="cap" class="block">Cap</label>
                                    </div>
                                    <div class="in-checkbox ch-ar">
                                        <input type="checkbox" name="uniformDesign[size][]" value="T-shirt"
                                            id="tshirt" {{ in_array('T-shirt', $sizes) ? 'checked' : '' }}>
                                        <label for="tshirt" class="block">T-shirt</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div
                            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
                            <span>Requesting department approval </span> <span>اعتماد الإدارة الطالبة</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-2">
                            @php
                                $termsChecked = !empty($data['termsAndConditions']);
                            @endphp

                            <div class="flex justify-between col-span-2">
                                <div class="in-checkbox col-span-2">
                                    <input type="checkbox" class="in-input" id="termsAndConditions"
                                        name="termsAndConditions" value="1"
                                        {{ $termsChecked ? 'checked' : '' }}>
                                    <label for="termsAndConditions">All terms have been read below تم</label>
                                </div>
                                <div class="in-checkbox ch-ar col-span-2" dir="rtl">
                                    <input type="checkbox" class="in-input" id="termsAndConditionsAr"
                                        name="termsAndConditions" value="1"
                                        {{ $termsChecked ? 'checked' : '' }}>
                                    <label for="termsAndConditionsAr">أدناه الشروط جميع قراءة تم</label>
                                </div>
                            </div>
                            <div class="col-span-2 flex justify-between">
                                <span>Department Manager</span>
                                <span> مدير
                                    الإدارة
                                </span>
                            </div>

                            <div class="border border-secondary rounded-md p-4">
                                <div class="mb-4">Signature - التوقيع</div>
                                <button type="button" class="clear-btn" data-target="signature-pad-1">Clear</button>
                                <canvas id="signature-pad-1" width="400" height="150"
                                    style="border:1px solid #ccc;"></canvas>
                                <input type="hidden" name="departmentManager[signature]" id="managerSignature">
                            </div>

                            <div class="border border-secondary rounded-md p-4">
                                <div class="mb-4">Date - التاريخ</div>
                                <input type="date" name="departmentManager[date]" class="in-input"
                                    value="{{ old('departmentManager.date', $data['departmentManager']['date'] ?? '') }}">
                            </div>
                        </div>

                        <div
                            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md justify-between text-white flex items-center gap-2">
                            <span>Markting & communication department approval</span>
                            <span>اعتماد إدارة
                                التسويق و الاتصال </span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-2">
                            {{-- <div class="col-span-2">Department Manager / مدير الإدارة </div> --}}
                            <div class="border border-secondary rounded-md p-4 mt-4">
                                <div class="mb-4">Signature - التوقيع</div>
                                <button type="button" class="clear-btn" data-target="signature-pad-2">Clear</button>
                                <canvas id="signature-pad-2" width="400" height="150"
                                    style="border:1px solid #ccc;"></canvas>
                                <input type="hidden" name="marketing[signature]" id="marketingSignature">
                            </div>

                            <div class="border border-secondary rounded-md p-4">
                                <div class="mb-4">Date - التاريخ</div>
                                <input type="date" name="marketing[date]" class="in-input"
                                    value="{{ old('marketing.date', $data['marketing']['date'] ?? '') }}">
                            </div>
                        </div>

                        <div
                            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md justify-between text-white flex items-center gap-2">
                            <span>For design unit official use </span> <span>للاستعمال الرسمي من قبل وحدة
                                التصميم</span>
                        </div>
                        <div class="grid grid-cols-1 gap-4 mt-2">
                            <div class="form-group">
                                <label for="requestNumber" class="flex justify-between"><span>Request number</span>
                                    <span>رقم
                                        الطلب </span></label>
                                <textarea class="in-input" cols="2" row="2" name="requestNumber" id="requestNumber">{{ $data->requestId }}</textarea>
                            </div>
                        </div>
                        {{-- <div class="flex justify-end mt-4">
                                <button class="btn-blue">Submit</button>
                            </div> --}}
                    </div>

                </div>
                <!--end::Card header-->
            </div>
            <!--end::General options-->
        </div>

        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="{{ request()->url() }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                Cancel
            </a>
            <!--end::Button-->

            <!--begin::Button-->
            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                <span class="indicator-label">
                    Save Changes
                </span>
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
            <!--end::Button-->
        </div>
    </div>
    <!--end::Main column-->



    @section('javaScript')
        <script>
            $(document).ready(function() {
                $(document).on("click", "a[href='.directorMessages']", function(event) {
                    event.preventDefault();

                    const encryptData = $(this).attr('data-director');
                    // console.log(encryptData);

                    const decryptData = JSON.parse(atob(encryptData));
                    // console.log(decryptData);
                    $("#name").html(decryptData.nameEn);
                    $("#name2").html(decryptData.nameEn);
                    $("#title").html(decryptData.titleEn);
                    $("#desc").html(decryptData.descEn);
                    $("#logo").attr('src', decryptData.logo);
                    $("#logo").attr('alt', decryptData.logo);
                });

                $(document).on('change', '.subscribe', function() {
                    $('.subscribe').prop('checked', false);
                    $(this).prop('checked', true);
                })


                $(document).on('change', 'input[name="urgencyType"]', function() {
                    let id = $(this).data('id');
                    let value = $(this).val();

                    if (value === 'urgent') {
                        $("#" + id).show();
                    } else {
                        $("#" + id).hide();
                    }
                });

            });

            const employeeCheckbox = document.getElementById('areYouEmployee');
            const managerFields = document.getElementById('manager-fields');

            employeeCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    managerFields.classList.remove('hidden');
                } else {
                    managerFields.classList.add('hidden');
                }
            });

            // Optional: keep state after page reload (useful on validation errors)
            window.addEventListener('DOMContentLoaded', () => {
                if (employeeCheckbox.checked) {
                    managerFields.classList.remove('hidden');
                }
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const deptSig = @json($data['departmentManager']['signature'] ?? '');
                const marketingSig = @json($data['marketing']['signature'] ?? '');

                if (deptSig) {
                    const img = new Image();
                    img.onload = () => {
                        const canvas = document.getElementById('signature-pad-1');
                        const ctx = canvas.getContext('2d');
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                        signaturePads['signature-pad-1'].fromDataURL(deptSig);
                    };
                    img.src = deptSig;
                }

                if (marketingSig) {
                    const img = new Image();
                    img.onload = () => {
                        const canvas = document.getElementById('signature-pad-2');
                        const ctx = canvas.getContext('2d');
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                        signaturePads['signature-pad-2'].fromDataURL(marketingSig);
                    };
                    img.src = marketingSig;
                }
            });




            const signaturePads = {
                'signature-pad-1': new SignaturePad(document.getElementById('signature-pad-1')),
                'signature-pad-2': new SignaturePad(document.getElementById('signature-pad-2'))
            };

            // Handle clear buttons
            document.querySelectorAll('.clear-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const target = this.getAttribute('data-target');
                    signaturePads[target].clear();
                });
            });

            // On form submit, store base64 signatures in hidden inputs
            document.querySelector('form').addEventListener('submit', function(e) {
                let allValid = true;

                if (!signaturePads['signature-pad-1'].isEmpty()) {
                    document.getElementById('managerSignature').value = signaturePads['signature-pad-1'].toDataURL();
                } else {
                    alert("Please provide Manager's signature.");
                    allValid = false;
                }

                if (!signaturePads['signature-pad-2'].isEmpty()) {
                    document.getElementById('marketingSignature').value = signaturePads['signature-pad-2'].toDataURL();
                } else {
                    alert("Please provide Marketing's signature.");
                    allValid = false;
                }

                if (!allValid) {
                    e.preventDefault(); // stop form submission if any signature is missing
                }
            });
        </script>
    @endsection

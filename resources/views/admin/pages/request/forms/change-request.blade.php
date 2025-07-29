<script src="{{ asset('assets/js/tailwindcss.js') }}"></script>
<script src="{{ asset('assets/js/tailwind.js') }}"></script>
@yield('styleSheet')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@include('components.web.adminTailwind')
<input type="hidden" name="tab" class="activeTab" value="changeReq">
<input type="hidden" value="{{ $data['requestId'] ?? old('requestId') }}" name="requestId">

<!--begin::Main column-->

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
                    <div class=" bg-white px-6 py-4 shadow-lg  rounded-lg  mx-auto max-w-[700px]  ">
                        <div
                            class="bg-secondary mt-4 px-4 py-2 font-semibold text-md uppercase rounded-md text-white flex items-center justify-center gap-2">
                            <span cl>Change Request to Production </span>
                            {{-- <span class="font-shubuk">معلومات مقدم الطلب</span> --}}
                        </div>

                        <div class="grid grid-cols-1 gap-4 my-4">
                            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                                <label for="namechange" class="whitespace-nowrap col-span-2">Name of the change:
                                </label>
                                <input type="text" class="in-input w-full col-span-3"
                                    value="{{ $data['namechange'] ?? old('namechange') }}" id="namechange"
                                    name="namechange" placeholder="">
                            </div>
                            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                                <label for="nameMaker" class="whitespace-nowrap col-span-2">Name of the maker: </label>
                                <input type="text" class="in-input w-full col-span-3" id="nameMaker" name="nameMaker"
                                    value="{{ $data['nameMaker'] ?? old('nameMaker') }}" placeholder="">
                            </div>
                            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                                <label for="nameChecker" class="whitespace-nowrap col-span-2">Name of the checker:
                                </label>
                                <input type="text" class="in-input w-full col-span-3" id="nameChecker"
                                    value="{{ $data['nameChecker'] ?? old('nameChecker') }}" name="nameChecker"
                                    placeholder="">
                            </div>

                            <div class="form-group ">
                                <label for="brief" class="d-flex justify-content-between">
                                    <span>Description of the change: </span>
                                    {{-- <span class="font-shubuk">شرح موجز عن الطلب</span> --}}
                                </label>
                                <textarea class="in-input" cols="2" row="2" id="brief" name="brief"
                                    value="{{ $data['brief'] ?? old('brief') }}" placeholder="Description of the change">
                                {{ $data['brief'] ?? old('brief') }}</textarea>
                            </div>
                            <div class="grid grid-cols-5 gap-4 w-full ">
                                <div class="whitespace-nowrap col-span-2">Implementation risks:</div>
                                <div class="radioButton">

                                    <input type="radio" name="risks" value="1" id="high"
                                        {{ isset($data['risks']) && $data['risks'] === '1' ? 'checked' : '' }}>
                                    <label for="high">High</label>
                                </div>
                                <div class="radioButton">
                                    <input type="radio" name="risks" value="2" id="medium"
                                        {{ isset($data['risks']) && $data['risks'] === '2' ? 'checked' : '' }} F>
                                    <label for="medium">Medium</label>
                                </div>
                                <div class="radioButton">
                                    <input type="radio" name="risks" value="3" id="low"
                                        {{ isset($data['risks']) && $data['risks'] === '3' ? 'checked' : '' }}>
                                    <label for="low">Low</label>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="scenarios" class="d-flex justify-content-between">
                                    <span>Test scenarios: </span>
                                    {{-- <span class="font-shubuk">شرح موجز عن الطلب</span> --}}
                                </label>
                                <textarea class="in-input" cols="2" row="2" id="scenarios" name="scenarios" placeholder="Test scenarios">

                                    {{ $data['scenarios'] ?? old('scenarios') }}
                                </textarea>
                            </div>
                            <div class="form-group ">
                                <label for="process" class="d-flex justify-content-between">
                                    <span>Fall back process in case of issues:: </span>
                                    {{-- <span class="font-shubuk">شرح موجز عن الطلب</span> --}}
                                </label>
                                <textarea class="in-input" cols="2" row="2" id="process" name="process"
                                    value="{{ $data['process'] ?? old('process') }}" placeholder="Fall back process in case of issues">
                                {{ $data['process'] ?? old('process') }}</textarea>
                            </div>

                            <div class="grid grid-cols-5 gap-4 w-full">
                                <div class="font-semibold col-span-2">Proposed time/date of the change</div>
                                <div class="col-span-3 grid grid-cols-2 gap-4">
                                    <div class="flex items-center gap-2">
                                        <label for="">Date:</label>
                                        <input type="date" class="in-input w-full" name="date"
                                            value="{{ $data['date'] ?? old('date') }}">
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <label for="">Time:</label>
                                        <input type="time" class="in-input w-full" name="time"
                                            value="{{ $data['time'] ?? old('time') }}">
                                    </div>
                                </div>
                            </div>

                            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                                <label for="department" class="whitespace-nowrap col-span-2">Requester Department:
                                </label>
                                <input type="text" class="in-input w-full col-span-3" id="department"
                                    value="{{ $data['department'] ?? old('department') }}" name="department"
                                    placeholder="">
                            </div>


                            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                                <label for="signature" class="whitespace-nowrap col-span-2">Approved by /
                                    Signature:</label>
                                <input type="text" class="in-input w-full col-span-3" id="signature"
                                    value="{{ $data['signature'] ?? old('signature') }}" name="signature"
                                    placeholder="">
                            </div>


                            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                                <label for="aprDepartment" class="whitespace-nowrap col-span-2">Approval Department
                                </label>
                                <input type="text" class="in-input w-full col-span-3" id="aprDepartment"
                                    value="{{ $data['aprDepartment'] ?? old('aprDepartment') }}" name="aprDepartment"
                                    placeholder="">
                            </div>

                            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                                <label for="aprSignature" class="whitespace-nowrap col-span-2">Approved by / Signature
                                </label>
                                <input type="text" class="in-input w-full col-span-3" id="aprSignature"
                                    value="{{ $data['aprSignature'] ?? old('aprSignature') }}" name="aprSignature"
                                    placeholder="">
                            </div>

                            <div class="grid grid-cols-5 gap-4 w-full">
                                <div class="col-span-2 font-semibold">Final status:</div>
                                <div class="col-span-3 grid grid-cols-2 gap-4">
                                    <div class="flex items-center gap-2">
                                        <label for="">Cancelled</label>
                                        <input type="input" class="in-input w-full" name="cancel"
                                            value="{{ $data['cancel'] ?? old('cancel') }}">
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <label for="">Completed</label>
                                        <input type="input" class="in-input w-full" name="completed"
                                            value="{{ $data['completed'] ?? old('completed') }}">
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <label for="">Postponed</label>
                                        <input type="input" class="in-input w-full" name="postponed"
                                            value="{{ $data['postponed'] ?? old('postponed') }}">
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <label for="" class="whitespace-nowrap">Fall back</label>
                                        <input type="input" class="in-input w-full" name="fallBack"
                                            value="{{ $data['fallBack'] ?? old('fallBack') }}">
                                    </div>

                                </div>
                            </div>
                        </div>

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

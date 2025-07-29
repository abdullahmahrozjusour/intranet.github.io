<script src="{{ asset('assets/js/tailwindcss.js') }}"></script>
<script src="{{ asset('assets/js/tailwind.js') }}"></script>
@yield('styleSheet')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@include('components.web.adminTailwind')
<input type="hidden" name="tab" class="activeTab" value="ItForm">
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
                            <span cl>تفاصيل الطلب </span>
                            {{-- <span class="font-shubuk">معلومات مقدم الطلب</span> --}}
                        </div>

                        <div class="mt-4" dir="rtl">
                            <div class="mb-1 font-semibold font-shubuk">الطالب:</div>
                            <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                                <div class="  gap-2">
                                    <label for="fullname" class="whitespace-nowrap font-shubuk">الاسم الكامل:</label>
                                    <input type="input" class="in-input w-full" name="fullname"
                                        value="{{ $data['fullname'] ?? old('fullname') }}" id="fullname">
                                </div>
                                <div class="gap-2">
                                    <label for="empID" class="whitespace-nowrap font-shubuk">الرقم الوظيفي:</label>
                                    <input type="input" class="in-input w-full" name="empID"
                                        value="{{ $data['empID'] ?? old('empID') }}">
                                </div>
                                <div class="gap-2">
                                    <label for="department" class="whitespace-nowrap font-shubuk">القسم:</label>
                                    <input type="input" class="in-input w-full" name="department"
                                        value="{{ $data['department'] ?? old('department') }}">
                                </div>
                                <div class="  gap-2">
                                    <label for="jobTitle" class="whitespace-nowrap font-shubuk">المسمى الوظيفي:</label>
                                    <input type="input" class="in-input w-full" name="jobTitle"
                                        value="{{ $data['jobTitle'] ?? old('jobTitle') }}">
                                </div>
                                <div class="  gap-2">
                                    <label for="contact" class="whitespace-nowrap font-shubuk">رقم الاتصال: </label>
                                    <input type="phone" class="in-input w-full" name="contact"
                                        value="{{ $data['contact'] ?? old('contact') }}">
                                </div>
                                <div class="  gap-2">
                                    <label for="administration" class="whitespace-nowrap font-shubuk">الادارة:</label>
                                    <input type="input" class="in-input w-full" name="administration"
                                        value="{{ $data['administration'] ?? old('administration') }}">
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-4 mt-4 justify-between py-3 px-4">
                                @php
                                    $requestStatus = $data['status'] ?? [];
                                @endphp
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="status[]" value="New User" id="newUser"
                                        {{ in_array('New User', $requestStatus) ? 'checked' : '' }}>
                                    <label for="newUser" class="block"><span class="font-shubuk">مستخدم جديد </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="status[]" value="Renewal and Development"
                                        id="renewal"
                                        {{ in_array('Renewal and Development', $requestStatus) ? 'checked' : '' }}>
                                    <label for="renewal" class="block"><span class="font-shubuk">تجديد وتطوير</span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="status[]" value="Service Expiry" id="Expiry"
                                        {{ in_array('Service Expiry', $requestStatus) ? 'checked' : '' }}>
                                    <label for="Expiry" class="block"><span class="font-shubuk">انتهاء الخدمة</span>
                                        <br> </label>
                                </div>
                            </div>

                            <div class="mt-4 mb-1 font-semibold font-shubuk">المعدات:</div>
                            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                                @php
                                    $requestEquipment = $data['equipment'] ?? [];
                                @endphp
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="equipment[]" value="USB Storage" id="USB"
                                        {{ in_array('USB Storage', $requestEquipment) ? 'checked' : '' }}>
                                    <label for="USB" class="block"><span class="font-shubuk">تخزين USB </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="equipment[]" value="wireless keyboard"
                                        id="keyboard"
                                        {{ in_array('wireless keyboard', $requestEquipment) ? 'checked' : '' }}>
                                    <label for="keyboard" class="block"><span class="font-shubuk">لوحة مفاتيح
                                            لاسلكية</span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="equipment[]" value="Monitor" id="Monitor"
                                        {{ in_array('Monitor', $requestEquipment) ? 'checked' : '' }}>
                                    <label for="Monitor" class="block"><span class="font-shubuk">Monitor </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="equipment[]" value="Landline Phone" id="Phone"
                                        {{ in_array('Landline Phone', $requestEquipment) ? 'checked' : '' }}>
                                    <label for="Phone" class="block"><span class="font-shubuk">هاتف ارضي</span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="equipment[]" value="Wireless Wireless"
                                        {{ in_array('Wireless Wireless', $requestEquipment) ? 'checked' : '' }}
                                        id="Wireless">
                                    <label for="Wireless" class="block"><span class="font-shubuk">فأره
                                            لاسلكية</span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="equipment[]" value="computer device"
                                        {{ in_array('computer device', $requestEquipment) ? 'checked' : '' }}
                                        id="computer">
                                    <label for="computer" class="block"><span class="font-shubuk">جهاز حاسوب </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="equipment[]" value="Door access card"
                                        {{ in_array('Door access card', $requestEquipment) ? 'checked' : '' }}
                                        id="accessCard">
                                    <label for="accessCard" class="block"><span class="font-shubuk">بطاقة دخول الباب
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="equipment[]" value="printer" id="printer"
                                        {{ in_array('printer', $requestEquipment) ? 'checked' : '' }}>
                                    <label for="printer" class="block"><span class="font-shubuk">طابعة </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="equipment[]" value="Laptop" id="Laptop"
                                        {{ in_array('Laptop', $requestEquipment) ? 'checked' : '' }}>
                                    <label for="Laptop" class="block"><span class=""> Laptop </span>
                                        <br> </label>
                                </div>
                            </div>

                            <div class="mt-4 mb-1 font-semibold font-shubuk">التطبيقات:</div>
                            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                                @php
                                    $requestApplications = $data['applications'] ?? [];
                                @endphp
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="Electronic Website"
                                        {{ in_array('Electronic Website', $requestApplications) ? 'checked' : '' }}
                                        id="Website">
                                    <label for="Website" class="block"><span class="font-shubuk">موقع إلكتروني
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="ERP" id="ERP"
                                        {{ in_array('ERP', $requestApplications) ? 'checked' : '' }}>
                                    <label for="ERP" class="block"><span class="">ERP </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="Vehicle Design"
                                        {{ in_array('Vehicle Design', $requestApplications) ? 'checked' : '' }}
                                        id="Vehicle">
                                    <label for="Vehicle" class="block"><span class="font-shubuk">تصميم
                                            المركبات</span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="Platforms" id="Platforms"
                                        {{ in_array('Platforms', $requestApplications) ? 'checked' : '' }}>
                                    <label for="Platforms" class="block"><span class="font-shubuk">المنصات </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="Printing/Scanning"
                                        {{ in_array('Printing/Scanning', $requestApplications) ? 'checked' : '' }}
                                        id="Printing">
                                    <label for="Printing" class="block"><span class="font-shubuk">الطباعة/المسح
                                            الضوئي </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="Other categories "
                                        {{ in_array('Other categories', $requestApplications) ? 'checked' : '' }}
                                        id="Other">
                                    <label for="Other" class="block"><span class="font-shubuk">أصناف اخرى </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="Adobe Acrobat PRO"
                                        {{ in_array('Adobe Acrobat PRO', $requestApplications) ? 'checked' : '' }}
                                        id="Acrobat">
                                    <label for="Acrobat" class="block"><span class="">Adobe Acrobat PRO
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="Email" id="Email"
                                        {{ in_array('Email', $requestApplications) ? 'checked' : '' }}>
                                    <label for="Email" class="block"><span class="font-shubuk">بريد إلكتروني
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="ERP Self-Services"
                                        {{ in_array('ERP Self-Services', $requestApplications) ? 'checked' : '' }}
                                        id="Other_3">
                                    <label for="Other_3" class="block"><span class="font-shubuk">أصناف اخرى (03):
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="Other categories (03)"
                                        {{ in_array('Other categories (03)', $requestApplications) ? 'checked' : '' }}
                                        id="selfServices">
                                    <label for="selfServices" class="block"><span class="font-shubuk">ERP الخدمات
                                            الذاتية </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="Shared File Server"
                                        {{ in_array('Shared File Server', $requestApplications) ? 'checked' : '' }}
                                        id="fileServer">
                                    <label for="fileServer" class="block"><span class="font-shubuk">خادم الملفات
                                            المشترك </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="applications[]" value="Other categories (04)"
                                        {{ in_array('Other categories (04)', $requestApplications) ? 'checked' : '' }}
                                        id="Other_4">
                                    <label for="Other_4" class="block"><span class="font-shubuk">أصناف اخرى (04):
                                        </span>
                                        <br> </label>
                                </div>
                            </div>

                            <div class="mt-4 mb-1 font-semibold font-shubuk">التواصل:</div>
                            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                                @php
                                    $requestCommunication = $data['communication'] ?? [];
                                @endphp
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="communication[]" value="VPN" id="VPN"
                                        {{ in_array('VPN', $requestCommunication) ? 'checked' : '' }}>
                                    <label for="VPN" class="block"><span class=" ">VPN </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="communication[]" value="Other items (04)"
                                        {{ in_array('Other items (04)', $requestCommunication) ? 'checked' : '' }}
                                        id="item_04">
                                    <label for="item_04" class="block"><span class="font-shubuk">أصناف اخرى(04)
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="communication[]" value="Other items (01)"
                                        {{ in_array('Other items (01)', $requestCommunication) ? 'checked' : '' }}
                                        id="item_01">
                                    <label for="item_01" class="block"><span class="font-shubuk">أصناف اخرى (01):
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="communication[]" value="Mobile calls"
                                        {{ in_array('Mobile calls', $requestCommunication) ? 'checked' : '' }}
                                        id="calls">
                                    <label for="calls" class="block"><span class="font-shubuk">مكالمات الجوال
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="communication[]" value="Other items (05)"
                                        {{ in_array('Other items (05)', $requestCommunication) ? 'checked' : '' }}
                                        id="item_05">
                                    <label for="item_05" class="block"><span class="font-shubuk">أصناف اخرى (05):
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="communication[]" value="Other items (02)"
                                        {{ in_array('Other items (02)', $requestCommunication) ? 'checked' : '' }}
                                        id="item_02">
                                    <label for="item_02" class="block"><span class="font-shubuk">أصناف اخرى (02):
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="communication[]" value="International calls"
                                        {{ in_array('International calls', $requestCommunication) ? 'checked' : '' }}
                                        id="International">
                                    <label for="International" class="block"><span class="font-shubuk">مكالمات دولية
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="communication[]" value="Other items (06)"
                                        {{ in_array('Other items (06)', $requestCommunication) ? 'checked' : '' }}
                                        id="item_06">
                                    <label for="item_06" class="block"><span class="font-shubuk">أصناف اخرى (06):
                                        </span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="communication[]" value="Other items (03)"
                                        {{ in_array('="Other items (03)', $requestCommunication) ? 'checked' : '' }}
                                        id="item_03">
                                    <label for="item_03" class="block"><span class="font-shubuk"> أصناف اخرى (03:)
                                        </span>
                                        <br> </label>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <label for="addtional" class="d-flex justify-content-between">
                                    {{-- <span>Fall back process in case of issues:: </span> --}}
                                    <span class="font-shubuk">تفاصيل اضافية:</span>
                                </label>
                                <textarea class="in-input" cols="2" row="2" id="addtional" name="addtional"
                                    placeholder="Additional details: ">{{ $data['addtional' ?? old('addtional')] }}</textarea>
                            </div>

                            <div
                                class="  bg-secondary mt-4 px-4 py-2 font-semibold text-md uppercase rounded-md text-white flex items-center justify-center gap-2">
                                {{-- <span cl>IT Request From </span> --}}
                                <span class="font-shubuk">الموافقات</span>
                            </div>
                            <div class="mt-4 grid grid-cols-2 gap-4">
                                <div>
                                    <div class="mb-1 font-semibold font-shubuk">إدارة الخدمات </div>
                                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                                        <div class="form-group ">
                                            <label for="s_name" class="whitespace-nowrap font-shubuk">الاسم:</label>
                                            <input type="input" class="in-input w-full" name="s_name"
                                                value="{{ $data['s_name' ?? old('s_name')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for="s_job" class="whitespace-nowrap font-shubuk">المسمى
                                                الوظيفي:</label>
                                            <input type="input" class="in-input w-full" name="s_job"
                                                value="{{ $data['s_job' ?? old('s_job')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for="s_sign"
                                                class="whitespace-nowrap font-shubuk">التوقيع:</label>
                                            <input type="input" class="in-input w-full" name="s_sign"
                                                value="{{ $data['s_sign' ?? old('s_sign')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for="s_date"
                                                class="whitespace-nowrap font-shubuk">التاريخ:</label>
                                            <input type="date" class="in-input w-full" name="s_date"
                                                value="{{ $data['s_date' ?? old('s_date')] }}">
                                        </div>
                                    </div>


                                    <div class="grid grid-cols-1 gap-2">
                                        <div>
                                            <div class="mb-1 font-semibold font-shubuk mt-4 font-shubuk">رئيس قطاع
                                                الدعم المؤسسي </div>
                                            @php
                                                $requestSupportSector = $data['supportSector'] ?? [];
                                            @endphp
                                            <div
                                                class="grid grid-cols-2 gap-2 bg-gray-100 py-3 px-4 rounded-lg h-[calc(100% - 1.8rem)]">
                                                <div class="in-checkbox ch-ar">
                                                    <input type="checkbox" name="supportSector[]" value="consent"
                                                        {{ in_array('consent', $requestSupportSector) ? 'checked' : '' }}
                                                        id="consent">
                                                    <label for="consent" class="block"><span
                                                            class="font-shubuk">موافقة</span>
                                                        <br> </label>
                                                </div>
                                                <div class="in-checkbox ch-ar">
                                                    <input type="checkbox" name="supportSector[]"
                                                        {{ in_array('unacceptable', $requestSupportSector) ? 'checked' : '' }}
                                                        value="unacceptable" id="unacceptable">
                                                    <label for="unacceptable" class="block"><span
                                                            class="font-shubuk">مرفوض</span>
                                                        <br> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group  ">
                                            <label for="comments" class="d-flex justify-content-between">
                                                {{-- <span>Fall back process in case of issues:: </span> --}}
                                                <div class="mb-1 font-semibold font-shubuk">ملاحظات:</div>
                                            </label>
                                            <textarea class="in-input !bg-grey-200" cols="2" row="2" id="comments" name="comments"
                                                placeholder="comments">{{ $data['comments' ?? old('comments')] }}</textarea>
                                        </div>
                                    </div>

                                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg mt-4">

                                        <div class="form-group ">
                                            <label for=""
                                                class="whitespace-nowrap font-shubuk">التوقيع:</label>
                                            <input type="date" class="in-input w-full" name="date" value="{{ $data['date' ?? old('date')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for=""
                                                class="whitespace-nowrap font-shubuk">التاريخ:</label>
                                            <input type="input" class="in-input w-full" name="signature" value="{{ $data['signature' ?? old('signature')] }}">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-1 font-semibold font-shubuk font-shubuk">إقرار بالاستلام</div>
                                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                                        <div class="form-group ">
                                            <label for="acknowledgment_name"
                                                class="whitespace-nowrap font-shubuk">الاسم:</label>
                                            <input type="input" class="in-input w-full" name="acknowledgment_name" value="{{ $data['acknowledgment_name' ?? old('acknowledgment_name')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for="acknowledgment_job"
                                                class="whitespace-nowrap font-shubuk">المسمى الوظيفي:</label>
                                            <input type="input" class="in-input w-full" name="acknowledgment_job" value="{{ $data['acknowledgment_job' ?? old('acknowledgment_job')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for="acknowledgment_management"
                                                class="whitespace-nowrap font-shubuk">الإدارة:</label>
                                            <input type="input" class="in-input w-full" value="{{ $data['acknowledgment_management' ?? old('acknowledgment_management')] }}"
                                                name="acknowledgment_management">
                                        </div>
                                        <div class="form-group ">
                                            <label for="acknowledgment_date"
                                                class="whitespace-nowrap font-shubuk">التاريخ:</label>
                                            <input type="date" class="in-input w-full" name="acknowledgment_date" value="{{ $data['acknowledgment_date' ?? old('acknowledgment_date')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for=""
                                                class="whitespace-nowrap font-shubuk">التوقيع:</label>
                                            <input type="input" class="in-input w-full" value="{{ $data['acknowledgment_Signature' ?? old('acknowledgment_Signature')] }}"
                                                name="acknowledgment_Signature">
                                        </div>
                                    </div>

                                    <div class="mb-1 font-semibold font-shubuk mt-4 font-shubuk">التكنولوجيا ونظم
                                        المعلومات</div>
                                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                                        <div class="form-group ">
                                            <label for="" class="whitespace-nowrap font-shubuk">الاسم:</label>
                                            <input type="input" class="in-input w-full" name="IS_name" value="{{ $data['IS_name' ?? old('IS_name')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for="" class="whitespace-nowrap font-shubuk">المسمى
                                                الوظيفي:</label>
                                            <input type="input" class="in-input w-full" name="IS_title" value="{{ $data['IS_title' ?? old('IS_title')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for="IS_management"
                                                class="whitespace-nowrap font-shubuk">الإدارة:</label>
                                            <input type="input" class="in-input w-full" name="IS_management" value="{{ $data['IS_management' ?? old('IS_management')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for=""
                                                class="whitespace-nowrap font-shubuk">التاريخ:</label>
                                            <input type="date" class="in-input w-full" name="IS_date" value="{{ $data['IS_date' ?? old('IS_date')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for=""
                                                class="whitespace-nowrap font-shubuk">التوقيع:</label>
                                            <input type="input" class="in-input w-full" name="IS_sign" value="{{ $data['IS_sign' ?? old('IS_sign')] }}">
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div
                                class="  bg-secondary mt-4 px-4 py-2 font-semibold text-md uppercase rounded-md text-white flex items-center justify-center gap-2">
                                {{-- <span cl>IT Request From </span> --}}
                                <span class="font-shubuk">معلومات</span>
                            </div>
                            <div class="mt-4 grid grid-cols-2 gap-4">
                                <div>
                                    <div class="mb-1 font-semibold font-shubuk">إقرار بالاستلام</div>
                                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                                        <div class="form-group ">
                                            <label for="" class="whitespace-nowrap font-shubuk">الاسم:</label>
                                            <input type="input" class="in-input w-full" name="infor_name"  value="{{ $data['infor_name' ?? old('infor_name')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for="" class="whitespace-nowrap font-shubuk">المسمى
                                                الوظيفي:</label>
                                            <input type="input" class="in-input w-full" name="infor_job"  value="{{ $data['infor_job' ?? old('infor_job')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for=""
                                                class="whitespace-nowrap font-shubuk">التاريخ:</label>
                                            <input type="date" class="in-input w-full" name="infor_date"  value="{{ $data['infor_date' ?? old('infor_date')] }}">
                                        </div>
                                        <div class="form-group ">
                                            <label for=""
                                                class="whitespace-nowrap font-shubuk">التوقيع:</label>
                                            <input type="input" class="in-input w-full" name="infor_sign"  value="{{ $data['infor_sign' ?? old('infor_sign')] }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  ">
                                    <label for="infor_comments" class="d-flex justify-content-between">
                                        {{-- <span>Fall back process in case of issues:: </span> --}}
                                        <div class="mb-1 font-semibold font-shubuk">ملاحظات:</div>
                                    </label>
                                    <textarea class="in-input !bg-grey-200" cols="2" row="2" id="infor_comments" name="infor_comments"
                                        placeholder="comments">{{ $data['infor_comments' ?? old('infor_comments')] }}</textarea>
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

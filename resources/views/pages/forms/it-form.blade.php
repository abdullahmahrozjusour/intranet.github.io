<form action="{{ route('itRequest.submit', [$slug]) }}" method="POST" enctype="multipart/form-data">
     @csrf 

    <input type="hidden" name="tab" class="activeTab" value="ItForm">
    <input type="hidden" value="{{ $requestIdNumber }}" name="requestId">
    <div class=" px-6 py-4   mx-auto max-w-[700px]  ">


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
                    <input type="input" class="in-input w-full" name="fullname">
                </div>
                <div class="gap-2">
                    <label for="empID" class="whitespace-nowrap font-shubuk">الرقم الوظيفي:</label>
                    <input type="input" class="in-input w-full" name="empID">
                </div>
                <div class="gap-2">
                    <label for="department" class="whitespace-nowrap font-shubuk">القسم:</label>
                    <input type="input" class="in-input w-full" name="department">
                </div>
                <div class="  gap-2">
                    <label for="jobTitle" class="whitespace-nowrap font-shubuk">المسمى الوظيفي:</label>
                    <input type="input" class="in-input w-full" name="jobTitle">
                </div>
                <div class="  gap-2">
                    <label for="contact" class="whitespace-nowrap font-shubuk">رقم الاتصال: </label>
                    <input type="phone" class="in-input w-full" name="contact">
                </div>
                <div class="  gap-2">
                    <label for="administration" class="whitespace-nowrap font-shubuk">الادارة:</label>
                    <input type="input" class="in-input w-full" name="administration">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mt-4 justify-between py-3 px-4">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="status[]" value="New User" id="newUser">
                    <label for="newUser" class="block"><span class="font-shubuk">مستخدم جديد </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="status[]" value="Renewal and Development" id="renewal">
                    <label for="renewal" class="block"><span class="font-shubuk">تجديد وتطوير</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="status[]" value="Service Expiry" id="Expiry">
                    <label for="Expiry" class="block"><span class="font-shubuk">انتهاء الخدمة</span>
                        <br> </label>
                </div>
            </div>

            <div class="mt-4 mb-1 font-semibold font-shubuk">المعدات:</div>
            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="equipment[]" value="USB Storage" id="USB">
                    <label for="USB" class="block"><span class="font-shubuk">تخزين USB </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="equipment[]" value="wireless keyboard" id="keyboard">
                    <label for="keyboard" class="block"><span class="font-shubuk">لوحة مفاتيح لاسلكية</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="equipment[]" value="Monitor" id="Monitor">
                    <label for="Monitor" class="block"><span class="font-shubuk">Monitor </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="equipment[]" value="Landline Phone" id="Phone">
                    <label for="Phone" class="block"><span class="font-shubuk">هاتف ارضي</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="equipment[]" value="Wireless Wireless" id="Wireless">
                    <label for="Wireless" class="block"><span class="font-shubuk">فأره لاسلكية</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="equipment[]" value="computer device" id="computer">
                    <label for="computer" class="block"><span class="font-shubuk">جهاز حاسوب </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="equipment[]" value="Door access card" id="accessCard">
                    <label for="accessCard" class="block"><span class="font-shubuk">بطاقة دخول الباب </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="equipment[]" value="printer" id="printer">
                    <label for="printer" class="block"><span class="font-shubuk">طابعة </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="equipment[]" value="Laptop" id="Laptop">
                    <label for="Laptop" class="block"><span class=""> Laptop </span>
                        <br> </label>
                </div>
            </div>

            <div class="mt-4 mb-1 font-semibold font-shubuk">التطبيقات:</div>
            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="Electronic Website" id="Website">
                    <label for="Website" class="block"><span class="font-shubuk">موقع إلكتروني </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="ERP" id="ERP">
                    <label for="ERP" class="block"><span class="">ERP </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="Vehicle Design" id="Vehicle">
                    <label for="Vehicle" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="Platforms" id="Platforms">
                    <label for="Platforms" class="block"><span class="font-shubuk">المنصات </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="Printing/Scanning" id="Printing">
                    <label for="Printing" class="block"><span class="font-shubuk">الطباعة/المسح الضوئي </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="Other categories " id="Other">
                    <label for="Other" class="block"><span class="font-shubuk">أصناف اخرى </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="Adobe Acrobat PRO" id="Acrobat">
                    <label for="Acrobat" class="block"><span class="">Adobe Acrobat PRO </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="Email" id="Email">
                    <label for="Email" class="block"><span class="font-shubuk">بريد إلكتروني </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="ERP Self-Services" id="Other_3">
                    <label for="Other_3" class="block"><span class="font-shubuk">أصناف اخرى (03): </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="Other categories (03)" id="selfServices">
                    <label for="selfServices" class="block"><span class="font-shubuk">ERP الخدمات الذاتية </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="Shared File Server" id="fileServer">
                    <label for="fileServer" class="block"><span class="font-shubuk">خادم الملفات المشترك </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="applications[]" value="Other categories (04)" id="Other_4">
                    <label for="Other_4" class="block"><span class="font-shubuk">أصناف اخرى (04): </span>
                        <br> </label>
                </div>
            </div>

            <div class="mt-4 mb-1 font-semibold font-shubuk">التواصل:</div>
            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="communication[]" value="VPN" id="VPN">
                    <label for="VPN" class="block"><span class=" ">VPN </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="communication[]" value="Other items (04)" id="item_04">
                    <label for="item_04" class="block"><span class="font-shubuk">أصناف اخرى(04) </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="communication[]" value="Other items (01)" id="item_01">
                    <label for="item_01" class="block"><span class="font-shubuk">أصناف اخرى (01): </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="communication[]" value="Mobile calls" id="calls">
                    <label for="calls" class="block"><span class="font-shubuk">مكالمات الجوال </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="communication[]" value="Other items (05)" id="item_05">
                    <label for="item_05" class="block"><span class="font-shubuk">أصناف اخرى (05): </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="communication[]" value="Other items (02)" id="item_02">
                    <label for="item_02" class="block"><span class="font-shubuk">أصناف اخرى (02): </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="communication[]" value="International calls" id="International">
                    <label for="International" class="block"><span class="font-shubuk">مكالمات دولية </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="communication[]" value="Other items (06)" id="item_06">
                    <label for="item_06" class="block"><span class="font-shubuk">أصناف اخرى (06): </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="communication[]" value="Other items (03)" id="item_03">
                    <label for="item_03" class="block"><span class="font-shubuk"> أصناف اخرى (03:) </span>
                        <br> </label>
                </div>
            </div>

            <div class="form-group mt-4">
                <label for="addtional" class="d-flex justify-content-between">
                    {{-- <span>Fall back process in case of issues:: </span> --}}
                    <span class="font-shubuk">تفاصيل اضافية:</span>
                </label>
                <textarea class="in-input" cols="2" row="2" id="process" name="addtional"
                    placeholder="Additional details: "></textarea>
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
                            <input type="input" class="in-input w-full" name="s_name">
                        </div>
                        <div class="form-group ">
                            <label for="s_job" class="whitespace-nowrap font-shubuk">المسمى الوظيفي:</label>
                            <input type="input" class="in-input w-full" name="s_job">
                        </div>
                        <div class="form-group ">
                            <label for="s_sign" class="whitespace-nowrap font-shubuk">التوقيع:</label>
                            <input type="input" class="in-input w-full" name="s_sign">
                        </div>
                        <div class="form-group ">
                            <label for="s_date" class="whitespace-nowrap font-shubuk">التاريخ:</label>
                            <input type="date" class="in-input w-full" name="s_date">
                        </div>
                    </div>


                    <div class="grid grid-cols-1 gap-2">
                        <div>
                            <div class="mb-1 font-semibold font-shubuk mt-4 font-shubuk">رئيس قطاع الدعم المؤسسي </div>
                            <div
                                class="grid grid-cols-2 gap-2 bg-gray-100 py-3 px-4 rounded-lg h-[calc(100% - 1.8rem)]">
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="supportSector[]" value="consent"
                                        id="consent">
                                    <label for="consent" class="block"><span class="font-shubuk">موافقة</span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="supportSector[]" value="unacceptable"
                                        id="unacceptable">
                                    <label for="unacceptable" class="block"><span class="font-shubuk">مرفوض</span>
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
                                placeholder="comments"></textarea>
                        </div>
                    </div>

                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg mt-4">

                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap font-shubuk">التوقيع:</label>
                            <input type="date" class="in-input w-full" name="date">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap font-shubuk">التاريخ:</label>
                            <input type="input" class="in-input w-full" name="signature">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold font-shubuk font-shubuk">إقرار بالاستلام</div>
                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                        <div class="form-group ">
                            <label for="acknowledgment_name" class="whitespace-nowrap font-shubuk">الاسم:</label>
                            <input type="input" class="in-input w-full" name="acknowledgment_name">
                        </div>
                        <div class="form-group ">
                            <label for="acknowledgment_job" class="whitespace-nowrap font-shubuk">المسمى الوظيفي:</label>
                            <input type="input" class="in-input w-full" name="acknowledgment_job">
                        </div>
                        <div class="form-group ">
                            <label for="acknowledgment_management" class="whitespace-nowrap font-shubuk">الإدارة:</label>
                            <input type="input" class="in-input w-full" name="acknowledgment_management">
                        </div>
                        <div class="form-group ">
                            <label for="acknowledgment_date" class="whitespace-nowrap font-shubuk">التاريخ:</label>
                            <input type="date" class="in-input w-full" name="acknowledgment_date">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap font-shubuk">التوقيع:</label>
                            <input type="input" class="in-input w-full" name="acknowledgment_Signature">
                        </div>
                    </div>

                    <div class="mb-1 font-semibold font-shubuk mt-4 font-shubuk">التكنولوجيا ونظم المعلومات</div>
                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap font-shubuk">الاسم:</label>
                            <input type="input" class="in-input w-full" name="IS_name">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap font-shubuk">المسمى الوظيفي:</label>
                            <input type="input" class="in-input w-full" name="IS_title">
                        </div>
                        <div class="form-group ">
                            <label for="IS_management" class="whitespace-nowrap font-shubuk">الإدارة:</label>
                            <input type="input" class="in-input w-full" name="IS_management">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap font-shubuk">التاريخ:</label>
                            <input type="date" class="in-input w-full" name="IS_date">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap font-shubuk">التوقيع:</label>
                            <input type="input" class="in-input w-full" name="IS_sign">
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
                            <input type="input" class="in-input w-full" name="infor_name">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap font-shubuk">المسمى الوظيفي:</label>
                            <input type="input" class="in-input w-full" name="infor_job">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap font-shubuk">التاريخ:</label>
                            <input type="date" class="in-input w-full" name="infor_date">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap font-shubuk">التوقيع:</label>
                            <input type="input" class="in-input w-full" name="infor_sign">
                        </div>
                    </div>
                </div>
                <div class="form-group  ">
                    <label for="infor_comments" class="d-flex justify-content-between">
                        {{-- <span>Fall back process in case of issues:: </span> --}}
                        <div class="mb-1 font-semibold font-shubuk">ملاحظات:</div>
                    </label>
                    <textarea class="in-input !bg-grey-200" cols="2" row="2" id="infor_comments" name="infor_comments"
                        placeholder="comments"></textarea>
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-4">
            <button class="btn-blue">Submit</button>
        </div>
    </div>
</form>

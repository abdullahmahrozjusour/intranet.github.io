{{-- <form action="{{ route('request.submit', [$slug]) }}" method="POST" enctype="multipart/form-data"> --}}
<form>
    @csrf
    <input type="hidden" name="type" value="{{ $slug }}">

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
                    <label for="" class="whitespace-nowrap">الاسم الكامل:</label>
                    <input type="input" class="in-input w-full">
                </div>
                <div class="  gap-2">
                    <label for="" class="whitespace-nowrap">الرقم الوظيفي:</label>
                    <input type="input" class="in-input w-full">
                </div>
                <div class="  gap-2">
                    <label for="" class="whitespace-nowrap">القسم:</label>
                    <input type="input" class="in-input w-full">
                </div>
                <div class="  gap-2">
                    <label for="" class="whitespace-nowrap">المسمى الوظيفي:</label>
                    <input type="input" class="in-input w-full">
                </div>
                <div class="  gap-2">
                    <label for="" class="whitespace-nowrap">رقم الاتصال: </label>
                    <input type="input" class="in-input w-full">
                </div>
                <div class="  gap-2">
                    <label for="" class="whitespace-nowrap">الادارة:</label>
                    <input type="input" class="in-input w-full">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mt-4 justify-between py-3 px-4">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">مستخدم جديد </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تجديد وتطوير</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">انتهاء الخدمة</span>
                        <br> </label>
                </div>
            </div>

            <div class="mt-4 mb-1 font-semibold font-shubuk">المعدات:</div>
            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تخزين USB </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">لوحة مفاتيح لاسلكية</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">Monitor </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">هاتف ارضي</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">فأره لاسلكية</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">جهاز حاسوب </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">بطاقة دخول الباب </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">طابعة </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk"> Laptop </span>
                        <br> </label>
                </div>
            </div>

            <div class="mt-4 mb-1 font-semibold font-shubuk">التطبيقات:</div>
            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">موقع إلكتروني </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">ERP </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">المنصات </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">الطباعة/المسح الضوئي </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">أصناف اخرى </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">Adobe Acrobat PRO </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">بريد إلكتروني </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">أصناف اخرى (03): </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">ERP الخدمات الذاتية </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">خادم الملفات المشترك </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">أصناف اخرى (04): </span>
                        <br> </label>
                </div>
            </div>

            <div class="mt-4 mb-1 font-semibold font-shubuk">التواصل:</div>
            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">VPN </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">أصناف اخرى(04) </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">أصناف اخرى (01): </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">مكالمات الجوال </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">أصناف اخرى (05): </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">أصناف اخرى (02): </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">مكالمات دولية </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">أصناف اخرى (06): </span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk"> أصناف اخرى (03:) </span>
                        <br> </label>
                </div>
            </div>

            <div class="form-group mt-4">
                <label for="process" class="d-flex justify-content-between">
                    {{-- <span>Fall back process in case of issues:: </span> --}}
                    <span class="font-shubuk">تفاصيل اضافية:</span>
                </label>
                <textarea class="in-input" cols="2" row="2" id="process" name="process"
                    placeholder="Fall back process in case of issues"></textarea>
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
                            <label for="" class="whitespace-nowrap">الاسم:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">المسمى الوظيفي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">التوقيع:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">التاريخ:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                    </div>


                    <div class="grid grid-cols-1 gap-2">
                        <div>
                            <div class="mb-1 font-semibold font-shubuk">رئيس قطاع الدعم المؤسسي  </div>
                            <div
                                class="grid grid-cols-2 gap-2 bg-gray-100 py-3 px-4 rounded-lg h-[calc(100% - 1.8rem)]">
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="requestType[]" value="Vehicle Branding"
                                        id="vh">
                                    <label for="vh" class="block"><span class="font-shubuk">موافقة</span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="requestType[]" value="Vehicle Branding"
                                        id="vh">
                                    <label for="vh" class="block"><span class="font-shubuk">مرفوض</span>
                                        <br> </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="process" class="d-flex justify-content-between">
                                {{-- <span>Fall back process in case of issues:: </span> --}}
                                <div class="mb-1 font-semibold font-shubuk">ملاحظات:</div>
                            </label>
                            <textarea class="in-input !bg-grey-200" cols="2" row="2" id="process" name="process"
                                placeholder="Fall back process in case of issues"></textarea>
                        </div>
                    </div>

                     <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg mt-4">

                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">التوقيع:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">التاريخ:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold font-shubuk">إقرار بالاستلام</div>
                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">الاسم:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">المسمى الوظيفي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">الإدارة:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">التاريخ:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">التوقيع:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                    </div>

                    <div class="mb-1 font-semibold font-shubuk mt-4">التكنولوجيا ونظم المعلومات</div>
                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">الاسم:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">المسمى الوظيفي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">الإدارة:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">التاريخ:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">التوقيع:</label>
                            <input type="input" class="in-input w-full">
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
                            <label for="" class="whitespace-nowrap">الاسم:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">المسمى الوظيفي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">التاريخ:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">التوقيع:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                    </div>
                </div>
                <div class="form-group  ">
                    <label for="process" class="d-flex justify-content-between">
                        {{-- <span>Fall back process in case of issues:: </span> --}}
                        <div class="mb-1 font-semibold font-shubuk">ملاحظات:</div>
                    </label>
                    <textarea class="in-input !bg-grey-200" cols="2" row="2" id="process" name="process"
                        placeholder="Fall back process in case of issues"></textarea>
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-4">
            <button class="btn-blue">Submit</button>
        </div>
    </div>
</form>

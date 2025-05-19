@extends('layouts.master_layout')

@section('content')
    <div class="bg-primary py-4">
        <div class="container-in">
            <div class="bg-white px-6 py-4 shadow-lg  rounded-lg max-w-[1000px] mx-auto">
                <div class="title max-w-[800px] ">
                    <div class="font-semibold text-xl text-secondary">GRAPHIC DESIGN REQUEST</div>
                    <div class="font-semibold text-xl text-secondary">إسـتـــمـــارة طلـــــب تصـمـــيــــم </div>
                    <div class="grid grid-cols-4 gap-4 text-left mt-4 items-end">
                        <div class="form-group mt-2">
                            <label for="">Date Request / تاريخ تقديم الطلب</label>
                            <input type="date" class="in-input  " placeholder="">
                        </div>
                        <div class="form-group mt-2">
                            <label for="">No. Requests / رقم الطلب</label>
                            <input type="number" class="in-input  " placeholder="13232">
                        </div>
                        <div class="col-span-2">
                            <div>Type of the request / الطــــــــلب طـــبيــــــــعة </div>
                            <div class="grid grid-cols-2 gap-4 mt-1">
                                <div class="in-checkbox">
                                    <input type="checkbox" name="subscribe" value="urgent" id="urgent">
                                    <label for="urgent">Urgent / عاجــــل</label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="subscribe" value="normal" id="normal">
                                    <label for="normal">Normal / عــــادي</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn-blue">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2"><i
                        class="fa-solid fa-user"></i> <span>Applicant's Details / معلومات مقدم الطلب </span>
                </div>
                <div class="grid grid-cols-4 gap-4 mt-2">
                    <div class="form-group ">
                        <label for="">Applicant name / الاسم </label>
                        <input type="text" class="in-input " placeholder="john">
                    </div>
                    <div class="form-group ">
                        <label for="">AppApplicant contact no. / الهاتف </label>
                        <input type="text" class="in-input " placeholder="doe">
                    </div>
                    <div class="form-group ">
                        <label for="">Applicant e-mail / الإيميل </label>
                        <input type="text" class="in-input " placeholder="demo@gmail.com">
                    </div>
                    <div class="form-group ">
                        <label for="">Applicant e-mail / الإيميل </label>
                        <input type="text" class="in-input " placeholder="demo@gmail.com">
                    </div>
                     
                </div>
                <div class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2"><i
                        class="fa-solid fa-user"></i> <span>Request Details / تفاصيل الطلب </span>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-2">
                    <div class="in-checkbox">
                        <input type="checkbox" name="subscribe" value="urgent" id="new">
                        <label for="new">New request / طلب جديد </label>
                    </div>
                    <div class="in-checkbox">
                        <input type="checkbox" name="subscribe" value="urgent" id="mod">
                        <label for="mod">Modification request of previous design / طلب تعديل على تصميم سابق </label>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Delivery date / تاريـخ الاحتيـاج
                        </label>
                        <input type="date" class="in-input " placeholder="">
                    </div>
                    <div class="flex flex-col">
                        <label for="">&nbsp;</label>
                        <small class="text-secondary">This request is for design only and does not include printing time,
                            manufacturing or any
                            other application
                            mechanism</small>
                        <small class="text-secondary">هذا الطلب للتصميم فقط حيث لا يشمل وقت الطباعة أو التصنيع أو أية آلية
                            تطبيق أخرى
                        </small>
                    </div>
                </div>

                <div class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2"><i
                        class="fa-solid fa-user"></i> <span>Justification for the Urgent Request / العاجل الطلب مبررات
                    </span>
                </div>
                <div class="grid grid-cols-1 gap-4 mt-2">
                    <div class="form-group">
                        <label for="">Justification for the Urgent Request</label>
                        <textarea class="in-input" cols="2" row="2"></textarea>
                    </div>
                </div>

                <div class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2"><i
                        class="fa-solid fa-user"></i> <span>Purpose of the Request / الطلب من الغرض/
                    </span>
                </div>
                <div class="grid grid-cols-1 gap-4 mt-2">
                    <div class="form-group">
                        <label for="">Purpose of the Request</label>
                        <textarea class="in-input" cols="2" row="2"></textarea>
                    </div>
                </div>

                <div class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2"><i
                        class="fa-solid fa-user"></i> <span>REQUESTS / الطلبات
                    </span>
                </div>
                <div class="grid grid-cols-4 gap-4 mt-2">
                    <div class="in-checkbox">
                        <input type="checkbox" name="subscribe" value="normal" id="vh">
                        <label for="vh" class="flex">Vehicle branding <br> تصميم المركبات </label>
                    </div>
                    <div class="in-checkbox">
                        <input type="checkbox" name="subscribe" value="normal" id="Signage">
                        <label for="Signage" class="flex">Signage design <br> لوحات إرشادية </label>
                    </div>
                    <div class="in-checkbox">
                        <input type="checkbox" name="subscribe" value="normal" id="Trophy">
                        <label for="Trophy" class="flex">Trophy / Gift design <br> تصميم درع / هدية </label>
                    </div>
                    <div class="in-checkbox">
                        <input type="checkbox" name="subscribe" value="normal" id="identity">
                        <label for="identity" class="flex">Full new corporate identity <br> هوية بصرية جديدة </label>
                    </div>
                    <div class="in-checkbox">
                        <input type="checkbox" name="subscribe" value="normal" id="Other">
                        <label for="Other" class="flex">Other designs <br> تصاميم أخرى </label>
                    </div>
                    <div class="in-checkbox">
                        <input type="checkbox" name="subscribe" value="normal" id="Certificate">
                        <label for="Certificate" class="flex">Certificate <br> تصميم الشهادات </label>
                    </div>
                    <div class="in-checkbox">
                        <input type="checkbox" name="subscribe" value="normal" id="Presentation">
                        <label for="Presentation" class="flex">Presentation <br> تصميم عروض تقديمية </label>
                    </div>
                    <div class="in-checkbox">
                        <input type="checkbox" name="subscribe" value="normal" id="Letterhead">
                        <label for="Letterhead" class="flex">Letterhead <br> تصميم أوراق المراسلات </label>
                    </div>

                    <div class="form-group col-span-4">
                        <label for="">Purpose of the Request</label>
                        <textarea class="in-input" cols="2" row="2"></textarea>
                        <small class="text-secondary">
                            A meeting with department is required In the case of requesting a new corporate identity.
                            <br>
                            في حـال طلـب تصميـم هويـة بصريـة جديـدة يجب تحديـد اجتماع مـع الإدارة لمناقشـة الطلـب وتحديـد
                            المتطلبات.
                        </small>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="">Content المحتوى </label>
                                <textarea class="in-input" cols="2" row="2"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x2 curved frame </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x3 curved frame </label>
                                <img src="" alt="">
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x4 curved frame </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="">Content المحتوى </label>
                                <textarea class="in-input" cols="2" row="2"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x2 curved frame </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x3 curved frame </label>
                                <img src="" alt="">
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x4 curved frame </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="">Content المحتوى </label>
                                <textarea class="in-input" cols="2" row="2"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x2 curved frame </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x3 curved frame </label>
                                <img src="" alt="">
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x4 curved frame </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="">Content المحتوى </label>
                                <textarea class="in-input" cols="2" row="2"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x2 curved frame </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x3 curved frame </label>
                                <img src="" alt="">
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x4 curved frame </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="">Content المحتوى </label>
                                <textarea class="in-input" cols="2" row="2"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x2 curved frame </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x3 curved frame </label>
                                <img src="" alt="">
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x4 curved frame </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="">Content المحتوى </label>
                                <textarea class="in-input" cols="2" row="2"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x2 curved frame </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x3 curved frame </label>
                                <img src="" alt="">
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x4 curved frame </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="">Content المحتوى </label>
                                <textarea class="in-input" cols="2" row="2"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x2 curved frame </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x3 curved frame </label>
                                <img src="" alt="">
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x4 curved frame </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="">Content المحتوى </label>
                                <textarea class="in-input" cols="2" row="2"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x2 curved frame </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x3 curved frame </label>
                                <img src="" alt="">
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="subscribe" value="normal" id="Pop">
                                <label for="Pop" class="flex">3x4 curved frame </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>Requesting department approval / اعتماد الإدارة الطالبة </span>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-2">
                    <div class="in-checkbox col-span-2">
                        <input type="checkbox" class="in-input" id="terms">
                        <label for="terms">All terms have been read below / أدناه الشروط جميع قراءة تم</label>
                    </div>
                    <div class="col-span-2">Department Manager / مدير الإدارة </div>
                    <div class=" border border-secondary rounded-md p-4">
                        <div class="mb-4">Signature - التوقيع</div>
                    </div>
                    <div class=" border border-secondary rounded-md p-4">
                        <div class="mb-4">Date - التاريخ</div>
                    </div>
                </div>

                <div class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>markting & communication department approval / اعتماد إدارة
                        التسويق و الاتصال </span>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-2">
                    <div class="col-span-2">Department Manager / مدير الإدارة </div>
                    <div class=" border border-secondary rounded-md p-4">
                        <div class="mb-4">Signature - التوقيع</div>
                    </div>
                    <div class=" border border-secondary rounded-md p-4">
                        <div class="mb-4">Date - التاريخ</div>
                    </div>
                </div>

                <div class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>For design unit official use / للاستعمال الرسمي من قبل وحدة
                        التصميم
                    </span>
                </div>
                <div class="grid grid-cols-1 gap-4 mt-2">
                    <div class="form-group">
                        <label for="">Request number / رقم الطلب </label>
                        <textarea class="in-input" cols="2" row="2"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javaScript')
    <script>
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
    </script>
@endsection

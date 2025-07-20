{{-- <form action="{{ route('request.submit', [$slug]) }}" method="POST" enctype="multipart/form-data"> --}}
<form>
    @csrf
    <input type="hidden" name="type" value="{{ $slug }}">

    <div class="  px-6 py-4    mx-auto">
        <div class="title border-2 rounded-lg border-primary mx-auto p-6">
            <div class="font-semibold text-xl text-secondary text-center font-shubuk">إسـتـــمـــارة
                طلـــــب
                تصـمـــيــــم
            </div>

            <div class="font-semibold text-xl text-secondary text-center">GRAPHIC DESIGN REQUEST</div>

            <div class="grid grid-cols-2 gap-4 text-left mt-4 ">
                <div>
                    <div class=" col-span-2 mt-2 flex form-group">
                        <label for="requestDate" class="flex justify-between"><span>Date Request</span>
                            <span class="font-shubuk">تاريخ
                                تقديم الطلب</span></label>
                        <input type="input" class="in-input w-full" value="2025-05-26" disabled id="requestDate"
                            name="requestDate">
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="requestId" class="flex justify-between"><span>No. Requests</span>
                        <span class="font-shubuk">رقم
                            الطلب</span></label>
                    <input type="text" class="in-input" value="{{ $requestIdNumber }}" id="requestId" disabled
                        name="requestId" readonly="">
                </div>

            </div>
        </div>

        <div
            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
            <span>Applicant's Details </span> <span class="font-shubuk">معلومات مقدم الطلب</span>
        </div>

        <div class="grid grid-cols-1 gap-4 my-4">
            <div class=" grid grid-cols-6 gap-4 w-full items-center">
                <label for="applicantName" class="whitespace-nowrap col-span-1">Applicant name </label>
                <input type="text" class="in-input w-full col-span-4" id="applicantName" name="applicantName"
                    placeholder="">
                <label for="applicantName" class="font-shubuk col-span-1 text-right">الاسم </label>
            </div>
            <div class="grid grid-cols-6 gap-4 w-full items-center">
                <label for="applicantContactNumber" class="whitespace-nowrap">Applicant contact no.
                </label>
                <input type="text" class="in-input w-full col-span-4" id="applicantContactNumber"
                    name="applicantContactNumber" placeholder=" ">
                <label for="applicantContactNumber" class="font-shubuk text-right">الهاتف</label>
            </div>
            <div class="grid grid-cols-6 gap-4 w-full items-center">
                <label for="applicantEmail" class="whitespace-nowrap">Applicant e-mail </label>
                <input type="email" class="in-input w-full col-span-4" id="applicantEmail" name="applicantEmail"
                    placeholder=" ">
                <label for="" class="font-shubuk text-right">الإيميل</label>
            </div>
            <div class="grid grid-cols-6 gap-4 w-full items-center">
                <label for="department">Department </label>
                <input type="text" class="in-input w-full col-span-4" id="department" name="department"
                    placeholder=" ">
                <label for="department" class="font-shubuk text-right">القسم</label>
            </div>

            <div class="grid grid-cols-6 gap-4 w-full items-center">
                <label for="department">Department and Section</label>
                <input type="text" class="in-input w-full col-span-4" id="department" name="department"
                    placeholder=" ">
                <label for="department" class="font-shubuk text-right">القسم</label>
            </div>
        </div>

        <hr>

        <div class="grid grid-cols-1 gap-4 my-4">
            <div class="grid grid-cols-3 justify-between items-center">
                <label for="areYouEmployee">Are you an Employee?</label>

                <div class="mx-auto">
                    <input type="checkbox" name="areYouEmployee" id="areYouEmployee" value="yes" class="w-5 h-5">
                </div>

                <label for="areYouEmployee" class="text-right font-shubuk">هل أنت موظف؟</label>
            </div>
        </div>


        <!-- Manager fields (hidden by default) -->
        <div id="manager-fields" class="grid grid-cols-2 gap-4 text-left mt-4 hidden">
            <div>
                <div class="col-span-2 mt-2 flex form-group">
                    <label for="managerName" class="flex justify-between w-full">
                        <span>Your Manager Name</span>
                        <span class="font-shubuk">اسم مديرك</span>
                    </label>
                    <input type="text" class="in-input w-full" id="managerName" name="managerName"
                        placeholder="Your Manager Name / اسم مديرك">
                </div>
            </div>

            <div class="form-group mt-2">
                <label for="managerEmail" class="flex justify-between">
                    <span>Your Manager Email</span>
                    <span class="font-shubuk">البريد الإلكتروني لمديرك</span>
                </label>
                <input type="text" class="in-input" id="managerEmail" name="managerEmail"
                    placeholder="Your Manager Email / البريد الإلكتروني لمديرك">
            </div>
        </div>

        <div
            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex justify-between items-center gap-2">
            <span>Request Details </span> <span class="font-shubuk">تفاصيل الطلب</span>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-2">
            <div class="grid grid-cols-3 justify-between items-center">
                <label for="new">New request </label>
                <div class=" mx-auto">
                    <label for="new"> </label>
                    <input type="checkbox" name="newRequest" value="yes" id="new" class="w-5 h-5">
                </div>

                <label for="new" class="text-right font-shubuk"> طلب جديد </label>
            </div>

            <div class="grid grid-cols-3 justify-between items-center">
                <label for="mod">Modification request of previous design </label>
                <div class="mx-auto">
                    <input type="checkbox" name="modificationRequestOfPreviousDesign" value="yes" id="prevReq"
                        data-id="preRequest" class="w-5 h-5 " id="mod">
                    <label for="mod"> </label>
                </div>

                <label for="mod" class="text-right font-shubuk">طلب تعديل على تصميم سابق </label>
            </div>

            <div class="grid grid-cols-3 justify-between mt-2 hidden" id="preRequest">
                <label for="deliveryDate" class="whitespace-nowrap">Previous Request# </label>
                <input type="input" class="in-input w-full" name="deliveryDate">
                <label for="deliveryDate" class="whitespace-nowrap text-right font-shubukt"> تاريـخ
                    الاحتيـاج
                </label>
            </div>

            <div class="grid grid-cols-3 justify-between mt-2">
                <label for="deliveryDate" class="whitespace-nowrap">Delivery date </label>
                <input type="date" class="in-input w-full" id="deliveryDate" name="deliveryDate">
                <label for="deliveryDate" class="whitespace-nowrap text-right font-shubukt"> تاريـخ
                    الاحتيـاج
                </label>
            </div>
            <div class="">
                <div class="flex justify-between mb-2"><span>Type of the request</span>
                    <span class="font-shubuk">الطــــــــلب
                        طـــبيــــــــعة
                    </span>
                </div>

                <div class="grid grid-cols-1 gap-2 mt-1">
                    <div class="flex items-center justify-between w-full mx-auto">
                        <label for="urgent">Urgent </label>
                        <div class="in-checkbox">
                            <input type="checkbox" name="urgencyType" value="urgent" id="urgent"
                                data-id="justification" class="subscribe">
                            <label for="urgent"></label>
                        </div>
                        <label for="urgent" class="font-shubuk"> عاجــــل</label>
                    </div>

                    <div class="flex items-center justify-between w-full mx-auto">
                        <label for="normal">Normal</label>
                        <div class="in-checkbox">
                            <input type="checkbox" name="urgencyType" value="normal" id="normal"
                                data-id="justification" class="subscribe" checked>
                            <label for="normal"> </label>
                        </div>
                        <label for="normal" class="font-shubuk">عــــادي</label>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <label for="">&nbsp;</label>
                <small class="text-secondary text-center font-shubuk">هذا الطلب للتصميم فقط حيث لا يشمل
                    وقت الطباعة
                    أو
                    التصنيع أو أية
                    آلية
                    تطبيق أخرى
                </small>
                <small class="text-secondary text-center">This request is for design only and does not
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
                <span>Justification for the Urgent Request </span> <span class="font-shubuk">مبررات
                    الطلب العاجل</span>
            </div>
            <div class="grid grid-cols-1 gap-4 mt-2">
                <div class="form-group">
                    {{-- <label for="justificationForTheUrgentRequest">Justification for the Urgent Request</label> --}}
                    <textarea class="in-input" id="justificationForTheUrgentRequest" name="justificationForTheUrgentRequest"
                        cols="2" row="2"></textarea>
                </div>
            </div>
        </div>

        <div
            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
            <span>Purpose of the Request </span> <span class="font-shubuk">الغرض من الطلب</span>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-2">
            <div class="form-group">
                {{-- <label for="purposeOfTheRequest">Purpose of the Request</label> --}}
                <textarea id="purposeOfTheRequest" name="purposeOfTheRequest" class="in-input" cols="2" row="2"></textarea>
            </div>
        </div>

        <div
            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
            <span>REQUESTS </span> <span class="font-shubuk">الطلبات</span>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-2">
            <div class="in-checkbox ch-ar">
                <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                    <br> Vehicle branding </label>
            </div>
            <div class="in-checkbox ch-ar">
                <input type="checkbox" name="requestType[]" value="Signage Design" id="signage">
                <label for="signage" class="block"> <span class="font-shubuk">لوحات إرشادية</span>
                    <br> Signage design</label>
            </div>
            <div class="in-checkbox ch-ar">
                <input type="checkbox" name="requestType[]" value="Trophy / Gift Design" id="trophy">
                <label for="trophy" class="block"> <span class="font-shubuk">تصميم درع /
                        هدية</span> <br> Trophy / Gift design
                </label>
            </div>
            <div class="in-checkbox ch-ar">
                <input type="checkbox" name="requestType[]" value="Full New Corporate Identity" id="identity">
                <label for="identity" class="block"> <span class="font-shubuk">هوية بصرية
                        جديدة</span> <br> Full new corporate identity
                </label>
            </div>
            <div class="in-checkbox ch-ar">
                <input type="checkbox" name="requestType[]" value="Other Designs" id="other">
                <label for="other" class="block"><span class="font-shubuk">تصاميم أخرى</span>
                    <br> Other designs </label>
            </div>
            <div class="in-checkbox ch-ar">
                <input type="checkbox" name="requestType[]" value="Certificate" id="certificate">
                <label for="certificate" class="block"> <span class="font-shubuk">تصميم
                        الشهادات</span> <br> Certificate </label>
            </div>
            <div class="in-checkbox ch-ar">
                <input type="checkbox" name="requestType[]" value="Presentation" id="presentation">
                <label for="presentation" class="block"> <span class="font-shubuk">تصميم عروض
                        تقديمية</span> <br> Presentation</label>
            </div>
            <div class="in-checkbox ch-ar">
                <input type="checkbox" name="requestType[]" value="Letterhead" id="letterhead">
                <label for="letterhead" class="block"> <span class="font-shubuk">تصميم أوراق
                        المراسلات</span><br> Letterhead</label>
            </div>

            <div class="form-group col-span-4">
                <label for="brief" class="d-flex justify-content-between">
                    <span>Brief</span>
                    <span class="font-shubuk">شرح موجز عن الطلب</span>
                </label>
                <textarea class="in-input" cols="2" row="2" id="brief" name="brief" placeholder="Brief"></textarea>
                <small class="text-secondary text-center">
                    A meeting with department is required In the case of requesting a new corporate
                    identity.
                    <br>
                    <span class="font-shubuk">
                        في حـال طلـب تصميـم هويـة بصريـة جديـدة يجب تحديـد اجتماع مـع الإدارة لمناقشـة
                        الطلـب
                        وتحديـد
                        المتطلبات.
                    </span>
                </small>
            </div>

            <div dir="rtl"
                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                <div class="col-span-2">
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="popup[type]" value="1" id="popup">
                        <label for="popup" class="block">Pop-up <br> <span class="font-shubuk">خلفية
                                (بوب-آب)</span> </label>
                    </div>
                    <div class="form-group col-span-4">
                        <label for="popupContent" class="d-flex justify-content-between">
                            <span>Content</span>
                            <span class="font-shubuk">المحتوى</span> </label>
                        <textarea class="in-input" cols="2" row="2" id="popupContent" name="popup[content]"
                            placeholder="Content"></textarea>
                        <input type="file" class="mt-2">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div> <span class="font-shubuk">المواصفات</span> <br> Specifications</div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="popup[size]" value="3x2 curved frame" id="3x2">
                        <label for="3x2" class="block">3x2 curved frame </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="popup[size]" value="3x3 curved frame" id="3x3">
                        <label for="3x3" class="block">3x3 curved frame </label>
                        <img src="" alt="">
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="popup[size]" value="3x4 curved frame" id="3x4">
                        <label for="3x4" class="block">3x4 curved frame </label>
                    </div>
                </div>
            </div>
            <div dir="rtl"
                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                <div class="col-span-2">
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="notebook[type]" value="1" id="notebook">
                        <label for="notebook" class="block">Notebook <br> <span class="font-shubuk">تصميم دفاتر
                                الملاحظات</span>
                        </label>
                    </div>
                    <div class="form-group col-span-4">
                        <label for="notebookContent" class="d-flex justify-content-between">
                            <span>Content</span>
                            <span class="font-shubuk">المحتوى</span> </label>
                        <textarea class="in-input" cols="2" row="2" id="notebookContent" name="notebook[content]"
                            placeholder="Content"></textarea>
                        <input type="file" class="mt-2">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div> <span class="font-shubuk">المواصفات</span> <br> Specifications</div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="notebook[size]" value="A4 Vertical" id="verticalA4">
                        <label for="verticalA4" class="block">
                            A4 <br>
                            <span class="font-shubuk">Vertical طولي</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="notebook[size]" value="A4 Horizontal" id="horizontalA4">
                        <label for="horizontalA4" class="block">
                            A4 <br>
                            Horizontal <span class="font-shubuk">عرضي</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="notebook[size]" value="A5 Vertical" id="verticalA5">
                        <label for="verticalA5" class="block">
                            A5 <br>
                            Vertical <span class="font-shubuk">طولي</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="notebook[size]" value="A5 Horizontal" id="horizontalA5">
                        <label for="horizontalA5" class="block">
                            A5 <br>
                            Horizontal <span class="font-shubuk">عرضي</span>
                        </label>
                    </div>
                </div>
            </div>
            <div dir="rtl"
                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                <div class="col-span-2">
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="flyer[type]" value="1" id="flyer">
                        <label for="flyer" class="block">Flyer <br> <span class="font-shubuk">تصميم ورقة إعلانية
                                (فلاير)</span>
                        </label>
                    </div>
                    <div class="form-group col-span-4">
                        <label for="flyerContent" class="d-flex justify-content-between">
                            <span>Content</span>
                            <span class="font-shubuk">المحتوى</span> </label>
                        <textarea class="in-input" cols="2" row="2" id="flyerContent" name="flyer[content]"
                            placeholder="Content"></textarea>
                        <input type="file" class="mt-2">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div> <span class="font-shubuk">المواصفات</span> <br> Specifications</div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="flyer[size]" value="Vertical" id="vertical">
                        <label for="vertical" class="block font-shubuk">
                            Vertical <span class="font-shubuk">طولي</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="flyer[size]" value="Horizontal" id="horizontal">
                        <label for="horizontal" class="block">
                            Horizontal <span class="font-shubuk">عرضي</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="flyer[size]" value="Folded1" id="folded1">
                        <label for="folded1" class="block">
                            Folded <span class="font-shubuk">مطوية</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="flyer[size]" value="Folded2" id="folded2">
                        <label for="folded2" class="block">
                            Folded <span class="font-shubuk">مطوية</span>
                        </label>
                    </div>
                </div>
            </div>
            <div dir="rtl"
                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                <div class="col-span-2">
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="rollUp[type]" value="1" id="rollUp">
                        <label for="rollUp" class="block">Roll-up <br> <span class="font-shubuk">رول -
                                آب</span></label>
                    </div>
                    <div class="form-group col-span-4">
                        <label for="rollUpContent" class="d-flex justify-content-between">
                            <span>Content</span>
                            <span class="font-shubuk">المحتوى</span> </label>
                        <textarea class="in-input" cols="2" row="2" id="rollUpContent" name="rollUp[content]"
                            placeholder="Content"></textarea>
                        <input type="file" class="mt-2">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div> <span class="font-shubuk">المواصفات</span> <br> Specifications</div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="rollUp[size]" value="w100H200" id="w100H200">
                        <label for="w100H200" class="block">
                            <span class="font-shubuk">العرض 100 سم</span> <br>
                            <span class="font-shubuk">الطول 200 سم</span> <br>
                            Width 100 cm <br>
                            X Height 200 cm
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="rollUp[size]" value="w85H200" id="w85H200">
                        <label for="w85H200" class="block">
                            <span class="font-shubuk">العرض 85 سم</span> <br>
                            <span class="font-shubuk">الطول 200 سم</span> <br>
                            Width 85 cm <br>
                            X Height 200 cm
                        </label>
                    </div>
                </div>
            </div>
            <div dir="rtl"
                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                <div class="col-span-2">
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="brochure[type]" value="1" id="brochure">
                        <label for="brochure" class="block">Brochure <br> <span
                                class="font-shubuk">كتيب</span></label>
                    </div>
                    <div class="form-group col-span-4">
                        <label for="brochureContent" class="d-flex justify-content-between">
                            <span>Content</span>
                            <span class="font-shubuk">المحتوى</span> </label>
                        <textarea class="in-input" cols="2" row="2" id="brochureContent" name="brochure[content]"
                            placeholder="Content"></textarea>
                        <input type="file" class="mt-2">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div> <span class="font-shubuk">المواصفات</span> <br> Specifications</div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="brochure[size]" value="Vertical" id="verticalBrochure">
                        <label for="verticalBrochure" class="block">
                            Vertical <span class="font-shubuk">طولي</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="brochure[size]" value="Horizontal" id="horizontalBrochure">
                        <label for="horizontalBrochure" class="block">
                            Horizontal <span class="font-shubuk">عرضي</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="brochure[size]" value="Number of pages" id="noOfPageBrochure">
                        <label for="noOfPageBrochure" class="block">
                            Number of pages
                            <span class="font-shubuk">عدد الصفحات</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="brochure[size]" value="Size" id="sizeBrochure">
                        <label for="sizeBrochure" class="block">
                            Size
                            <span class="font-shubuk">المقاس</span>
                        </label>
                    </div>
                </div>
            </div>
            <div dir="rtl"
                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                <div class="col-span-2">
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="banner[type]" value="1" id="banner">
                        <label for="banner" class="block">Banner <br><span class="font-shubuk">خلفية (بانر)</span>
                        </label>
                    </div>
                    <div class="form-group col-span-4">
                        <label for="bannerContent" class="d-flex justify-content-between">
                            <span>Content</span>
                            <span class="font-shubuk">المحتوى</span> </label>
                        <textarea class="in-input" cols="2" row="2" id="bannerContent" name="banner[content]"
                            placeholder="Content"></textarea>
                        <input type="file" class="mt-2">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div> <span class="font-shubuk">المواصفات</span> <br> Specifications</div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="banner[size]" value="Printed" id="printed">
                        <label for="printed" class="block">
                            Printed <span class="font-shubuk">مطبوعة</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="banner[size]" value="Digital" id="digital">
                        <label for="digital" class="block">
                            Digital <span class="font-shubuk">إليكترونية</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="banner[size]" value="Height" id="height">
                        <label for="height" class="block">
                            Height <span class="font-shubuk">الارتفاع</span>
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="banner[size]" value="Width" id="width">
                        <label for="width" class="block">
                            Width <span class="font-shubuk">العرض</span>
                        </label>
                    </div>
                </div>
            </div>
            <div dir="rtl"
                class="col-span-2 grid grid-cols-2 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                <div class="col-span-2">
                    <div class="d-flex justify-content-between">
                        <div class="in-checkbox ch-ar">
                            <input type="checkbox" name="folderbusinessCardotherDesign[folderType]" value="1"
                                id="folder">
                            <label for="folder" class="block">Folder <br> <span
                                    class="font-shubuk">ملف</span></label>
                        </div>
                        <div class="in-checkbox ch-ar">
                            <input type="checkbox" name="folderbusinessCardotherDesign[businessCardType]"
                                value="1" id="businessCard">
                            <label for="businessCard" class="block">business card
                                <br> <span class="font-shubuk">بطاقة عمل</span>
                            </label>
                        </div>
                        <div class="in-checkbox ch-ar">
                            <input type="checkbox" name="folderbusinessCardotherDesign[otherDesignType]"
                                value="1" id="otherDesign">
                            <label for="otherDesign" class="block">Other Designs
                                <br><span class="font-shubuk">تصاميم أخرى</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-span-4">
                        <label for="folderbusinessCardotherDesignContent" class="d-flex justify-content-between">
                            <span>Brief</span>
                            <span class="font-shubuk">شرح موجز عن الطلب</span> </label>
                        <textarea class="in-input" cols="2" row="2" id="folderbusinessCardotherDesignContent"
                            name="folderbusinessCardotherDesign[content]" placeholder="Brief"></textarea>
                        <input type="file" class="mt-2">
                    </div>
                </div>
            </div>
            <div dir="rtl"
                class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                <div class="col-span-2">
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="uniformDesign[type]" value="1" id="uniformDesign">
                        <label for="uniformDesign" class="block">Uniform Design
                            <br><span class="font-shubuk">تصميم الملابس</span>
                        </label>
                    </div>
                    <div class="form-group col-span-4">
                        <label for="uniformDesignContent" class="d-flex justify-content-between">
                            <span>Brief</span>
                            <span class="font-shubuk">شرح موجز عن الطلب </span> </label>
                        <textarea class="in-input" cols="2" row="2" id="uniformDesignContent" name="uniformDesign[content]"
                            placeholder="Brief"></textarea>
                        <input type="file" class="mt-2">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div> <span class="font-shubuk">المواصفات</span> <br> Specifications</div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="uniformDesign[size]" value="Shirt" id="shirt">
                        <label for="shirt" class="block">
                            Shirt
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="uniformDesign[size]" value="Cap" id="cap">
                        <label for="cap" class="block">
                            Cap
                        </label>
                    </div>
                    <div class="in-checkbox ch-ar">
                        <input type="checkbox" name="uniformDesign[size]" value="T-shirt" id="tshirt">
                        <label for="tshirt" class="block">
                            T-shirt
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
            <span>Requesting department approval </span> <span class="font-shubuk">اعتماد الإدارة
                الطالبة</span>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-2">
            <div class="grid grid-cols-3 col-span-2 justify-between items-center">
                <label for="termsAndConditions">All terms have been read below </label>
                <div class=" mx-auto">
                    <label for="termsAndConditions"> </label>
                    <input type="checkbox" class="in-input" id="termsAndConditions" name="termsAndConditions"
                        value="1">
                </div>

                <label for="new" class="text-right font-shubuk"> تم قراءة جميع الشروط أدناه
                </label>
            </div>
            <div class="col-span-2 flex justify-between">
                <span>Department Manager</span>
                <span class="font-shubuk"> مدير
                    الإدارة
                </span>
            </div>
            <div class="border border-secondary rounded-md p-4">
                <div class="mb-4">Signature - <span class="font-shubuk">التوقيع</span></div>
                <button type="button" class="clear-btn" data-target="signature-pad-1">Clear</button>
                <canvas id="signature-pad-1" width="400" height="150" style="border:1px solid #ccc;"></canvas>
                <input type="hidden" name="departmentManager[signature]" id="managerSignature">
            </div>
            <div class=" border border-secondary rounded-md p-4">
                <div class="mb-4">Date - <span class="font-shubuk">التاريخ</span></div>
                <input type="date" name="departmentManager[date]" class="in-input">
            </div>
        </div>

        <div
            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md justify-between text-white flex items-center gap-2">
            <span>Markting & communication department approval</span>
            <span class="font-shubuk">اعتماد إدارة
                التسويق و الاتصال </span>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-2">
            {{-- <div class="col-span-2">Department Manager / مدير الإدارة </div> --}}
            <div class="border border-secondary rounded-md p-4  ">
                <div class="mb-4">Signature - <span class="font-shubuk">التوقيع</span></div>
                <button type="button" class="clear-btn" data-target="signature-pad-2">Clear</button>
                <canvas id="signature-pad-2" width="400" height="150" style="border:1px solid #ccc;"></canvas>
                <input type="hidden" name="marketing[signature]" id="marketingSignature">
            </div>
            <div class=" border border-secondary rounded-md p-4">
                <div class="mb-4">Date - <span class="font-shubuk">التاريخ</span></div>
                <input type="date" name="marketing[date]" class="in-input">
            </div>
        </div>

        <div
            class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md justify-between text-white flex items-center gap-2">
            <span>For design unit official use </span> <span class="font-shubuk">للاستعمال الرسمي من
                قبل وحدة
                التصميم</span>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-2">
            <div class="form-group">
                <label for="requestNumber" class="flex justify-between"><span>Request number</span>
                    <span class="font-shubuk">رقم
                        الطلب </span></label>
                <textarea class="in-input" cols="2" row="2" name="requestNumber" id="requestNumber">{{ $requestIdNumber }}</textarea>
            </div>
        </div>
        <div class="mt-2">
            <div class="in-checkbox   col-span-2">
                <input type="checkbox" class="in-input" id="terms" name="terms" value="1">
                <label for="terms">
                    <span>I agree to <a href="#tandc" class="text-secondary modal-in">terms and
                            conditions</a></span>
                </label>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <button class="btn-blue">Submit</button>
        </div>
    </div>
</form>

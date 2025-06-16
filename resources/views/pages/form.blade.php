@extends('layouts.master_layout')

@section('content')
    <div class="bg-primary py-4">
        <div class="container">
            <div class="flex gap-6 justify-center">
                <div class="w-[300px]">
                    <div class="bg-white   shadow-lg  rounded-lg  w-full sticky top-4">
                        <h2 class="text-white text-lg font-medium bg-secondary px-5 py-1">Marketing Forms</h2>
                        <ul class="p-6">
                            <li><a href="" class="text-secondary">Graphic design request </a></li>
                            <li><a href="" class="text-secondary">Cermony Form </a></li>
                            <li><a href="" class="text-secondary">Internal Events </a></li>
                        </ul>
                    </div>
                </div>
                <div class="max-w-[1000px]">
                    <a href="{{route('form-pdf') }}" class="btn-blue max-w-20 flex justify-center mb-4 ml-auto" target="_blank" >Print</a>
                    <form action="{{ route('request.submit', [$slug]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="{{ $slug }}">
                        <div class="bg-white px-6 py-4 shadow-lg  rounded-lg  mx-auto">
                            <div class="title max-w-[500px] border-2 rounded-lg border-primary mx-auto p-6">
                                <div class="font-semibold text-xl text-secondary text-center">إسـتـــمـــارة طلـــــب
                                    تصـمـــيــــم
                                </div>
                                <div class="font-semibold text-xl text-secondary text-center">GRAPHIC DESIGN REQUEST</div>

                                <div class="grid grid-cols-2 gap-4 text-left mt-4 ">
                                    <div class=" col-span-2 mt-2 flex form-group">
                                        <label for="requestDate" class="flex justify-between"><span>Date Request</span>
                                            <span>تاريخ
                                                تقديم الطلب</span></label>
                                        <input type="date" class="in-input w-full" value="{{ now()->format('Y-m-d') }}"
                                            id="requestDate" name="requestDate">
                                    </div>

                                    <div class="col-span-2">
                                        <div class="flex justify-between"><span>Type of the request</span>
                                            <span>الطــــــــلب
                                                طـــبيــــــــعة</span> </div>
                                        <div class="grid grid-cols-1 gap-4 mt-1">
                                            <div class="flex items-center justify-between w-[150px] mx-auto">
                                                <label for="urgent">Urgent </label>
                                                <div class="in-checkbox">
                                                    <input type="checkbox" name="subscribe" value="urgent" id="urgent"
                                                        data-id="justification" class="subscribe">
                                                    <label for="urgent"></label>
                                                </div>
                                                <label for="urgent"> عاجــــل</label>
                                            </div>
                                            <div class="flex items-center justify-between w-[150px] mx-auto">
                                                <label for="normal">Normal</label>
                                                <div class="in-checkbox">
                                                    <input type="checkbox" name="subscribe" value="normal" id="normal"
                                                        data-id="justification" class="subscribe">
                                                    <label for="normal"> </label>
                                                </div>
                                                <label for="normal">عــــادي</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div></div>
                                    <div class="form-group mt-2">
                                        <label for="requestId" class="flex justify-between"><span>No. Requests</span>
                                            <span>رقم
                                                الطلب</span></label>
                                        <input type="text" class="in-input" value="{{ $requestIdNumber }}" id="requestId"
                                            name="requestId" readonly>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
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
                                class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex justify-between items-center gap-2">
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
                                    <small class="text-secondary text-center">هذا الطلب للتصميم فقط حيث لا يشمل وقت الطباعة
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
                                    <span>Justification for the Urgent Request </span> <span>العاجل الطلب مبررات</span>
                                </div>
                                <div class="grid grid-cols-1 gap-4 mt-2">
                                    <div class="form-group">
                                        {{-- <label for="justificationForTheUrgentRequest">Justification for the Urgent Request</label> --}}
                                        <textarea class="in-input" id="justificationForTheUrgentRequest" name="justificationForTheUrgentRequest"
                                            cols="2" row="2" placeholder="Justification for the Urgent Request"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
                                <span>Purpose of the Request </span> <span>الطلب من الغرض</span>
                            </div>
                            <div class="grid grid-cols-1 gap-4 mt-2">
                                <div class="form-group">
                                    {{-- <label for="purposeOfTheRequest">Purpose of the Request</label> --}}
                                    <textarea placeholder="Purpose of the Request" id="purposeOfTheRequest" name="purposeOfTheRequest" class="in-input"
                                        cols="2" row="2"></textarea>
                                </div>
                            </div>

                            <div
                                class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
                                <span>REQUESTS </span> <span>الطلبات</span>
                            </div>
                            <div class="grid grid-cols-4 gap-4 mt-2">
                                <div class="in-checkbox">
                                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                                    <label for="vh" class="flex">Vehicle branding <br> تصميم المركبات </label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="requestType[]" value="Signage Design" id="signage">
                                    <label for="signage" class="flex">Signage design <br> لوحات إرشادية </label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="requestType[]" value="Trophy / Gift Design"
                                        id="trophy">
                                    <label for="trophy" class="flex">Trophy / Gift design <br> تصميم درع / هدية
                                    </label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="requestType[]" value="Full New Corporate Identity"
                                        id="identity">
                                    <label for="identity" class="flex">Full new corporate identity <br> هوية بصرية جديدة
                                    </label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="requestType[]" value="Other Designs" id="other">
                                    <label for="other" class="flex">Other designs <br> تصاميم أخرى </label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="requestType[]" value="Certificate" id="certificate">
                                    <label for="certificate" class="flex">Certificate <br> تصميم الشهادات </label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="requestType[]" value="Presentation" id="presentation">
                                    <label for="presentation" class="flex">Presentation <br> تصميم عروض تقديمية </label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="requestType[]" value="Letterhead" id="letterhead">
                                    <label for="letterhead" class="flex">Letterhead <br> تصميم أوراق المراسلات </label>
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
                                <div dir="rtl"
                                    class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                    <div class="col-span-2">
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox" name="popup[type]" value="1" id="popup">
                                            <label for="popup" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                                        </div>
                                        <div class="form-group col-span-4">
                                            <label for="popupContent" class="d-flex justify-content-between">
                                                <span>Content</span>
                                                <span>المحتوى</span> </label>
                                            <textarea class="in-input" cols="2" row="2" id="popupContent" name="popup[content]"
                                                placeholder="Content"></textarea>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div>Specifications <br> المواصفات</div>
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
                                <div dir="rtl"
                                    class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                    <div class="col-span-2">
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox" name="notebook[type]" value="1" id="notebook">
                                            <label for="notebook" class="flex">Notebook <br> تصميم دفاتر الملاحظات
                                            </label>
                                        </div>
                                        <div class="form-group col-span-4">
                                            <label for="notebookContent" class="d-flex justify-content-between">
                                                <span>Content</span>
                                                <span>المحتوى</span> </label>
                                            <textarea class="in-input" cols="2" row="2" id="notebookContent" name="notebook[content]"
                                                placeholder="Content"></textarea>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div>Specifications <br> المواصفات</div>
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
                                <div dir="rtl"
                                    class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                    <div class="col-span-2">
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox" name="flyer[type]" value="1" id="flyer">
                                            <label for="flyer" class="flex">Flyer <br> تصميم ورقة إعلانية (فلاير)
                                            </label>
                                        </div>
                                        <div class="form-group col-span-4">
                                            <label for="flyerContent" class="d-flex justify-content-between">
                                                <span>Content</span>
                                                <span>المحتوى</span> </label>
                                            <textarea class="in-input" cols="2" row="2" id="flyerContent" name="flyer[content]"
                                                placeholder="Content"></textarea>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div>Specifications <br> المواصفات</div>
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
                                <div dir="rtl"
                                    class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                    <div class="col-span-2">
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox" name="rollUp[type]" value="1" id="rollUp">
                                            <label for="rollUp" class="flex">Roll-up <br> رول - آب</label>
                                        </div>
                                        <div class="form-group col-span-4">
                                            <label for="rollUpContent" class="d-flex justify-content-between">
                                                <span>Content</span>
                                                <span>المحتوى</span> </label>
                                            <textarea class="in-input" cols="2" row="2" id="rollUpContent" name="rollUp[content]"
                                                placeholder="Content"></textarea>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div>Specifications <br> المواصفات</div>
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
                                <div dir="rtl"
                                    class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                    <div class="col-span-2">
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox" name="brochure[type]" value="1" id="brochure">
                                            <label for="brochure" class="flex">Brochure <br> كتيب</label>
                                        </div>
                                        <div class="form-group col-span-4">
                                            <label for="brochureContent" class="d-flex justify-content-between">
                                                <span>Content</span>
                                                <span>المحتوى</span> </label>
                                            <textarea class="in-input" cols="2" row="2" id="brochureContent" name="brochure[content]"
                                                placeholder="Content"></textarea>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div>Specifications <br> المواصفات</div>
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
                                <div dir="rtl"
                                    class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                                    <div class="col-span-2">
                                        <div class="in-checkbox ch-ar">
                                            <input type="checkbox" name="banner[type]" value="1" id="banner">
                                            <label for="banner" class="flex">Banner <br>خلفية (بانر) </label>
                                        </div>
                                        <div class="form-group col-span-4">
                                            <label for="bannerContent" class="d-flex justify-content-between">
                                                <span>Content</span>
                                                <span>المحتوى</span> </label>
                                            <textarea class="in-input" cols="2" row="2" id="bannerContent" name="banner[content]"
                                                placeholder="Content"></textarea>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div>Specifications <br> المواصفات</div>
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
                                <div dir="rtl"
                                    class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
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
                                                <span>Brief</span>
                                                <span>شرح موجز عن الطلب</span> </label>
                                            <textarea class="in-input" cols="2" row="2" id="folderbusinessCardotherDesignContent"
                                                name="folderbusinessCardotherDesign[content]" placeholder="Brief"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div dir="rtl"
                                    class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
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
                                                <span>Brief</span>
                                                <span>شرح موجز عن الطلب </span> </label>
                                            <textarea class="in-input" cols="2" row="2" id="uniformDesignContent" name="uniformDesign[content]"
                                                placeholder="Brief"></textarea>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div>Specifications <br> المواصفات</div>
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

                            <div
                                class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center justify-between gap-2">
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
                                <div class="col-span-2 flex justify-between"><span>Department Manager</span> <span> مدير
                                        الإدارة
                                    </span></div>
                                <div class=" border border-secondary rounded-md p-4">
                                    <div class="mb-4">Signature - التوقيع</div>
                                    <input type="text" name="departmentManager[signature]" class="in-input">
                                </div>
                                <div class=" border border-secondary rounded-md p-4">
                                    <div class="mb-4">Date - التاريخ</div>
                                    <input type="date" name="departmentManager[date]" class="in-input">
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
                                <div class=" border border-secondary rounded-md p-4">
                                    <div class="mb-4">Signature - التوقيع</div>
                                    <input type="text" name="marketing[signature]" class="in-input">
                                </div>
                                <div class=" border border-secondary rounded-md p-4">
                                    <div class="mb-4">Date - التاريخ</div>
                                    <input type="date" name="marketing[date]" class="in-input">
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
                                    <textarea class="in-input" cols="2" row="2" name="requestNumber" id="requestNumber">{{ $requestIdNumber }}</textarea>
                                </div>
                            </div>
                            <div class="flex justify-end mt-4">
                                <button class="btn-blue">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

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


            $(document).on('change', 'input[name="subscribe"]', function() {
                let id = $(this).attr('data-id')
                if ($(this).val() == 'urgent') {
                    console.log(id)
                    $("#" + id).show()
                }
                if ($(this).val() == 'normal') {
                    console.log(id)
                    $("#" + id).hide()
                }
            })

        })
    </script>
@endsection

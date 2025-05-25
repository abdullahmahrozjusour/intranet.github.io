@extends('layouts.master_layout')

@section('content')
<div class="bg-primary py-4">
    <div class="container-in">
        <form action="{{ route('request.submit',[$slug]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" value="{{ $slug }}">
            <div class="bg-white px-6 py-4 shadow-lg  rounded-lg max-w-[1000px] mx-auto">
                <div class="title max-w-[800px] ">
                    <div class="font-semibold text-xl text-secondary">GRAPHIC DESIGN REQUEST</div>
                    <div class="font-semibold text-xl text-secondary">إسـتـــمـــارة طلـــــب تصـمـــيــــم </div>
                    <div class="grid grid-cols-4 gap-4 text-left mt-4 items-end">
                        <div class="form-group mt-2">
                            <label for="requestDate">Date Request / تاريخ تقديم الطلب</label>
                            <input type="date" class="in-input" value="{{ now()->format('Y-m-d') }}" id="requestDate"
                                name="requestDate">
                        </div>
                        <div class="form-group mt-2">
                            <label for="requestId">No. Requests / رقم الطلب</label>
                            <input type="text" class="in-input" value="{{ $requestIdNumber }}" id="requestId"
                                name="requestId" readonly>
                        </div>
                        <div class="col-span-2">
                            <div>Type of the request / الطــــــــلب طـــبيــــــــعة </div>
                            <div class="grid grid-cols-2 gap-4 mt-1">
                                <div class="in-checkbox">
                                    <input type="checkbox" name="subscribe" value="urgent" id="urgent"
                                        class="subscribe">
                                    <label for="urgent">Urgent / عاجــــل</label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="subscribe" value="normal" id="normal"
                                        class="subscribe">
                                    <label for="normal">Normal / عــــادي</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn-blue">Submit</button>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>Applicant's Details / معلومات مقدم الطلب </span>
                </div>
                <div class="grid grid-cols-4 gap-4 mt-2">
                    <div class="form-group">
                        <label for="applicantName">Applicant name / الاسم </label>
                        <input type="text" class="in-input" id="applicantName" name="applicantName"
                            placeholder="Applicant name / الاسم">
                    </div>
                    <div class="form-group">
                        <label for="applicantContactNumber">Applicant contact no. / الهاتف </label>
                        <input type="text" class="in-input" id="applicantContactNumber" name="applicantContactNumber"
                            placeholder="Applicant contact no. / الهاتف">
                    </div>
                    <div class="form-group">
                        <label for="applicantEmail">Applicant e-mail / الإيميل </label>
                        <input type="email" class="in-input" id="applicantEmail" name="applicantEmail"
                            placeholder="Applicant e-mail / الإيميل">
                    </div>
                    <div class="form-group">
                        <label for="department">Department / القسم </label>
                        <input type="text" class="in-input" id="department" name="department"
                            placeholder="Department / القسم">
                    </div>
                </div>
                <div
                    class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>Request Details / تفاصيل الطلب </span>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-2">
                    <div class="in-checkbox">
                        <input type="checkbox" name="newRequest" value="yes" id="new">
                        <label for="new">New request / طلب جديد </label>
                    </div>
                    <div class="in-checkbox">
                        <input type="checkbox" name="modificationRequestOfPreviousDesign" value="yes" id="mod">
                        <label for="mod">Modification request of previous design / طلب تعديل على تصميم سابق </label>
                    </div>
                    <div class="form-group mt-2">
                        <label for="deliveryDate">Delivery date / تاريـخ الاحتيـاج </label>
                        <input type="date" class="in-input " id="deliveryDate" name="deliveryDate">
                    </div>
                    <div class="flex flex-col">
                        <label for="">&nbsp;</label>
                        <small class="text-secondary">This request is for design only and does not include printing
                            time,
                            manufacturing or any
                            other application
                            mechanism</small>
                        <small class="text-secondary">هذا الطلب للتصميم فقط حيث لا يشمل وقت الطباعة أو التصنيع أو أية
                            آلية
                            تطبيق أخرى
                        </small>
                    </div>
                </div>

                <div
                    class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>Justification for the Urgent Request / العاجل الطلب مبررات
                    </span>
                </div>
                <div class="grid grid-cols-1 gap-4 mt-2">
                    <div class="form-group">
                        <label for="justificationForTheUrgentRequest">Justification for the Urgent Request</label>
                        <textarea class="in-input" id="justificationForTheUrgentRequest"
                            name="justificationForTheUrgentRequest" cols="2" row="2"
                            placeholder="Justification for the Urgent Request"></textarea>
                    </div>
                </div>

                <div
                    class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>Purpose of the Request / الطلب من الغرض/
                    </span>
                </div>
                <div class="grid grid-cols-1 gap-4 mt-2">
                    <div class="form-group">
                        <label for="purposeOfTheRequest">Purpose of the Request</label>
                        <textarea placeholder="Purpose of the Request" id="purposeOfTheRequest"
                            name="purposeOfTheRequest" class="in-input" cols="2" row="2"></textarea>
                    </div>
                </div>

                <div
                    class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>REQUESTS / الطلبات
                    </span>
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
                        <input type="checkbox" name="requestType[]" value="Trophy / Gift Design" id="trophy">
                        <label for="trophy" class="flex">Trophy / Gift design <br> تصميم درع / هدية </label>
                    </div>
                    <div class="in-checkbox">
                        <input type="checkbox" name="requestType[]" value="Full New Corporate Identity" id="identity">
                        <label for="identity" class="flex">Full new corporate identity <br> هوية بصرية جديدة </label>
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
                        <textarea class="in-input" cols="2" row="2" id="brief" name="brief"
                            placeholder="Brief"></textarea>
                        <small class="text-secondary text-center">
                            A meeting with department is required In the case of requesting a new corporate identity.
                            <br>
                            في حـال طلـب تصميـم هويـة بصريـة جديـدة يجب تحديـد اجتماع مـع الإدارة لمناقشـة الطلـب
                            وتحديـد
                            المتطلبات.
                        </small>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="popup[type]" value="1" id="popup">
                                <label for="popup" class="flex">Pop-up <br> خلفية (بوب-آب) </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="popupContent" class="d-flex justify-content-between"> <span>Content</span>
                                    <span>المحتوى</span> </label>
                                <textarea class="in-input" cols="2" row="2" id="popupContent" name="popup[content]"
                                    placeholder="Content"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="popup[size]" value="3x2 curved frame" id="3x2">
                                <label for="3x2" class="flex">3x2 curved frame </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="popup[size]" value="3x3 curved frame" id="3x3">
                                <label for="3x3" class="flex">3x3 curved frame </label>
                                <img src="" alt="">
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="popup[size]" value="3x4 curved frame" id="3x4">
                                <label for="3x4" class="flex">3x4 curved frame </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="notebook[type]" value="1" id="notebook">
                                <label for="notebook" class="flex">Notebook <br> تصميم دفاتر الملاحظات </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="notebookContent" class="d-flex justify-content-between">
                                    <span>Content</span>
                                    <span>المحتوى</span> </label>
                                <textarea class="in-input" cols="2" row="2" id="notebookContent"
                                    name="notebook[content]" placeholder="Content"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="notebook[size]" value="A4 Vertical" id="verticalA4">
                                <label for="verticalA4" class="block">
                                    A4 <br>
                                    Vertical طولي
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="notebook[size]" value="A4 Horizontal" id="horizontalA4">
                                <label for="horizontalA4" class="block">
                                    A4 <br>
                                    Horizontal عرضي
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="notebook[size]" value="A5 Vertical" id="verticalA5">
                                <label for="verticalA5" class="block">
                                    A5 <br>
                                    Vertical طولي
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="notebook[size]" value="A5 Horizontal" id="horizontalA5">
                                <label for="horizontalA5" class="block">
                                    A5 <br>
                                    Horizontal عرضي
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="flyer[type]" value="1" id="flyer">
                                <label for="flyer" class="flex">Flyer <br> تصميم ورقة إعلانية (فلاير) </label>
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
                            <div class="in-checkbox">
                                <input type="checkbox" name="flyer[size]" value="Vertical" id="vertical">
                                <label for="vertical" class="block">
                                    Vertical طولي
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="flyer[size]" value="Horizontal" id="horizontal">
                                <label for="horizontal" class="block">
                                    Horizontal عرضي
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="flyer[size]" value="Folded1" id="folded1">
                                <label for="folded1" class="block">
                                    Folded مطوية
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="flyer[size]" value="Folded2" id="folded2">
                                <label for="folded2" class="block">
                                    Folded مطوية
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
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
                            <div class="in-checkbox">
                                <input type="checkbox" name="rollUp[size]" value="w100H200" id="w100H200">
                                <label for="w100H200" class="block">
                                    العرض 100 سم <br>
                                    الطول 200 سم <br>
                                    Width 100 cm <br>
                                    X Height 200 cm
                                </label>
                            </div>
                            <div class="in-checkbox">
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
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="brochure[type]" value="1" id="brochure">
                                <label for="brochure" class="flex">Brochure <br> كتيب</label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="brochureContent" class="d-flex justify-content-between">
                                    <span>Content</span>
                                    <span>المحتوى</span> </label>
                                <textarea class="in-input" cols="2" row="2" id="brochureContent"
                                    name="brochure[content]" placeholder="Content"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="brochure[size]" value="Vertical" id="verticalBrochure">
                                <label for="verticalBrochure" class="block">
                                    Vertical طولي
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="brochure[size]" value="Horizontal" id="horizontalBrochure">
                                <label for="horizontalBrochure" class="block">
                                    Horizontal عرضي
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="brochure[size]" value="Number of pages"
                                    id="noOfPageBrochure">
                                <label for="noOfPageBrochure" class="block">
                                    Number of pages
                                    عدد الصفحات
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="brochure[size]" value="Size" id="sizeBrochure">
                                <label for="sizeBrochure" class="block">
                                    Size
                                    المقاس
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
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
                            <div class="in-checkbox">
                                <input type="checkbox" name="banner[size]" value="Printed" id="printed">
                                <label for="printed" class="block">
                                    Printed مطبوعة
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="banner[size]" value="Digital" id="digital">
                                <label for="digital" class="block">
                                    Digital إليكترونية
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="banner[size]" value="Height" id="height">
                                <label for="height" class="block">
                                    Height الارتفاع
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="banner[size]" value="Width" id="width">
                                <label for="width" class="block">
                                    Width العرض
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="d-flex justify-content-between">
                                <div class="in-checkbox">
                                    <input type="checkbox" name="folderbusinessCardotherDesign[folderType]" value="1"
                                        id="folder">
                                    <label for="folder" class="flex">Folder <br> ملف</label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="folderbusinessCardotherDesign[businessCardType]"
                                        value="1" id="businessCard">
                                    <label for="businessCard" class="flex">business card
                                        <br> بطاقة عمل
                                    </label>
                                </div>
                                <div class="in-checkbox">
                                    <input type="checkbox" name="folderbusinessCardotherDesign[otherDesignType]"
                                        value="1" id="otherDesign">
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
                    <div class="col-span-2 grid grid-cols-3 gap-3 border border-gray-500 rounded-md p-4 bg-gray-50">
                        <div class="col-span-2">
                            <div class="in-checkbox">
                                <input type="checkbox" name="uniformDesign[type]" value="1" id="uniformDesign">
                                <label for="uniformDesign" class="flex">Uniform Design
                                    <br>تصميم الملابس
                                </label>
                            </div>
                            <div class="form-group col-span-4">
                                <label for="uniformDesignContent" class="d-flex justify-content-between">
                                    <span>Brief</span>
                                    <span>شرح موجز عن الطلب </span> </label>
                                <textarea class="in-input" cols="2" row="2" id="uniformDesignContent"
                                    name="uniformDesign[content]" placeholder="Brief"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Specifications <br> المواصفات</div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="uniformDesign[size]" value="Shirt" id="shirt">
                                <label for="shirt" class="block">
                                    Shirt
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="uniformDesign[size]" value="Cap" id="cap">
                                <label for="cap" class="block">
                                    Cap
                                </label>
                            </div>
                            <div class="in-checkbox">
                                <input type="checkbox" name="uniformDesign[size]" value="T-shirt" id="tshirt">
                                <label for="tshirt" class="block">
                                    T-shirt
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>Requesting department approval / اعتماد الإدارة الطالبة
                    </span>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-2">
                    <div class="in-checkbox col-span-2">
                        <input type="checkbox" class="in-input" id="termsAndConditions" name="termsAndConditions"
                            value="1">
                        <label for="termsAndConditions">All terms have been read below / أدناه الشروط جميع قراءة
                            تم</label>
                    </div>
                    <div class="col-span-2">Department Manager / مدير الإدارة </div>
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
                    class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>markting & communication department approval / اعتماد إدارة
                        التسويق و الاتصال </span>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-2">
                    <div class="col-span-2">Department Manager / مدير الإدارة </div>
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
                    class="bg-primary mt-4 px-4 py-2 font-medium text-md rounded-md text-white flex items-center gap-2">
                    <i class="fa-solid fa-user"></i> <span>For design unit official use / للاستعمال الرسمي من قبل وحدة
                        التصميم
                    </span>
                </div>
                <div class="grid grid-cols-1 gap-4 mt-2">
                    <div class="form-group">
                        <label for="requestNumber">Request number / رقم الطلب </label>
                        <textarea class="in-input" cols="2" row="2" name="requestNumber"
                            id="requestNumber">{{ $requestIdNumber }}</textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('javaScript')
<script>
    $(document).ready(function(){
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

        $(document).on('change','.subscribe',function(){
            $('.subscribe').prop('checked',false);
            $(this).prop('checked',true);
        })
    })
</script>
@endsection
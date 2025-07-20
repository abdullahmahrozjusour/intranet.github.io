{{-- <form action="{{ route('request.submit', [$slug]) }}" method="POST" enctype="multipart/form-data"> --}}
<form>
    @csrf
    <input type="hidden" name="type" value="{{ $slug }}">

    <div class=" px-6 py-4   mx-auto max-w-[700px]  ">


        <div
            class="bg-secondary mt-4 px-4 py-2 font-semibold text-md uppercase rounded-md text-white flex items-center justify-center gap-2">
            <span cl>IT Request From </span>
            {{-- <span class="font-shubuk">معلومات مقدم الطلب</span> --}}
        </div>

        <div class="mt-4" dir="rtl">
            <div class="mb-1 font-semibold font-shubuk">يشسيلا:</div>
            <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                <div class="flex items-center gap-2">
                    <label for="" class="whitespace-nowrap">شسييي:</label>
                    <input type="input" class="in-input w-full">
                </div>
                <div class="flex items-center gap-2">
                    <label for="" class="whitespace-nowrap">شسييي:</label>
                    <input type="input" class="in-input w-full">
                </div>
                <div class="flex items-center gap-2">
                    <label for="" class="whitespace-nowrap">شسييي:</label>
                    <input type="input" class="in-input w-full">
                </div>
                <div class="flex items-center gap-2">
                    <label for="" class="whitespace-nowrap">شسييي:</label>
                    <input type="input" class="in-input w-full">
                </div>
                <div class="flex items-center gap-2">
                    <label for="" class="whitespace-nowrap">شسييي:</label>
                    <input type="input" class="in-input w-full">
                </div>
                <div class="flex items-center gap-2">
                    <label for="" class="whitespace-nowrap">شسييي:</label>
                    <input type="input" class="in-input w-full">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mt-4 justify-between py-3 px-4">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
            </div>

            <div class="mt-4 mb-1 font-semibold font-shubuk">سشي:</div>
            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
            </div>

            <div class="mt-4 mb-1 font-semibold font-shubuk">سشي:</div>
            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
            </div>

            <div class="mt-4 mb-1 font-semibold font-shubuk">سشي:</div>
            <div class="grid grid-cols-3 gap-4  justify-between bg-gray-100 py-3 px-4 rounded-lg">
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
                <div class="in-checkbox ch-ar">
                    <input type="checkbox" name="requestType[]" value="Vehicle Branding" id="vh">
                    <label for="vh" class="block"><span class="font-shubuk">تصميم المركبات</span>
                        <br> </label>
                </div>
            </div>

            <div class="form-group mt-4">
                <label for="process" class="d-flex justify-content-between">
                    {{-- <span>Fall back process in case of issues:: </span> --}}
                    <span class="font-shubuk">شرح موجز عن الطلب</span>
                </label>
                <textarea class="in-input" cols="2" row="2" id="process" name="process"
                    placeholder="Fall back process in case of issues"></textarea>
            </div>

            <div
                class="  bg-secondary mt-4 px-4 py-2 font-semibold text-md uppercase rounded-md text-white flex items-center justify-center gap-2">
                {{-- <span cl>IT Request From </span> --}}
                <span class="font-shubuk">معلومات</span>
            </div>
            <div class="mt-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold font-shubuk">يشسيلا:</div>
                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                    </div>


                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <div class="mb-1 font-semibold font-shubuk">يشسيلا:</div>
                            <div
                                class="grid grid-cols-2 gap-2 bg-gray-100 py-3 px-4 rounded-lg h-[calc(100% - 1.8rem)]">
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="requestType[]" value="Vehicle Branding"
                                        id="vh">
                                    <label for="vh" class="block"><span class="font-shubuk">تصميم
                                            المركبات</span>
                                        <br> </label>
                                </div>
                                <div class="in-checkbox ch-ar">
                                    <input type="checkbox" name="requestType[]" value="Vehicle Branding"
                                        id="vh">
                                    <label for="vh" class="block"><span class="font-shubuk">تصميم
                                            المركبات</span>
                                        <br> </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label for="process" class="d-flex justify-content-between">
                                {{-- <span>Fall back process in case of issues:: </span> --}}
                                <div class="mb-1 font-semibold font-shubuk">يشسيلا:</div>
                            </label>
                            <textarea class="in-input !bg-grey-200" cols="2" row="2" id="process" name="process"
                                placeholder="Fall back process in case of issues"></textarea>
                        </div>
                    </div>

                    <div class="mb-1 font-semibold font-shubuk">يشسيلا:</div>
                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold font-shubuk">يشسيلا:</div>
                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                    </div>

                    <div class="mb-1 font-semibold font-shubuk mt-4">يشسيلا:</div>
                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
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
                    <div class="mb-1 font-semibold font-shubuk">يشسيلا:</div>
                    <div class="bg-gray-100 py-3 px-4 grid grid-cols-2 gap-2 rounded-lg">

                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                        <div class="form-group ">
                            <label for="" class="whitespace-nowrap">شسييي:</label>
                            <input type="input" class="in-input w-full">
                        </div>
                    </div>
                </div>
                <div class="form-group  ">
                    <label for="process" class="d-flex justify-content-between">
                        {{-- <span>Fall back process in case of issues:: </span> --}}
                        <div class="mb-1 font-semibold font-shubuk">يشسيلا:</div>
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

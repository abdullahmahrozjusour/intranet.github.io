<form action="{{ route('change.submit', [$slug]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="type" value="{{ $slug }}">

    <div class=" px-6 py-4   mx-auto max-w-[700px]  ">


        <div
            class="bg-secondary mt-4 px-4 py-2 font-semibold text-md uppercase rounded-md text-white flex items-center justify-center gap-2">
            <span cl>Change Request to Production </span>
            {{-- <span class="font-shubuk">معلومات مقدم الطلب</span> --}}
        </div>

        <div class="grid grid-cols-1 gap-4 my-4">
            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                <label for="namechange" class="whitespace-nowrap col-span-2">Name of the change: </label>
                <input type="text" class="in-input w-full col-span-3" id="namechange" name="namechange"
                    placeholder="">
            </div>
            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                <label for="nameMaker" class="whitespace-nowrap col-span-2">Name of the maker: </label>
                <input type="text" class="in-input w-full col-span-3" id="nameMaker" name="nameMaker" placeholder="">
            </div>
            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                <label for="nameChecker" class="whitespace-nowrap col-span-2">Name of the checker: </label>
                <input type="text" class="in-input w-full col-span-3" id="nameChecker" name="nameChecker"
                    placeholder="">
            </div>

            <div class="form-group ">
                <label for="brief" class="d-flex justify-content-between">
                    <span>Description of the change: </span>
                    {{-- <span class="font-shubuk">شرح موجز عن الطلب</span> --}}
                </label>
                <textarea class="in-input" cols="2" row="2" id="brief" name="brief"
                    placeholder="Description of the change"></textarea>
            </div>
            <div class="grid grid-cols-5 gap-4 w-full ">
                <div class="whitespace-nowrap col-span-2">Implementation risks:</div>
                <div class="radioButton">
                    <input type="radio" name="risks" value="1" id="high">
                    <label for="high">High</label>
                </div>
                <div class="radioButton">
                    <input type="radio" name="risks" value="2" id="medium">
                    <label for="medium">Medium</label>
                </div>
                <div class="radioButton">
                    <input type="radio" name="risks" value="2" id="low">
                    <label for="low">Low</label>
                </div>
            </div>

            <div class="form-group ">
                <label for="scenarios" class="d-flex justify-content-between">
                    <span>Test scenarios: </span>
                    {{-- <span class="font-shubuk">شرح موجز عن الطلب</span> --}}
                </label>
                <textarea class="in-input" cols="2" row="2" id="scenarios" name="scenarios" placeholder="Test scenarios"></textarea>
            </div>
            <div class="form-group ">
                <label for="process" class="d-flex justify-content-between">
                    <span>Fall back process in case of issues:: </span>
                    {{-- <span class="font-shubuk">شرح موجز عن الطلب</span> --}}
                </label>
                <textarea class="in-input" cols="2" row="2" id="process" name="process"
                    placeholder="Fall back process in case of issues"></textarea>
            </div>

            <div class="grid grid-cols-5 gap-4 w-full">
                <div class="font-semibold col-span-2">Proposed time/date of the change</div>
                <div class="col-span-3 grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-2">
                        <label for="">Date:</label>
                        <input type="date" class="in-input w-full">
                    </div>
                    <div class="flex items-center gap-2">
                        <label for="">Time:</label>
                        <input type="time" class="in-input w-full">
                    </div>
                </div>
            </div>

            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                <label for="department" class="whitespace-nowrap col-span-2">Requester Department: </label>
                <input type="text" class="in-input w-full col-span-3" id="department" name="department"
                    placeholder="">
            </div>


            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                <label for="signature" class="whitespace-nowrap col-span-2">Approved by / Signature:</label>
                <input type="text" class="in-input w-full col-span-3" id="signature" name="signature"
                    placeholder="">
            </div>


            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                <label for="aprDepartment" class="whitespace-nowrap col-span-2">Approval Department </label>
                <input type="text" class="in-input w-full col-span-3" id="aprDepartment" name="aprDepartment"
                    placeholder="">
            </div>

            <div class=" grid grid-cols-5 gap-4 w-full items-center">
                <label for="aprSignature" class="whitespace-nowrap col-span-2">Approved by / Signature </label>
                <input type="text" class="in-input w-full col-span-3" id="aprSignature" name="aprSignature"
                    placeholder="">
            </div>

            <div class="grid grid-cols-5 gap-4 w-full">
                <div class="col-span-2 font-semibold">Final status:</div>
                <div class="col-span-3 grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-2">
                        <label for="">Cancelled</label>
                        <input type="input" class="in-input w-full">
                    </div>
                    <div class="flex items-center gap-2">
                        <label for="">Completed</label>
                        <input type="input" class="in-input w-full">
                    </div>
                    <div class="flex items-center gap-2">
                        <label for="">Postponed</label>
                        <input type="input" class="in-input w-full">
                    </div>
                    <div class="flex items-center gap-2">
                        <label for="" class="whitespace-nowrap">Fall back</label>
                        <input type="input" class="in-input w-full">
                    </div>

                </div>
            </div>
        </div>


        <div class="flex justify-end mt-4">
            <button class="btn-blue">Submit</button>
        </div>
    </div>
</form>

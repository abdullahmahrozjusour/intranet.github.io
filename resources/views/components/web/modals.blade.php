

    <!-- Modal for Policies -->
    <div class="fixed left-0 right-0 top-0 bottom-0 h-full w-full bg-black/50 overflow-x-hidden overflow-y-auto hidden"
        id="policyModal">
        <div class="overlay-modal fixed left-0 right-0 top-0 bottom-0 h-full w-full bg-black/50"></div>
        <div class="max-w-[700px] w-full mx-auto rounded-lg overflow-hidden relative ">
            <div class="bg-secondary relative text-center font-semibold text-2xl flex justify-center p-2 text-white">
                {{ $policies['titleEn'] }} <a class="text-white absolute right-4 close-in" href="#policyModal"><i
                        class="fa-solid fa-xmark"></i></a></div>
            <div class="bg-modal">
                <div class="px-8 py-4 content-modal">
                    <h3>{{ $policies['titleEn'] }}</h3>
                    {!! html_entity_decode( $policies['descEn'] ) !!}
                </div>
                <div class="border-t border-t-black/25 px-8 py-2 flex justify-end">
                    <a class="btn-white close-in" href="#policyModal">Close</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Procedure -->
    <div class="fixed left-0 right-0 top-0 bottom-0 h-full w-full bg-black/50 overflow-x-hidden overflow-y-auto hidden"
        id="Procedure">
        <div class="overlay-modal fixed left-0 right-0 top-0 bottom-0 h-full w-full bg-black/50"></div>
        <div class="max-w-[700px] w-full mx-auto rounded-lg overflow-hidden relative ">
            <div class="bg-secondary relative text-center font-semibold text-2xl flex justify-center p-2 text-white">
                {{ $procedures['titleEn'] }} <a class="text-white absolute right-4 close-in" href="#Procedure"><i
                        class="fa-solid fa-xmark"></i></a></div>
            <div class="bg-modal">
                <div class="px-8 py-4 content-modal">
                    <h3>{{ $procedures['titleEn'] }}</h3>
                    {!! html_entity_decode( $procedures['descEn'] ) !!}
                </div>
                <div class="border-t border-t-black/25 px-8 py-2 flex justify-end">
                    <a class="btn-white close-in" href="#Procedure">Close</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for CEO Message -->
    <div class="fixed left-0 right-0 top-0 bottom-0 h-full w-full bg-black/50 overflow-x-hidden overflow-y-auto hidden"
        id="ceoMsg">
        <div class="overlay-modal fixed left-0 right-0 top-0 bottom-0 h-full w-full bg-black/50"></div>
        <div class="max-w-[700px] w-full mx-auto rounded-lg overflow-hidden relative ">
            <div class="bg-secondary relative text-center font-semibold text-2xl flex justify-center p-2 text-white">
                {{ $ceoMessage['titleEn'] }}
                <a class="text-white absolute right-4 close-in" href="#ceoMsg"><i class="fa-solid fa-xmark"></i></a>
            </div>
            <div class="bg-modal">
                <div class="px-8 py-4 content-modal">
                    <h3>{{ $ceoMessage['titleEn'] }}
                    </h3>
                    {!! html_entity_decode($ceoMessage['descEn']) !!}
                </div>
                <div class="border-t border-t-black/25 px-8 py-2 flex justify-end">
                    <a class="btn-white close-in" href="#ceoMsg">Close</a>
                </div>
            </div>
        </div>
    </div>

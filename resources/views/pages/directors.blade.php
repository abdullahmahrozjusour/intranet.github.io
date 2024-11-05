@extends('layouts.master_layout')

@section('content')

    <div class="bg-primary">
        <div class="container-in">
            <div class="flex justify-between flex-wrap md:flex-nowrap items-center py-6">
                <div class="md:max-w-[50%] text-white">
                    <h3 class="text-3xl ">Board <strong class="font-semibold block">of Members</strong></h3>
                    <p class="font-medium mt-2 texl-lg">Guiding Leadership and Strategic Direction</p>
                </div>
                <div class="md:max-w-[55%] text-white">
                    The Board of Members is composed of dedicated individuals who bring diverse expertise and insights
                    to guide our organization. Together, they are committed to fostering growth, ensuring
                    accountability, and shaping the strategic vision that drives our mission forward. Their
                    collaborative leadership plays a crucial role in steering our initiatives and enhancing our impact
                    within the community.
                </div>
            </div>
        </div>
        <div class="py-6">
            <div class="container-in">
                <div class="grid lg:grid-cols-2 gap-8">
                    <div class="flex gap-6 sm:flex-nowrap flex-wrap flex-row">
                        <div
                            class="border-2 border-secondary h-[200px] w-[200px] basis-[200px] grow-0 shrink-0 rounded-full overflow-hidden">
                            <img src="assets/imgs/ali.jpg" class="h-full w-full object-cover object-center" alt="">
                        </div>
                        <div class="text-white">
                            <span class="text-secondary font-bold">Ministry of Labour</span>
                            <div class="text-xl font-medium mt-1">Dr. Ali bin Samikh Al Marri</div>
                            <small class="text-sm font-medium">President</small>
                            <p class="text-white/75 mt-3 text-sm">His Excellency Dr. Ali bin Saeed bin Smaikh Al Marri
                                is a Qatari politician and human
                                rights expert, born on November 30, 1972. He was appointed Minister of Labor of the
                                State of Qatar on October 19, 2021, and is Jusour’s Chairman of the Board.</p>
                            <a href="#ceoMsg"
                                class="modal-in mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                <span>Read More</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex gap-6 sm:flex-nowrap flex-wrap flex-row">
                        <div
                            class="border-2 border-secondary h-[200px] w-[200px] basis-[200px] grow-0 shrink-0 rounded-full overflow-hidden">
                            <img src="assets/imgs/ateeq.png" class="h-full w-full object-cover object-center" alt="">
                        </div>
                        <div class="text-white">
                            <span class="text-secondary font-bold">Ministry of Interior Representative</span>
                            <div class="text-xl font-medium mt-1">Mohammad Ahmad Al-Ateeq Al-Dosari</div>
                            <small class="text-sm font-medium">Vice President</small>
                            <!-- <a href="#ceoMsg"
                                class="modal-in mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                <span>Read More</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 bg-black/25">
            <div class="container-in">
                <div class="grid lg:grid-cols-2 gap-8">
                    <div class="flex gap-6 sm:flex-nowrap flex-wrap flex-row">
                        <div
                            class="border-2 border-secondary h-[200px] w-[200px] basis-[200px] grow-0 shrink-0 rounded-full overflow-hidden">
                            <img src="assets/imgs/abdullah.jpg" class="h-full w-full object-cover object-center" alt="">
                        </div>
                        <div class="text-white">
                            <span class="text-secondary font-bold">Qatar University Representative </span>
                            <div class="text-xl font-medium mt-1">Dr. Omar Mohammad Abdullah Al-Ansari</div>
                            <small class="text-sm font-medium">Member</small>
                            <p class="text-white/75 mt-3 text-sm">Dr. Omar Al Ansari is President of Qatar University,
                                and an academic leader with a distinguished career at Qatar University. After obtaining
                                his PhD in Civil Engineering from Texas University in 1999, he began his journey at
                                Qatar University as a faculty member in the Civil Engineering Department...
                            </p>
                            <a href="#qatarUni"
                                class="modal-in  text-secondary text-sm font-medium flex items-center gap-2">
                                <span>Read More</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex gap-6 sm:flex-nowrap flex-wrap flex-row">
                        <div
                            class="border-2 border-secondary h-[200px] w-[200px] basis-[200px] grow-0 shrink-0 rounded-full overflow-hidden">
                            <img src="assets/imgs/majid.jpeg" class="h-full w-full object-cover object-center" alt="">
                        </div>
                        <div class="text-white">
                            <span class="text-secondary font-bold">Ministry of Commerce and Industry
                                Representative</span>
                            <div class="text-xl font-medium mt-1">His Excellency Mr. Saleh bin Majid Al-Khulaifi</div>
                            <small class="text-sm font-medium">Member</small>
                            <p class="text-white/75 mt-3 text-sm">Saleh Majid Al-Khulaifi is the Deputy Undersecretary
                                for Industrial Affairs and Business Development at the Ministry of Commerce and Industry
                                in Qatar. He is actively involved in driving industrial development, fostering
                                entrepreneurship, and attracting foreign direct investment to shape Qatar's economic
                                landscape.... </p>
                            <a href="#commerce"
                                class="modal-in text-secondary text-sm font-medium flex items-center gap-2">
                                <span>Read More</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6">
            <div class="container-in">
                <div class="grid lg:grid-cols-2 gap-8">
                    <div class="flex gap-6 sm:flex-nowrap flex-wrap flex-row">
                        <div
                            class="border-2 border-secondary h-[200px] w-[200px] basis-[200px] grow-0 shrink-0 rounded-full overflow-hidden">
                            <img src="assets/imgs/hamad.png" class="h-full w-full object-cover object-center" alt="">
                        </div>
                        <div class="text-white">
                            <span class="text-secondary font-bold">Member of the Board of Directors - Representative of
                                Qatar Chamber
                            </span>
                            <div class="text-xl font-medium mt-1">Mr. Saleh bin Hamad Al Sharqi</div>
                            <small class="text-sm font-medium">Member</small>
                            <p class="text-white/75 mt-3 text-sm">Saleh bin Hamad bin Jaber Al Sharqi currently serves
                                as the Director General of the Qatar Chamber of Commerce & Industry. <br> <br>

                                Mr. Al Sharqi’s journey in the Qatar Chamber began on February 1, 1999. Throughout his
                                tenure, Al Sharqi held various senior managerial and executive positions until he was
                                appointed as the General Manager.<br> <br>

                                Saleh is entrusted with various responsibilities that contribute to the Qatar Chamber’s
                                success and the country's...

                            </p>
                            <a href="#chamber"
                                class="modal-in text-secondary text-sm font-medium flex items-center gap-2">
                                <span>Read More</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex gap-6 sm:flex-nowrap flex-wrap flex-row">
                        <div
                            class="border-2 border-secondary h-[200px] w-[200px] basis-[200px] grow-0 shrink-0 rounded-full overflow-hidden">
                            <img src="assets/imgs/khalifa.jpg" class="h-full w-full object-cover object-center" alt="">
                        </div>
                        <div class="text-white">
                            <span class="text-secondary font-bold">Al Jazeera Network Representative</span>
                            <div class="text-xl font-medium mt-1">
                                Mr. Mohammed bin Abdullah Al Khalifa</div>
                            <small class="text-sm font-medium">Member</small>
                            <p class="text-white/75 mt-3 text-sm">Mohammed Abdulla Al-Khalifa currently holds the
                                position of Director of General Services at Al Jazeera Media Network and is a member of
                                the Board of WISA.
                                <br> <br>
                                Mr. Al-Khalifa earned a Bachelor's degree in Economy Management with a specialization in
                                Accounting from the Faculty of Administration and Economy in Qatar in 1997.
                                <br> <br>
                                Mr. Al-Khalifa began his career as an Accounts Auditor and Financial Controller at...

                            </p>
                            <a href="#jazeera"
                                class="modal-in text-secondary text-sm font-medium flex items-center gap-2">
                                <span>Read More</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 bg-black/25">
            <div class="container-in">
                <div class="grid lg:grid-cols-2 gap-8">
                    <div class="flex gap-6 sm:flex-nowrap flex-wrap flex-row">
                        <div
                            class="border-2 border-secondary h-[200px] w-[200px] basis-[200px] grow-0 shrink-0 rounded-full overflow-hidden">
                            <img src="assets/imgs/najwa.webp" class="h-full w-full object-cover object-center" alt="">
                        </div>
                        <div class="text-white">
                            <span class="text-secondary font-bold">Member of the Board of Directors - Representative of
                                the Ministry of labor
                            </span>
                            <div class="text-xl font-medium mt-1">Sheikha Najwa bint Abdulrahman Al-Thani</div>
                            <small class="text-sm font-medium">Assistant Undersecretary for Migrant Labor Affairs at the
                                Ministry of Labor 
                            </small>

                            <!-- <a href="" class="mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                <span>Read More</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a> -->
                        </div>
                    </div>
                    <div class="flex gap-6 sm:flex-nowrap flex-wrap flex-row">
                        <div
                            class="border-2 border-secondary h-[200px] w-[200px] basis-[200px] grow-0 shrink-0 rounded-full overflow-hidden">
                            <img src="assets/imgs/ghanem.jpg" class="h-full w-full object-cover object-center" alt="">
                        </div>
                        <div class="text-white">
                            <span class="text-secondary font-bold">Ministry of Culture Representative </span>
                            <div class="text-xl font-medium mt-1">His Excellency Dr. Ghanem bin Mubarak Al Ali</div>
                            <small class="text-sm font-medium">Member</small>
                            <p class="text-white/75 mt-3 text-sm">
                                Assistant Undersecretary For Culture Affairs:
                                <br><br>

                                Dr. Ghanim bin Mubarak Al-Ali is the Assistant Undersecretary for Cultural Affairs at
                                the Ministry of Culture / Qatar and is also the Director General of the Qatar Center for
                                Cultural and Heritage Events, and the General supervisor of National day celebrations
                                committee.
                                <br><br>
                                Dr. Ghanem has extensive experience in several fields such as culture, investment,
                                banking, Information technology and has accumulated great experience...
                                <br><br>

                            </p>
                            <a href="#culture"
                                class="modal-in mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                <span>Read More</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 ">
            <div class="container-in">
                <div class="grid lg:grid-cols-2 gap-8">
                    <div class="flex gap-6 sm:flex-nowrap flex-wrap flex-row">
                        <div
                            class="border-2 border-secondary h-[200px] w-[200px] basis-[200px] grow-0 shrink-0 rounded-full overflow-hidden">
                            <img src="assets/imgs/mohsen.jpg" class="h-full w-full object-cover object-center" alt="">
                        </div>
                        <div class="text-white">
                            <span class="text-secondary font-bold">Qatar Airways Representative

                            </span>
                            <div class="text-xl font-medium mt-1">Mohsen Alyafei</div>
                            <small class="text-sm font-medium">Executive Vice President </small>

                            <!-- <a href="" class="mt-1 text-secondary text-sm font-medium flex items-center gap-2">
                                <span>Read More</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a> -->
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div> 

    @include('components.web.directorModals')
@endsection

@section('javaScript')
    <script>
            
        $('.modal-in').on('click', function () {
            var id = $(this).attr('href')
            $('body').css('overflow', 'hidden')
            $(id).css("display", "flex");
            $(id).css("align-items", "center");
        })
        $('.close-in').on('click', function () {
            var id = $(this).attr('href')
            $('body').css('overflow', 'auto')
            $(id).hide();
        })
    </script>
@endsection
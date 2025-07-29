@extends('layouts.master_layout')

@section('content')
    <div class="bg-primary py-4">
        <div class="container">
            <div class="flex gap-6 justify-center">
                <div class="w-[300px]">
                    <div class="bg-white   shadow-lg  rounded-lg  w-full sticky top-4">
                        <h2 class="text-white text-lg font-medium bg-secondary px-5 py-1">Forms</h2>
                        <ul class="p-6">
                            <li><a href="#graphicDesing" class="tab-req text-secondary">Graphic design request </a></li>
                            <li><a href="#changeReq" class="tab-req ">Change Request Form </a></li>
                            <li><a href="#ItForm" class="tab-req">IT Form </a></li>
                        </ul>
                    </div>
                </div>

                <div class="w-[1000px] bg-white shadow-lg  rounded-lg">
                    <div id="graphicDesing" class="w-full">
                        @include('pages.forms.graphic-design')
                    </div>
                    <div id="changeReq" style="display: none">
                        @include('pages.forms.change-request')
                    </div>
                    <div id="ItForm" style="display: none">
                        @include('pages.forms.it-form')
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="fixed left-0 right-0 top-0 bottom-0 h-full w-full bg-black/50 overflow-x-hidden overflow-y-auto hidden"
        id="tandc">
        <div class="max-w-[550px] w-full mx-auto rounded-lg overflow-hidden relative ">
            <div class="bg-secondary relative text-center font-semibold text-2xl flex justify-center p-2 text-white">
                Terms
                <a class="text-white absolute right-4 close-in" href="#tandc"><i class="fa-solid fa-xmark"></i></a>
            </div>
            <div class="bg-modal">
                <div class="px-8 py-4 content-modal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lacinia malesuada eros, eget feugiat est
                    finibus eu. Morbi ac massa non elit facilisis tristique. Proin vel faucibus ante. Nam iaculis laoreet
                    nisi, pharetra suscipit mi rutrum ac. Proin vitae facilisis diam. Phasellus id laoreet mi. Praesent sit
                    amet elit dictum massa pellentesque pellentesque. Morbi tincidunt dolor eu nisl accumsan, sit amet
                    feugiat nisl varius. Fusce lobortis tristique felis, eu volutpat tortor cursus at. Donec posuere eros
                    nulla, in semper arcu molestie non. Etiam et massa eu nisi consequat ultrices. Donec mi libero, laoreet
                    nec vehicula at, bibendum laoreet est.
                    <br>
                    <br>
                    Suspendisse hendrerit magna in sapien pellentesque faucibus. Ut pellentesque vel orci nec ultricies. In
                    hac habitasse platea dictumst. Nunc diam leo, maximus sit amet accumsan ac, iaculis eu urna. Nunc
                    aliquet odio faucibus elit imperdiet porttitor. Fusce sodales imperdiet nulla, quis aliquet quam
                    molestie id. Nunc vehicula eros non elit malesuada, ut imperdiet elit suscipit. Mauris feugiat mattis
                    efficitur. Quisque tincidunt quam a vulputate tincidunt. Curabitur pulvinar justo magna, a tincidunt
                    nisi vehicula et. Etiam id tellus erat. Mauris sed lacinia massa. Donec fringilla, tellus sit amet
                    rutrum condimentum, enim metus sodales magna, vel sagittis libero sapien vel turpis.
                </div>
                <div class="border-t border-t-black/25 px-8 py-2 flex justify-end">
                    <a class="btn-white close-in" href="#tandc">Close</a>
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

            function activateTabByHash(hash) {
                if (hash) {
                    var $tab = $('.tab-req[href="' + hash + '"]');
                    if ($tab.length) {
                        $tab.trigger('click');
                    }
                }
            }


            $('.tab-req').on('click', function(e) {

                var id = $(this).attr('href');

                var tabName = id.substring(1); // remove '#'

                $('#activeTab').val(tabName); // update hidden input


                $('.tab-req').not(this).removeClass(
                    'text-secondary');
                $('.tab-req').not(this).each(function() {
                    var otherId = $(this).attr('href');
                    $(otherId).hide();
                });

                $(this).toggleClass('text-secondary');
                $(id).show();
                history.replaceState(null, null, id);

            });
            activateTabByHash(window.location.hash);

            $(document).on('change', 'input[name="urgencyType"]', function() {
                let id = $(this).data('id');
                let value = $(this).val();

                if (value === 'urgent') {
                    $("#" + id).show();
                } else {
                    $("#" + id).hide();
                }
            });

            $(document).on('change', 'input[name="modificationRequestOfPreviousDesign"]', function() {
                let id = $(this).data('id');
                let value = $(this).val();
                $("#" + id).toggleClass('hidden');
                // console.log(id, 'id')
                // if (value === 'yes') {
                //     $("#" + id).show();
                // } else {
                //     $("#" + id).hide();
                // }
            });

        });

        const employeeCheckbox = document.getElementById('areYouEmployee');
        const managerFields = document.getElementById('manager-fields');

        employeeCheckbox.addEventListener('change', function() {
            if (this.checked) {
                managerFields.classList.remove('hidden');
            } else {
                managerFields.classList.add('hidden');
            }
        });

        // Optional: keep state after page reload (useful on validation errors)
        window.addEventListener('DOMContentLoaded', () => {
            if (employeeCheckbox.checked) {
                managerFields.classList.remove('hidden');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script>
        const signaturePads = {
            'signature-pad-1': new SignaturePad(document.getElementById('signature-pad-1')),
            'signature-pad-2': new SignaturePad(document.getElementById('signature-pad-2'))
        };

        // Handle clear buttons
        document.querySelectorAll('.clear-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const target = this.getAttribute('data-target');
                signaturePads[target].clear();
            });
        });

        // On form submit, store base64 signatures in hidden inputs
        document.querySelector('form').addEventListener('submit', function(e) {
            let allValid = true;

            if (!signaturePads['signature-pad-1'].isEmpty()) {
                document.getElementById('managerSignature').value = signaturePads['signature-pad-1'].toDataURL();
            } else {
                alert("Please provide Manager's signature.");
                allValid = false;
            }

            if (!signaturePads['signature-pad-2'].isEmpty()) {
                document.getElementById('marketingSignature').value = signaturePads['signature-pad-2'].toDataURL();
            } else {
                alert("Please provide Marketing's signature.");
                allValid = false;
            }

            if (!allValid) {
                e.preventDefault(); // stop form submission if any signature is missing
            }
        });
        $(document).ready(function() {
            var date = new Date()
            $('#requestDate').val(date.toLocaleDateString())
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hash = window.location.hash;

            if (hash) {
                const tabLink = document.querySelector(`a[href="${hash}"]`);
                if (tabLink) {
                    tabLink.click(); // Bootstrap or custom tab click
                }
            }
        });
    </script>
@endsection

var c=function(){var n,o,a,e,l,r,t=[],m=function(){r=new KTStepper(o),r.on("kt.stepper.changed",function(i){r.getCurrentStepIndex()===5?(e.classList.remove("d-none"),e.classList.add("d-inline-block"),l.classList.add("d-none")):(e.classList.remove("d-inline-block"),e.classList.remove("d-none"),l.classList.remove("d-none"))}),r.on("kt.stepper.next",function(i){console.log("stepper.next");var s=t[i.getCurrentStepIndex()-1];s?s.validate().then(function(d){console.log("validated!"),d=="Valid"?(i.goNext(),KTUtil.scrollTop()):Swal.fire({text:"Sorry, looks like there are some errors detected, please try again.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{confirmButton:"btn btn-light"}}).then(function(){KTUtil.scrollTop()})}):(i.goNext(),KTUtil.scrollTop())}),r.on("kt.stepper.previous",function(i){console.log("stepper.previous"),i.goPrevious(),KTUtil.scrollTop()})},p=function(){e.addEventListener("click",function(i){var s=t[5];s.validate().then(function(d){console.log("validated!"),d=="Valid"?(i.preventDefault(),e.disabled=!0,e.setAttribute("data-kt-indicator","on"),setTimeout(function(){e.removeAttribute("data-kt-indicator"),e.disabled=!1,r.goNext()},2e3)):Swal.fire({text:"Sorry, looks like there are some errors detected, please try again.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{confirmButton:"btn btn-light"}}).then(function(){KTUtil.scrollTop()})})}),$(a.querySelector('[name="card_expiry_month"]')).on("change",function(){t[3].revalidateField("card_expiry_month")}),$(a.querySelector('[name="card_expiry_year"]')).on("change",function(){t[3].revalidateField("card_expiry_year")}),$(a.querySelector('[name="business_type"]')).on("change",function(){t[2].revalidateField("business_type")})},u=function(){t.push(FormValidation.formValidation(a,{fields:{name:{validators:{notEmpty:{message:"Name type is required"}}},email:{validators:{notEmpty:{message:"Email type is required"}}},password:{validators:{notEmpty:{message:"Password type is required"}}},signatory_name:{validators:{notEmpty:{message:"Company Signatory Name is required"}}},manager_name:{validators:{notEmpty:{message:"Company Manager Name is required"}}},establishment_date:{validators:{notEmpty:{message:"Company Establishment Date is required"}}},phone:{validators:{notEmpty:{message:"Company Contact Number is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}})),t.push(FormValidation.formValidation(a,{fields:{organization_type_id:{validators:{notEmpty:{message:"Organization selection is required"}}},industry_type_id:{validators:{notEmpty:{message:"Industry selection is required"}}},team_size_id:{validators:{notEmpty:{message:"Team Size selection is required"}}},address:{validators:{notEmpty:{message:"Company Address is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}})),t.push(FormValidation.formValidation(a,{fields:{about_us:{validators:{notEmpty:{message:"Brief summary of Company is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}})),t.push(FormValidation.formValidation(a,{fields:{company_computer_card:{validators:{notEmpty:{message:"Organization selection is required"}}},company_commercial_registration:{validators:{notEmpty:{message:"Industry selection is required"}}},company_commercial_license:{validators:{notEmpty:{message:"Team Size selection is required"}}},company_tax_form:{validators:{notEmpty:{message:"Company Address is required"}}},financial_solvency_certificate:{validators:{notEmpty:{message:"Company Address is required"}}},establishment_id:{validators:{notEmpty:{message:"Company Address is required"}}},establishment_expiry:{validators:{notEmpty:{message:"Company Address is required"}}},registration_no:{validators:{notEmpty:{message:"Company Address is required"}}},registration_expiry:{validators:{notEmpty:{message:"Company Address is required"}}},license_no:{validators:{notEmpty:{message:"Company Address is required"}}},license_expiry:{validators:{notEmpty:{message:"Company Address is required"}}},issuance_date:{validators:{notEmpty:{message:"Company Address is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}})),t.push(FormValidation.formValidation(a,{plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}}))};return{init:function(){n=document.querySelector("#kt_modal_create_account"),n&&new bootstrap.Modal(n),o=document.querySelector("#kt_create_account_stepper"),o&&(a=o.querySelector("#kt_create_account_form"),e=o.querySelector('[data-kt-stepper-action="submit"]'),l=o.querySelector('[data-kt-stepper-action="next"]'),m(),u(),p())}}}();KTUtil.onDOMContentLoaded(function(){c.init()});

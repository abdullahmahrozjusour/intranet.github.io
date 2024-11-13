@extends('layouts.admin_layout')

@section('section')
    <!--begin::Content-->
    @include('components.header', ['name' => 'CEO Message'])
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-fluid" id="kt_content_container">
            <div class="row">
                <div class="col-xl-12">
                    <!--begin::Table widget 14-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">CEO Message</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            @can('edit-ceo-message')
                            <div class="card-toolbar">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#kt_modal_edit" class="btn btn-sm btn-light my-3">Edit Board of Director</button>
                            </div>
                            @endcan
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-6">
                            <!--begin::Wrapper-->
                            <div class="mb-10">
                                <!--begin::Top-->
                                <div class="text-center mb-15">
                                    <!--begin::Title-->
                                    <h3 class="fs-2hx text-gray-900 mb-5">{!! html_entity_decode($collection[0]->titleEn) !!}</h3>
                                    <!--end::Title-->

                                    <!--begin::Text-->
                                    <div class="fs-5 text-muted fw-semibold px-15">
                                        {!! html_entity_decode($collection[0]->descEn) !!}
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Top-->
                            </div>
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 14-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
    <div class="modal fade" id="kt_modal_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" style="display: none;" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-1000px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Title-->
                    <h2>Edit CEO Message</h2>
                    <!--end::Title-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="fa-solid fa-close fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y m-5">
                    <!--begin::Form-->
                    <form action="{{ route('admin.operation.ceoMessage.update',[$collection[0]['id']]) }}" method="post" class="mx-auto w-100 py-10 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_create_account_form">
                        @csrf
                        @method('PUT')
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Input group-->
                                <div class="fv-row fv-plugins-icon-container">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">Title (In English)</label>
                                                <input type="text" name="titleEn" class="form-control form-control-lg form-control-solid rounded" placeholder="Title (In English)" value="{{ $collection[0]['titleEn'] ?? old('titleEn') }}">
                                                @error('titleEn')
                                                    <span class="text-danger">{{ $errors->first('titleEn') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="form-label">Title (In Arabic) <span class="text-secondary">(Optional)</span></label>
                                                <input type="text" name="titleAr" class="form-control form-control-lg form-control-solid rounded text-end" placeholder="Title (In Arabic)" value="{{ $collection[0]['titleAr'] ?? old('titleAr') }}">
                                                @error('titleAr')
                                                    <span class="text-danger">{{ $errors->first('titleAr') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">Description (In English)</label>
                                                <textarea name="descEn" id="descEn" cols="30" rows="10" class="form-control form-control-lg form-control-solid rounded" placeholder="Description (In English)">{{ $collection[0]['descEn'] ?? old('descEn') }}</textarea>
                                                @error('descEn')
                                                    <span class="text-danger">{{ $errors->first('descEn') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="form-label">Description (In Arabic) <span class="text-secondary">(Optional)</span></label>
                                                <textarea name="descAr" id="descAr" cols="30" rows="10" class="form-control form-control-lg form-control-solid rounded text-end" placeholder="Description (In Arabic)">{{ $collection[0]['descAr'] ?? old('descAr') }}</textarea>
                                                @error('descAr')
                                                    <span class="text-danger">{{ $errors->first('descAr') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Button-->
                                        <button type="button" data-bs-dismiss="modal" class="btn btn-light me-5">
                                            Cancel
                                        </button>
                                        <!--end::Button-->

                                        <!--begin::Button-->
                                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                            <span class="indicator-label">
                                                Save Changes
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
@endsection

@extends('layouts.admin_layout')

@section('section')
    <!--begin::Content-->
    @include('components.header', ['name' => 'Board of Directors'])
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
                                <span class="card-label fw-bold text-gray-800">Board of Directors</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#kt_modal_edit" class="btn btn-sm btn-light my-3">Edit Board of Director</button>
                            </div>
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

                                    <!--begin::Title-->
                                    <h5 class="text-gray-900 mb-5">{!! html_entity_decode($collection[0]->shortDescEn) !!}</h5>
                                    <!--end::Title-->

                                    <!--begin::Text-->
                                    <div class="fs-5 text-muted fw-semibold px-15">
                                        {!! html_entity_decode($collection[0]->descEn) !!}
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Top-->
                            </div>
                            <!--end::Wrapper-->
                            <hr class="mt-15 mb-5">
                            <!--begin::Toolbar-->
                            <div class="text-end mb-10">
                                <a href="{{ route('admin.operation.director.create') }}" class="btn btn-sm btn-light my-3">Add New Board of Director</a>
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="p-0 pb-3 min-w-50px text-start">#</th>
                                            <th class="p-0 pb-3 min-w-75px text-start">LOGO</th>
                                            <th class="p-0 pb-3 min-w-175px text-start">NAME</th>
                                            <th class="p-0 pb-3 min-w-175px text-start">TITLE</th>
                                            <th class="p-0 pb-3 min-w-175px text-start">DESIGNATION</th>
                                            <th class="p-0 pb-3 min-w-175px text-start pe-12">STATUS</th>
                                            <th class="p-0 pb-3 min-w-175px text-start pe-12">CREATED AT</th>
                                            <th class="p-0 pb-3 w-50px text-end">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($data as $key => $value)

                                            <tr>
                                                <td class="text-start ps-0">
                                                    <span class="text-gray-600 fw-bold fs-6">{{ $key + 1 }}</span>
                                                </td>

                                                <td class="text-start ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 d-flex align-items-center">
                                                                @if(file_exists(public_path('assets/imgs/'.$value->logo)))
                                                                    <img style="width:50px;height:50px;" class="rounded-circle bg-primary" src="{{ asset('assets/imgs/'.$value->logo) }}" alt="{{ $value->logo }}">
                                                                @elseif(file_exists(public_path('storage/uploads/pages/'.$value->logo)))
                                                                    <img style="width:50px;height:50px;" class="rounded-circle bg-primary" src="{{ asset('storage/uploads/pages/'.$value->logo) }}" alt="{{ $value->logo }}">
                                                                @else
                                                                    <img style="width:50px;height:50px;" class="rounded-circle bg-primary" src="{{ asset('assets/imgs/avatar.png') }}" alt="avatar.png">
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-start ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{!! html_entity_decode($value->nameEn) !!}</a>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-start ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{!! html_entity_decode($value->titleEn) !!}</a>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-start ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{!! html_entity_decode($value->designationEn) !!}</a>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-start ps-0">
                                                    @php
                                                        $statusClass = '';
                                                        $statusText = $value->status;
                                                        switch ($statusText) {
                                                            case 'Pending':
                                                                $statusClass = 'badge-light-warning';
                                                                break;
                                                            case 'Active':
                                                                $statusClass = 'badge-light-success';
                                                                break;
                                                            case 'Deactive':
                                                                $statusClass = 'badge-light-danger';
                                                                break;
                                                            default:
                                                                // Handle any other cases here if needed
                                                                break;
                                                        }
                                                    @endphp
                                                    <span class="badge py-3 px-4 fs-7 {{ $statusClass }}">{{ $statusText }}</span>
                                                </td>

                                                <td class="text-start ps-0">
                                                    <span class="text-gray-600 fw-bold fs-6">
                                                        {{ \Carbon\Carbon::parse($value->created_at)->format('M,d Y h:i A') }}
                                                    </span>
                                                </td>

                                                <td class="text-end pe-0">
                                                    <div class="me-0">
                                                        <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <i class="fa-solid fa-ellipsis fs-1x"></i>                            </button>

                                                        <!--begin::Menu 3-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">
                                                            <!--begin::Heading-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase text-start">
                                                                    Actions
                                                                </div>
                                                            </div>
                                                            <!--end::Heading-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="{{ route('admin.operation.director.edit',[$value->id]) }}" class="menu-link px-3">
                                                                    Edit
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <form action="{{ route('admin.operation.director.destroy',[$value->id]) }}" method="post" class="w-100">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit" class="menu-link px-3 w-100">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 3-->
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table-->
                            <div class="row">
                                <div class="col-12 mt-10">
                                    {!! $data->links() !!}
                                </div>
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
                    <h2>Edit Board of Director</h2>
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
                    <form action="{{ route('admin.operation.director.updateData',[$collection[0]['id']]) }}" method="post" class="mx-auto w-100 py-10 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_create_account_form">
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
                                                <input type="text" name="titleEn" id="titleEn" class="form-control form-control-lg form-control-solid rounded" placeholder="Title (In English)" value="{{ $collection[0]['titleEn'] ?? old('titleEn') }}">
                                                @error('titleEn')
                                                    <span class="text-danger">{{ $errors->first('titleEn') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="form-label">Title (In Arabic) <span class="text-secondary">(Optional)</span></label>
                                                <input type="text" name="titleAr" id="titleAr" class="form-control form-control-lg form-control-solid rounded text-end" placeholder="Title (In Arabic)" value="{{ $collection[0]['titleAr'] ?? old('titleAr') }}">
                                                @error('titleAr')
                                                    <span class="text-danger">{{ $errors->first('titleAr') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">Short Description(In English)</label>
                                                <input type="text" name="shortDescEn" class="form-control form-control-lg form-control-solid rounded" placeholder="Short Description(In English)" value="{{ $collection[0]['shortDescEn'] ?? old('shortDescEn') }}">
                                                @error('shortDescEn')
                                                    <span class="text-danger">{{ $errors->first('shortDescEn') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="form-label">Short Description(In Arabic) <span class="text-secondary">(Optional)</span></label>
                                                <input type="text" name="shortDescAr" class="form-control form-control-lg form-control-solid rounded text-end" placeholder="Short Description(In Arabic)" value="{{ $collection[0]['shortDescAr'] ?? old('shortDescAr') }}">
                                                @error('shortDescAr')
                                                    <span class="text-danger">{{ $errors->first('shortDescAr') }}</span>
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
                                                <textarea name="descEn" cols="30" rows="10" class="form-control form-control-lg form-control-solid rounded" placeholder="Description (In English)">{{ $collection[0]['descEn'] ?? old('descEn') }}</textarea>
                                                @error('descEn')
                                                    <span class="text-danger">{{ $errors->first('descEn') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="form-label">Description (In Arabic) <span class="text-secondary">(Optional)</span></label>
                                                <textarea name="descAr" cols="30" rows="10" class="form-control form-control-lg form-control-solid rounded text-end" placeholder="Description (In Arabic)">{{ $collection[0]['descAr'] ?? old('descAr') }}</textarea>
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

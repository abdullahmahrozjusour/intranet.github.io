@extends('layouts.admin_layout')

@section('section')
<!--begin::Content-->
@include('components.header', ['name' => 'Useful Contacts'])
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
                            <span class="card-label fw-bold text-gray-800">Useful Contacts</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        @can('create-useful-contact')
                        <div class="card-toolbar">
                            <a href="{{ route('admin.pages.usefulContact.create') }}" class="btn btn-sm btn-light">Add
                                New Useful Contact</a>
                        </div>
                        @endcan
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body pt-6">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                        <th class="p-0 pb-3 min-w-50px text-start">#</th>
                                        <th class="p-0 pb-3 min-w-175px text-start">NAME</th>
                                        <th class="p-0 pb-3 min-w-175px text-start">ADDRESS</th>
                                        <th class="p-0 pb-3 min-w-175px text-start">EMAIL</th>
                                        <th class="p-0 pb-3 min-w-175px text-start">PHONE</th>
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
                                            <span class="text-gray-600 fw-bold fs-6">{{ ($data->currentPage() - 1) *
                                                $data->perPage() + $loop->iteration }}</span>
                                        </td>

                                        <td class="text-start ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{
                                                        $value->nameEn }}</a>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-start ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{
                                                        $value->addressEn }}</a>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-start ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{
                                                        $value->email }}</a>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-start ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{
                                                        $value->phone }}</a>
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
                                            <span class="badge py-3 px-4 fs-7 {{ $statusClass }}">{{ $statusText
                                                }}</span>
                                        </td>

                                        <td class="text-start ps-0">
                                            <span class="text-gray-600 fw-bold fs-6">
                                                {{ \Carbon\Carbon::parse($value->created_at)->format('M,d Y h:i A') }}
                                            </span>
                                        </td>

                                        <td class="text-end pe-0">
                                            <div class="me-0">
                                                <button
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="fa-solid fa-ellipsis fs-1x"></i> </button>

                                                <!--begin::Menu 3-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                    data-kt-menu="true" style="">
                                                    <!--begin::Heading-->
                                                    <div class="menu-item px-3">
                                                        <div
                                                            class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase text-start">
                                                            Actions
                                                        </div>
                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Menu item-->
                                                    @can('audit-useful-contact')
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('admin.pages.usefulContact.audit',[$value->id]) }}"
                                                            class="menu-link px-3">
                                                            Audit
                                                        </a>
                                                    </div>
                                                    @endcan
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    @can('edit-useful-contact')
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('admin.pages.usefulContact.edit',[$value->id]) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    @endcan
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    @can('delete-useful-contact')
                                                    <div class="menu-item px-3">
                                                        <form
                                                            action="{{ route('admin.pages.usefulContact.destroy',[$value->id]) }}"
                                                            method="post" class="w-100">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="menu-link px-3 w-100">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                    @endcan
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
@endsection
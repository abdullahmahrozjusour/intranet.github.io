@extends('layouts.admin_layout')

@section('section')
    <!--begin::Content-->
    @include('components.header', ['name' => 'Organization'])
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
                                <span class="card-label fw-bold text-gray-800">Organization</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            @can('create-organization')
                            <div class="card-toolbar">
                                <a href="{{ route('admin.pages.organization.create') }}" class="btn btn-sm btn-light">Add New Organization</a>
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
                                            <th class="p-0 pb-3 min-w-175px text-start">PARENT NAME</th>
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
                                                            @if(file_exists(public_path('storage/uploads/picture/'.$value->image)))
                                                                <img style="width:50px;height:50px;" class="rounded-circle bg-primary" src="{{ asset('storage/uploads/picture/'.$value->image) }}" alt="{{ $value->image }}">
                                                            @elseif($value->id == 1)
                                                                <img style="width:50px;height:50px;" class="rounded-circle bg-primary" src="{{ asset('assets/imgs/ceo.png') }}" alt="{{ $value->image }}">
                                                            @else
                                                                <img style="width:50px;height:50px;" class="rounded-circle bg-primary" src="{{ asset('assets/imgs/avatar.png') }}" alt="avatar.png">
                                                            @endif <span class="ms-3">{{ $value->nameEn }}</span></a>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-start ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $value->parent?->nameEn }}</a>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-start ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $value->designationEn }}</a>
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
                                                            @can('edit-organization')
                                                            <div class="menu-item px-3">
                                                                <a href="{{ route('admin.pages.organization.edit',[$value->id]) }}" class="menu-link px-3">
                                                                    Edit
                                                                </a>
                                                            </div>
                                                            @endcan
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            @can('delete-organization')
                                                            <div class="menu-item px-3">
                                                                <form action="{{ route('admin.pages.organization.destroy',[$value->id]) }}" method="post" class="w-100">
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

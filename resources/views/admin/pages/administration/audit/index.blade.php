@extends('layouts.admin_layout')

@section('section')
<!--begin::Content-->
@include('components.header', ['name' => $name])
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
                            <span class="card-label fw-bold text-gray-800">{!! $name !!}</span>
                        </h3>
                        <!--end::Title-->

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
                                        <th class="p-0 pb-3 min-w-50px text-start">{!! __('#') !!}</th>
                                        <th class="p-0 pb-3 min-w-175px text-start">{!! __('AUDIT BY') !!}</th>
                                        <th class="p-0 pb-3 min-w-175px text-start">{!! __('EVENT') !!}</th>
                                        <th class="p-0 pb-3 min-w-175px text-start pe-12">{!! __('CREATED AT') !!}</th>
                                        <th class="p-0 pb-3 w-50px text-end">{!! __('ACTIONS') !!}</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->

                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($data as $key => $value)

                                    <tr>

                                        <td>{!!
                                            ($data->currentPage() - 1) *
                                            $data->perPage() + $loop->iteration !!}
                                        </td>
                                        <td>{!!
                                            $value->user?->nameEn ?? 'By it self'
                                            !!}</td>
                                        <td class="text-capitalize">
                                            {!! $value->event !!}
                                        </td>
                                        <td>{!!
                                            \Carbon\Carbon::parse($value->created_at)->format('D M,d Y h:i A') !!}
                                        </td>

                                        <td class="text-end pe-0">
                                            <!--begin::Menu item-->
                                            @can('audit-view')
                                            <a href="{{ route('admin.audit.show',[$value->id,$name]) }}"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary px-10">
                                                View
                                            </a>
                                            @endcan
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
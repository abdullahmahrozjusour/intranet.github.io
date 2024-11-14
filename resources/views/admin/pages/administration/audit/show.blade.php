@extends('layouts.admin_layout')

@section('section')
<!--begin::Content-->
@include('components.header', ['name' => 'View Audit'])
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-fluid" id="kt_content_container">
        <div class="row">
            <div class="col-xl-12">
                <!--begin::Table widget 14-->
                <div class="card">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">View Audit {{ $name }}</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <a href="{{ $url }}" class="btn btn-sm btn-light">Back</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body pt-6">
                        <div class="card mb-3">
                            <div class="card-header fs-3 py-4 fw-bold" style="min-height: 0px !important;">
                                Audit By: {{$data->user?->nameEn}} {{$data->user?->lnameEn}}</div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header fs-3 py-4 fw-bold" style="min-height: 0px !important;">{{ __('Old
                                Values')
                                }}</div>
                            <div class="card-body">
                                @if($data->old_values <> "[]")
                                    @foreach (json_decode($data->old_values) as $k => $val )
                                    <div class="text-capitalize mb-3">{{ $k }}: {!! html_entity_decode($val) !!}</div>
                                    @endforeach
                                    @else
                                    N/A
                                    @endif
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header fs-3 py-4 fw-bold" style="min-height: 0px !important;">{{ __('New
                                Values')
                                }}</div>
                            <div class="card-body">
                                @if($data->new_values <> "[]")
                                    @foreach (json_decode($data->new_values) as $k => $val )
                                    <div class="text-capitalize mb-3">{{ $k }}: {!! html_entity_decode($val) !!}</div>
                                    @endforeach
                                    @else
                                    N/A
                                    @endif
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
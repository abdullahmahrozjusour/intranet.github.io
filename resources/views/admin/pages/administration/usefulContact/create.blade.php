@extends('layouts.admin_layout')

@section('section')
    <!--begin::Content-->
    @include('components.header', ['name' => 'Useful Contact'])
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
                                <span class="card-label fw-bold text-gray-800">Add New Useful Contact</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="{{ route('admin.administration.usefulContact.index') }}" class="btn btn-sm btn-light">Back</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-6">
                            <form action="{{ route('admin.administration.usefulContact.store') }}" method="post" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data">
                                @csrf
                                @include('admin.pages.administration.usefulContact.form',['data'=>[], 'head'=>'Add'])
                            </form>
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

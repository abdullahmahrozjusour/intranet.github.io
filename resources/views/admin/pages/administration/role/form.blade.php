
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <div class="d-flex flex-column gap-7 gap-lg-10">

            <!--begin::General options-->
            <div class="card h-100 py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>{{ $head }}</h2>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name" class="fs-6 fw-semibold mb-2 required">Role Name</label>
                            <input type="text" class="form-control form-control-solid" id="name" placeholder="name" name="name" value="@isset($role->name){{ $role->name }}@else{{ old('name') }}@endisset">
                            @if($errors->has('name'))
                                <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12 mt-2">
                            @forelse ($permissions as $k => $v)
                                <div class="row mt-3">
                                    <h3 class="fs-4 fw-semibold mt-4 mb-2 text-capitalize">{{str_replace("-"," ",$k)}}:</h3>
                                    @foreach($v as $key => $value )
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-3">
                                            <div class="form-check">
                                                    <input type="checkbox" name="permissions[]" value="{{ $value['id'] }}" id="permissions_{{$k}}_{{ $key }}" class="form-check-input mt-1"
                                                    {{ in_array($value['id'], $rolePermissions) ? 'checked' : '' }}>
                                                    <label for="permissions_{{$k}}_{{ $key }}" class="form-check-label text-capitalize">{{ str_replace("-"," ",$value['name']) }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @empty
                            @endforelse
                            @if ($errors->has('permissions'))
                                <span class="text-danger">{{ $errors->first('permissions') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <!--end::Card header-->
            </div>
            <!--end::General options-->
        </div>

        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="{{ request()->url() }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                Cancel
            </a>
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
    <!--end::Main column-->

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
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Name (In English)</label>
                            <input type="text" name="nameEn"
                                class="form-control form-control-lg form-control-solid rounded"
                                placeholder="Name (In English)" value="{{ $data['nameEn'] ?? old('nameEn') }}">
                            @error('nameEn')
                            <span class="text-danger">{{ $errors->first('nameEn') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="form-label">Name (In Arabic) <span
                                    class="text-secondary">(Optional)</span></label>
                            <input type="text" name="nameAr"
                                class="form-control form-control-lg form-control-solid rounded text-end"
                                placeholder="Name (In Arabic)" value="{{ $data['nameAr'] ?? old('nameAr') }}">
                            @error('nameAr')
                            <span class="text-danger">{{ $errors->first('nameAr') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Last Name (In English)</label>
                            <input type="text" name="lnameEn"
                                class="form-control form-control-lg form-control-solid rounded"
                                placeholder="Last Name (In English)" value="{{ $data['lnameEn'] ?? old('lnameEn') }}">
                            @error('lnameEn')
                            <span class="text-danger">{{ $errors->first('lnameEn') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="form-label">Last Name (In Arabic) <span
                                    class="text-secondary">(Optional)</span></label>
                            <input type="text" name="lnameAr"
                                class="form-control form-control-lg form-control-solid rounded text-end"
                                placeholder="Last Name (In Arabic)" value="{{ $data['lnameAr'] ?? old('lnameAr') }}">
                            @error('lnameAr')
                            <span class="text-danger">{{ $errors->first('lnameAr') }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Email</label>
                            <input type="text" name="email"
                                class="form-control form-control-lg form-control-solid rounded" placeholder="Email"
                                value="{{ $data['email'] ?? old('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Phone</label>
                            <input type="text" name="phone"
                                class="form-control form-control-lg form-control-solid rounded" placeholder="Phone"
                                value="{{ $data['phone'] ?? old('phone') }}">
                            @error('phone')
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Status</label>
                            <select name="status"
                                class="form-select form-select-solid form-select-lg fw-semibold select2">
                                <option value="">Select</option>
                                <option value="Pending" {{ (((isset($data['status']) && $data['status']=='Pending' ) ||
                                    old('status')=='Pending' ) ? 'selected' : '' ) }}>Pending</option>
                                <option value="Active" {{ (((isset($data['status']) && $data['status']=='Active' ) ||
                                    old('status')=='Active' ) ? 'selected' : '' ) }}>Active</option>
                                <option value="Deactive" {{ (((isset($data['status']) && $data['status']=='Deactive' )
                                    || old('status')=='Deactive' ) ? 'selected' : '' ) }}>Deactive</option>
                            </select>
                        </div>
                        @error('status')
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <label for="roles" class="required form-label">Roles </label>
                        <select id="roles" class="form-select form-select-solid form-select-lg fw-semibold select2"
                            name="roles[]">
                            <option disabled value="">Select</option>
                            @foreach($roles as $key => $val)
                            <option value="{{ $val }}" @isset($userRoles){{ in_array($val, $userRoles) ? 'selected' : ''
                                }}@endisset>{{ $val }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('roles'))
                        <div class="text-danger">{{ $errors->first('roles') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="{{ $required }} form-label">Password @if(empty($required)) <span
                                    class="text-secondary">(Optional)</span> @endif</label>
                            <input type="password" name="password"
                                class="form-control form-control-lg form-control-solid rounded" placeholder="Password"
                                value="{{ old('password') }}">
                            @error('password')
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="{{ $required }} form-label">Confirm Password @if(empty($required)) <span
                                    class="text-secondary">(Optional)</span> @endif</label>
                            <input type="password" name="password_confirmation"
                                class="form-control form-control-lg form-control-solid rounded"
                                placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        @forelse ($permissions as $k => $v)
                        <div class="row mt-3">
                            <h3 class="fs-4 fw-semibold mt-4 mb-2 text-capitalize">{{str_replace("-"," ",$k)}}:</h3>
                            @foreach($v as $key => $value )
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" name="permissions[]" value="{{ $value['id'] }}"
                                        id="permissions_{{$k}}_{{ $key }}" class="form-check-input mt-1"
                                        @isset($userPermissions){{ in_array($value['id'], $userPermissions) ? 'checked'
                                        : '' }}@endisset>
                                    <label for="permissions_{{$k}}_{{ $key }}"
                                        class="form-check-label text-capitalize">{{ str_replace("-"," ",$value['name'])
                                        }}</label>
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
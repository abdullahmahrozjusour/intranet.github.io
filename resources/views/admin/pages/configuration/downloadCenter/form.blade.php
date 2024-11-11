
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
                        <div class="col-sm-4 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="required form-label">File Name (In English)</label>
                                <input type="text" name="nameEn" class="form-control form-control-lg form-control-solid rounded" placeholder="File Name (In English)" value="{{ $data['nameEn'] ?? old('nameEn') }}">
                                @error('nameEn')
                                    <span class="text-danger">{{ $errors->first('nameEn') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="required form-label">File Name (In Arabic)</label>
                                <input type="text" name="nameAr" class="form-control form-control-lg form-control-solid rounded text-end" placeholder="File Name (In Arabic)" value="{{ $data['nameAr'] ?? old('nameAr') }}">
                                @error('nameAr')
                                    <span class="text-danger">{{ $errors->first('nameAr') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="required form-label">Status</label>
                                <select name="status" class="form-select form-select-solid form-select-lg fw-semibold select2">
                                    <option value="">Select</option>
                                    <option value="Pending" {{ (((isset($data['status']) && $data['status'] == 'Pending') || old('status') == 'Pending') ? 'selected' : '')  }}>Pending</option>
                                    <option value="Active" {{ (((isset($data['status']) && $data['status'] == 'Active') || old('status') == 'Active') ? 'selected' : '')  }}>Active</option>
                                    <option value="Deactive" {{ (((isset($data['status']) && $data['status'] == 'Deactive') || old('status') == 'Deactive') ? 'selected' : '')  }}>Deactive</option>
                                </select>
                            </div>
                            @error('status')
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="required form-label">Username (In English)</label>
                                <input type="text" name="usernameEn" class="form-control form-control-lg form-control-solid rounded" placeholder="Username (In English)" value="{{ $data['usernameEn'] ?? old('usernameEn') }}">
                                @error('usernameEn')
                                    <span class="text-danger">{{ $errors->first('usernameEn') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="form-label">Username (In Arabic) <span class="text-secondary">(Optional)</span></label>
                                <input type="text" name="usernameAr" class="form-control form-control-lg form-control-solid rounded text-end" placeholder="Username (In Arabic)" value="{{ $data['usernameAr'] ?? old('usernameAr') }}">
                                @error('usernameAr')
                                    <span class="text-danger">{{ $errors->first('usernameAr') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="required form-label">Document</label>
                                <input type="file" name="document" class="form-control form-control-lg form-control-solid rounded text-end" placeholder="Document" value="{{ $data['document'] ?? old('document') }}">
                                @error('document')
                                    <span class="text-danger">{{ $errors->first('document') }}</span>
                                @enderror
                            </div>
                            @isset($data->url)
                                @if(file_exists(public_path('assets/images/'.$data->extension.'.png')))
                                    <a href="{{ $data->url }}" title="{{ $data->nameEn }}" target="_blank">
                                        <img width="50px" height="50px" src="{{ asset('assets/images/'.$data->extension.'.png') }}" alt="{{ $data->extension }}">
                                    </a>
                                @else
                                    <a href="{{ $data->url }}" title="{{ $data->nameEn }}" target="_blank">
                                        <img width="50px" height="50px" src="{{ asset('assets/images/document.png') }}" alt="{{ $data->extension }}">
                                    </a>
                                @endif
                            @endisset
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

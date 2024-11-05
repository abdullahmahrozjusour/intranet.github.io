
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <div class="d-flex flex-column gap-7 gap-lg-10">

            <!--begin::General options-->
            <div class="card h-100 py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Add</h2>
                    </div>
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="required form-label">Title (In English)</label>
                                <input type="text" name="titleEn" class="form-control form-control-lg form-control-solid rounded" placeholder="Title (In English)" value="{{ $data['titleEn'] ?? old('titleEn') }}">
                                @error('titleEn')
                                    <span class="text-danger">{{ $errors->first('titleEn') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="required form-label">Title (In Arabic)</label>
                                <input type="text" name="titleAr" class="form-control form-control-lg form-control-solid rounded text-end" placeholder="Title (In Arabic)" value="{{ $data['titleAr'] ?? old('titleAr') }}">
                                @error('titleAr')
                                    <span class="text-danger">{{ $errors->first('titleAr') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
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
                        <div class="col-md-6 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="form-label">Description (In English)</label>
                                <textarea name="descEn" id="" cols="30" rows="10" class="form-control form-control-lg form-control-solid rounded" placeholder="Description (In English)">{{ $data['descEn'] ?? old('descEn') }}</textarea>
                                @error('descEn')
                                    <span class="text-danger">{{ $errors->first('descEn') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="form-label">Description (In Arabic)</label>
                                <textarea name="descAr" id="" cols="30" rows="10" class="form-control form-control-lg form-control-solid rounded text-end" placeholder="Description (In Arabic)">{{ $data['descAr'] ?? old('descAr') }}</textarea>
                                @error('descAr')
                                    <span class="text-danger">{{ $errors->first('descAr') }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card header-->
            </div>
            <!--end::General options-->
        </div>

        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="/seven-html-pro/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
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

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
                            <label class="required form-label">Name (In English)</label>
                            <input type="text" name="nameEn"
                                class="form-control form-control-lg form-control-solid rounded"
                                placeholder="Name (In English)" value="{{ $data['nameEn'] ?? old('nameEn') }}">
                            @error('nameEn')
                            <span class="text-danger">{{ $errors->first('nameEn') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
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
                    <div class="col-sm-4 col-12">
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
                </div>
                <div class="row">
                    <div class="col-sm-4 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Designation (In English)</label>
                            <input type="text" name="designationEn"
                                class="form-control form-control-lg form-control-solid rounded"
                                placeholder="Designation (In English)"
                                value="{{ $data['designationEn'] ?? old('designationEn') }}">
                            @error('designationEn')
                            <span class="text-danger">{{ $errors->first('designationEn') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="form-label">Designation (In Arabic) <span
                                    class="text-secondary">(Optional)</span></label>
                            <input type="text" name="designationAr"
                                class="form-control form-control-lg form-control-solid rounded text-end"
                                placeholder="Designation (In Arabic)"
                                value="{{ $data['designationAr'] ?? old('designationAr') }}">
                            @error('designationAr')
                            <span class="text-danger">{{ $errors->first('designationAr') }}</span>
                            @enderror
                        </div>
                    </div>
                    @if((isset($data->id) && 1 <> $data->id) || !isset($data->id))
                        <div class="col-sm-4 col-12">
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <label class="required form-label">Parent Name</label>
                                <select name="parentName"
                                    class="form-select form-select-solid form-select-lg fw-semibold select2">
                                    <option value="">Select</option>
                                    @foreach ($collection as $item)
                                    <option value="{{ $item->id }}" {{ (((isset($data['parentId']) &&
                                        $data['parentId']==$item->id) || old('parentName') == $item->id) ? 'selected' :
                                        '') }}>{{ $item->nameEn }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('parentName')
                            <span class="text-danger">{{ $errors->first('parentName') }}</span>
                            @enderror
                        </div>
                        @endif
                </div>
                <div class="row">
                    <div class="col-sm-4 col-12">
                        <div class="mb-10 fv-row fv-plugins-icon-container">
                            <label class="form-label">Image <span class="text-danger">*</span></label>
                            <input type="file" name="image"
                                accept="image/jpg, image/svg, image/webp, image/png, image/jpeg"
                                class="form-control form-control-lg form-control-solid rounded" placeholder="Image"
                                value="{{ $data['image'] ?? old('image') }}">
                            @error('image')
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @enderror
                        </div>
                        @isset($data->image)
                        @if(file_exists(public_path('storage/uploads/picture/'.$data->image)))
                        <a href="#" title="{{ $data->nameEn }}" target="_blank">
                            <img style="width:50px;height:50px;" class="rounded-circle bg-primary"
                                src="{{ asset('storage/uploads/picture/'.$data->image) }}" alt="{{ $data->image }}">
                        </a>
                        @elseif($data->id == 1)
                        <a href="#" title="{{ $data->nameEn }}" target="_blank">
                            <img style="width:50px;height:50px;" class="rounded-circle bg-primary"
                                src="{{ asset('assets/imgs/ceo.png') }}" alt="{{ $data->image }}">
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
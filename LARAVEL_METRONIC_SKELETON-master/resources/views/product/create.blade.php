@extends('layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="subheader py-2 py-lg-6  subheader-transparent " id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">
                            Product </h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">

                            <li class="breadcrumb-item">
                                <a class="text-muted">
                                    Product </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="text-muted">
                                    Master </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="text-muted">
                                    Create </a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Actions-->
                    <a href="{{ route('product.index') }}" class="btn  font-weight-bolder btn-sm">
                        <span class="svg-icon svg-icon-warning svg-icon-2x">
                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo9\dist/../src/media/svg/icons\Code\Backspace.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M8.42034438,20 L21,20 C22.1045695,20 23,19.1045695 23,18 L23,6 C23,4.8954305 22.1045695,4 21,4 L8.42034438,4 C8.15668432,4 7.90369297,4.10412727 7.71642146,4.28972363 L0.653241109,11.2897236 C0.260966303,11.6784895 0.25812177,12.3116481 0.646887666,12.7039229 C0.648995955,12.7060502 0.651113791,12.7081681 0.653241109,12.7102764 L7.71642146,19.7102764 C7.90369297,19.8958727 8.15668432,20 8.42034438,20 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        Back
                    </a>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <!--begin::Card-->
                    <!--begin::Form-->
                    <form
                        action="{{ isset($product) ? route('product.update', $product->product_id) : route('product.store') }}"
                        method="post" id="my-form" enctype="multipart/form-data">
                        @csrf
                        @if (isset($product))
                            @method('PUT')
                        @endif
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Product</h3>
                                <div class="card-toolbar">
                                    <div class="example-tools justify-content-center">
                                        <span class="example-copy" data-toggle="tooltip" title=""
                                            data-original-title="Copy code"></span>
                                    </div>
                                </div>
                            </div <!--begin::Form-->
                            <div class="card-body">
                                <div class="mb-6" <input type="hidden" name="type"
                                    value="#">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> Image <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <div class="image-input image-input-outline" id="kt_image_1">

                                                <div class="image-input-wrapper @error('image') is-invalid @enderror"
                                                     style="background-image: url({{asset('uploads/'.(!empty($product)?$product->image:""))}} )"></div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="image"
                                                           accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden" name="image"/>
                                                </label>
                                                @if ($errors->has('image'))
                                                    <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $errors->first('image') }}</strong>
                                                         </span>
                                                @endif
                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                            </span>
                                            </div>
                                            <span
                                                class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Product Name <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-5">
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" placeholder=""
                                                value="{{ isset($product) ? $product->name : old('name') }}">
                                            @error('name')
                                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">UPC <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-5">
                                            <input type="text" name="upc"
                                                class="form-control @error('upc') is-invalid @enderror" placeholder=""
                                                value="{{ isset($product) ? $product->upc : old('upc') }}">
                                            @error('upc')
                                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Price <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-5">
                                            <input type="number" name="price"
                                                class="form-control @error('price') is-invalid @enderror" placeholder="0.00"
                                                value="{{ isset($product) ? $product->price : old('price') }}">
                                            @error('price')
                                                <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"> Status <span class="text-danger">*</span></label>

                                        <div class="col-lg-5">
                                        <select
                                            class="form-control @error('status')is-invalid @enderror"
                                            name="status">
                                            <option
                                                value="pn" {{(isset($product) && $product->status=='pn')?'selected':old('pn')}}>
                                                Pending
                                            </option>

                                            <option
                                                value="pc" {{(isset($product) && $product->status=='pc')?'selected':old('pc')}}>
                                                Processing
                                            </option>
                                            <option
                                                value="cm" {{(isset($product) && $product->status=='cm')?'selected':old('cm')}}>
                                                Complete
                                            </option>
                                        </select>
                                        @error('status')
                                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6"></div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save"></i>Save
                                        </button>
                                        <button type="reset" class="btn btn-secondary"><i
                                                class="ki ki-bold-close icon-md"></i>Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.0.5')}}"></script>
    <script src="{{asset('assets/js/pages/crud/forms/editors/summernote.js')}}"></script>
    <script src="{{ asset('assets/js/pages/crud/file-upload/image-input.js?v=7.0.5') }}"></script>

@endpush

@push('scripts')
    <script>
        $('.select2-control').select2({
            allowClear: true,
            placeholder: 'Select ',
        });
    </script>
    <script>
        var KTImageInputDemo = function () {
            // Private functions
            var initDemos = function () {
                // Example 1
                var avatar1 = new KTImageInput('kt_image_1');
                var avatar2 = new KTImageInput('kt_image_2');
                var avatar3 = new KTImageInput('kt_image_3');
                var avatar4 = new KTImageInput('kt_image_4');
                var avatar5 = new KTImageInput('kt_image_5');
                var avatar6 = new KTImageInput('kt_image_6');
                var avatar7 = new KTImageInput('kt_image_7');
                var avatar8 = new KTImageInput('kt_image_8');
                var avatar9 = new KTImageInput('kt_image_9');


            }

            return {
                // public functions
                init: function () {
                    initDemos();
                }
            };
        }();

        KTUtil.ready(function () {
            KTImageInputDemo.init();
        });

    </script>

@endpush

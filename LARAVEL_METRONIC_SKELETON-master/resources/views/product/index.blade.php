    @extends('layouts.app')

    @section('content')
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
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
                            <ul
                                class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a class="text-muted">
                                        Product </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a class="text-muted">
                                        Master </a>
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


                        <a href="{{ route('product.create') }}" class="btn btn-light-primary font-weight-bolder btn-sm">
                            <i class="flaticon-add-circular-button"></i> Add New
                        </a>


                        <!--end::Actions-->

                        <!--begin::Dropdown-->
                        <!--end::Dropdown-->
                    </div>

                    <!--end::Toolbar-->
                </div>
            </div>

            <!--begin::Container-->
            <div class="container-fluid">
                @include('layouts.flash-message')

                <!--begin::Notice-->
                <!--end::Notice-->
                <!--begin::Card-->

                <div class="card card-custom">

                    <div class="card-body">

                        <div class="table-responsive">
                            <!--begin: Datatable-->
                            <table class="table table-bordered table-hover table-checkable mt-11 col-form-label">
                                <thead>

                                    <tr>

                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Upc</th>
                                        <th>Status</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $key => $value)
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50 flex-shrink-0 mr-4">
                                                    <div class="symbol-label"
                                                        style="background-image: url({{ 'uploads/' . $value->image }})"></div>
                                                </div>
                                            </td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->price }}</td>
                                            <td>{{ $value->upc }}</td>
                                            <td>
                                                @if ($value->status == 'pn')
                                                    <span
                                                        class="label label-xl label-danger label-inline font-weight-bold mr-2">
                                                        &nbsp; Pending
                                                    </span>
                                                @elseif($value->status = 'pc')
                                                    <span
                                                        class="label label-xl label-warning   label-inline font-weight-bold mr-2">
                                                        &nbsp;Processing

                                                    </span>
                                                @elseif($value->status = 'cm')
                                                    <span
                                                        class="label label-xl label-success   label-inline font-weight-bold mr-2">
                                                        &nbsp;Complete

                                                    </span>
                                                @endif
                                            </td>


                                            <td>

                                                <a href="{{ route('product.edit', $value->product_id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fa fa-edit"></i> </a>

                                            <td>

                                                <form action="{{ route('product.destroy', $value->product_id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure  want to delete?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{--                        {{ $receipt->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Card-->


        <!--end::Container-->
    @endsection
    @push('styles')
        <link
            href="{{ env('ASSET_URL', 'http://localhost/datenex/public/') . 'assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.5' }}"
            rel="stylesheet" type="text/css" />
    @endpush
    @push('scripts')
        <!--begin::Page Vendors(used by this page)-->
        <script
            src="{{ env('ASSET_URL', 'http://localhost/datenex/public/') . 'assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.5' }}">
        </script>
        <!--end::Page Vendors-->
        <!--begin::Page Scripts(used by this page)-->
        <script>
            $('#kt_datatable').DataTable();
        </script>


        <script>
            $('#kt_select2_1').select2();
        </script>
        <script>
            $('.select2-control').select2({
                allowClear: true,
                placeholder: 'Select ',
            });
        </script>
    @endpush

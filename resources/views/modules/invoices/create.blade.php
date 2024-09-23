@php $page='invoices'; @endphp
@extends('layouts.master',['activeMenu' => 'invoices_management', 'activeSubMenu' => $page, 'activeThirdMenu' => $page])
@section('breadcrumbs')
<div id="kt_app_toolbar" class="py-3 app-toolbar py-lg-6" data-select2-id="select2-data-kt_app_toolbar">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack"
        data-select2-id="select2-data-kt_app_toolbar_container">
        <!--begin::Page title-->
        <div class="flex-wrap page-title d-flex flex-column justify-content-center me-3">
            <!--begin::Title-->
            <h1 class="my-0 text-gray-900 page-heading d-flex fw-bold fs-3 flex-column justify-content-center">
                Create Invoice</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="pt-1 my-0 breadcrumb breadcrumb-separatorless fw-semibold fs-7">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Home</a>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="{{route('invoices.index')}}">
                    <span></span>
                    <li class="breadcrumb-item text-muted text-hover-primary">{{titleFilter($page)}}</li>
                </a>
                <!--end::Item-->

                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>

                <a href="{{route('invoices.create')}}">
                    <span></span>
                    <li class="breadcrumb-item text-muted text-hover-primary">Create</li>
                </a>
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->

    </div>
    <!--end::Toolbar container-->
</div>
@endsection
@section('content')
<div class="col-xl-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('include.messages')
            </div>
        </div>
    </div>

    <!--begin::List Widget 8-->
    <div class="mb-5 card card-xl-stretch mb-xl-8">
        <!--begin::Header-->
        <div class="mt-4 border-0 card-header align-items-center">
            <h3 class="card-title align-items-start flex-column">
                <span class="text-gray-900 fw-bold">Create</span>
                {{-- <span class="mt-1 text-muted fw-semibold fs-7">Gifts and more</span> --}}
            </h3>
            <div class="card-toolbar">
            </div>
        </div>
        <!--end::Header-->


        <!--begin::Body-->
        <form class="form" action="{{route($page.'.store')}}" method="POST" enctype="multipart/form-data"
            class="needs-validation" novalidate>
            @csrf
            <div class="card-body">
                <h3 class="mb-6 font-size-lg text-dark font-weight-bold">1. Invoice Info:</h3>
                <div class="mb-15">

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Patients:</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="patient_id" data-live-search="true" id="kt_select2_1">
                                <option selected disabled> {{ __('Select Patient')}}</option>
                                @isset($patients)
                                @foreach ($patients as $patient)
                                <option value="{{$patient->id}}"> {{$patient->name_of_patient}} -
                                    {{$patient->patient_mr_number}} </option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Services:</label>
                        <div class="col-lg-6">
                            <select class="form-control select2" id="kt_select2_3" name="services[]" multiple>
                                {{-- <option selected disabled> {{ __('Select Services')}}</option> --}}
                                @foreach($serviceCategories as $service)
                                <option value="{{$service->id}}">{{$service->service_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Discount Amount:</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="discount_amount" data-live-search="true"
                                id="kt_select2_1">
                                <option selected disabled> {{ __('Select Discount')}}</option>
                                <option value="no_discount" selected> No Discount </option>
                                <option value="full_discount"> Full Discount </option>
                            </select>
                            <div>
                                @error('discount_amount')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>



                        {{-- <div class="col-lg-6">
                            <input type="text" id="discount" name="discount_amount" class="form-control"
                                value="{{ old('discount_amount') }}" value="0" placeholder="Enter discount amount" />
                            --}}
                            {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
                            {{-- <div>
                                @error('discount_amount')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div> --}}
                    </div>
                    <br>
                    {{--
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Payment Status</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="invoice_payment_status_id" data-live-search="true" id="">
                                <option selected disabled> {{ __('Select payment status')}}</option>

                                @isset($payment_statuses)
                                @foreach ($payment_statuses as $status)
                                <option value="{{$status->id}}" {{ "$status->id"===old('invoice_payment_status_id')
                                    ? 'selected' : '' }}>
                                    {{$status->name}} </option>
                                @endforeach
                                @endisset

                            </select>
                            <div>
                                @error('invoice_payment_status_id')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br> --}}


                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-9"></div>
                    <div class="col-lg-3 text-end">
                        <button type="submit" class="mr-2 btn btn-sm btn-primary">Download</button>
                        <a href="{{route($page.'.index')}}" class="btn btn-sm btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Body-->
    </div>
    <!--end::List Widget 8-->
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="{{getAssetsURLs('js/custom/select2_invoices.js')}}"></script>
<script>
    $(document).ready(function(){
	var $discount = $('#discount'),
		$price = $('#price'),
		$newPrice = $('#new-price');

        $($discount).keyup(function (event) {
            var calculated_price = $price.val() - $discount.val();
            $('#new-price').val(calculated_price);
            $('#amount_received').val(calculated_price);

        });
});

</script>
@endsection

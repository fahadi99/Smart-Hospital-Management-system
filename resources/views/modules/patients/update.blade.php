@php $page='patients'; @endphp
@extends('layouts.master',['activeMenu' => 'patients_management', 'activeSubMenu' => 'patients', 'activeThirdMenu' =>
'patients'])
@section('breadcrumbs')
<div id="kt_app_toolbar" class="py-3 app-toolbar py-lg-6" data-select2-id="select2-data-kt_app_toolbar">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack"
        data-select2-id="select2-data-kt_app_toolbar_container">
        <!--begin::Page title-->
        <div class="flex-wrap page-title d-flex flex-column justify-content-center me-3">
            <!--begin::Title-->
            <h1 class="my-0 text-gray-900 page-heading d-flex fw-bold fs-3 flex-column justify-content-center">
                Update Patient</h1>
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
                <a href="{{route('patients.index')}}">
                    <span></span>
                    <li class="breadcrumb-item text-muted text-hover-primary">{{titleFilter($page)}}</li>
                </a>
                <!--end::Item-->

                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>

                <a href="{{route('patients.edit', $obj->id)}}">
                    <span></span>
                    <li class="breadcrumb-item text-muted text-hover-primary">Update</li>
                </a>
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        {{-- <div class="gap-2 d-flex align-items-center gap-lg-3" data-select2-id="select2-data-122-cw9r">
            <!--begin::Filter menu-->
            <div class="m-0" data-select2-id="select2-data-121-45f5">
                <!--begin::Menu toggle-->
                <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click"
                    data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>Filter</a>
                <!--end::Menu toggle-->
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                    id="kt_menu_6606384d61246" style="" data-select2-id="select2-data-kt_menu_6606384d61246">
                    <!--begin::Header-->
                    <div class="py-5 px-7">
                        <div class="text-gray-900 fs-5 fw-bold">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Menu separator-->
                    <div class="border-gray-200 separator"></div>
                    <!--end::Menu separator-->
                    <!--begin::Form-->
                    <div class="py-5 px-7" data-select2-id="select2-data-120-s3mi">
                        <!--begin::Input group-->
                        <div class="mb-10" data-select2-id="select2-data-119-md49">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Status:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div data-select2-id="select2-data-118-i4go">
                                <select class="form-select form-select-solid select2-hidden-accessible" multiple=""
                                    data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option"
                                    data-dropdown-parent="#kt_menu_6606384d61246" data-allow-clear="true"
                                    data-select2-id="select2-data-7-19z1" tabindex="-1" aria-hidden="true"
                                    data-kt-initialized="1">
                                    <option data-select2-id="select2-data-125-g7ns"></option>
                                    <option value="1" data-select2-id="select2-data-126-g09z">Approved</option>
                                    <option value="2" data-select2-id="select2-data-127-23ft">Pending</option>
                                    <option value="2" data-select2-id="select2-data-128-ql51">In Process</option>
                                    <option value="2" data-select2-id="select2-data-129-fwv5">Rejected</option>
                                </select><span
                                    class="select2 select2-container select2-container--bootstrap5 select2-container--below"
                                    dir="ltr" data-select2-id="select2-data-8-x24w" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--multiple form-select form-select-solid"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                            aria-disabled="false">
                                            <ul class="select2-selection__rendered" id="select2-fkxw-container"></ul>
                                            <span class="select2-search select2-search--inline"><textarea
                                                    class="select2-search__field" type="search" tabindex="0"
                                                    autocorrect="off" autocapitalize="none" spellcheck="false"
                                                    role="searchbox" aria-autocomplete="list" autocomplete="off"
                                                    aria-label="Search" aria-describedby="select2-fkxw-container"
                                                    placeholder="Select option" style="width: 100%;"></textarea></span>
                                        </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Member Type:</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="d-flex">
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                    <input class="form-check-input" type="checkbox" value="1">
                                    <span class="form-check-label">Author</span>
                                </label>
                                <!--end::Options-->
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                    <span class="form-check-label">Customer</span>
                                </label>
                                <!--end::Options-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Notifications:</label>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" name="notifications"
                                    checked="checked">
                                <label class="form-check-label">Enabled</label>
                            </div>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                data-kt-menu-dismiss="true">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary"
                                data-kt-menu-dismiss="true">Apply</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Menu 1-->
            </div>
            <!--end::Filter menu-->
            <!--begin::Secondary button-->
            <!--end::Secondary button-->
            <!--begin::Primary button-->
            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                data-bs-target="#kt_modal_create_app">Create</a>
            <!--end::Primary button-->
        </div> --}}
        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>
@endsection
@section('content')


<div class="col-xl-12">
    <!--begin::List Widget 8-->
    <div class="mb-5 card card-xl-stretch mb-xl-8">
        <!--begin::Header-->
        <div class="mt-4 border-0 card-header align-items-center">
            <h3 class="card-title align-items-start flex-column">
                <span class="text-gray-900 fw-bold">Update</span>
                {{-- <span class="mt-1 text-muted fw-semibold fs-7">Gifts and more</span> --}}
            </h3>
            <div class="card-toolbar">
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <form class="form" action="{{route($page.'.update',$obj->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="card-body">
                <h3 class="mb-6 font-size-lg text-dark font-weight-bold">1. Patient Info:</h3>
                <div class="mb-15">

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Full Name:</label>
                        <div class="col-lg-6">
                            <input type="text" value="{{$obj->name_of_patient}}" pattern="[A-Za-z\s]+"
                                name="name_of_patient" class="form-control" placeholder="Enter patient full name" />
                            {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
                            <div>
                                @error('name_of_patient')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">CNIC Number:</label>
                        <div class="col-lg-6">
                            <input type="number" value="{{$obj->cnic_number}}" name="cnic_number" class="form-control"
                                placeholder="Enter CNIC" />
                            {{-- <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            --}}
                            <div>
                                @error('cnic_number')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Email address:</label>
                        <div class="col-lg-6">
                            <input type="email" value="{{$obj->email}}" name="email" class="form-control"
                                placeholder="Enter email" />
                            {{-- <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            --}}
                            <div>
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Date of Birth:</label>
                        <div class="col-lg-6">
                            <input type="date" value="{{$obj->date_of_birth}}" name="date_of_birth" class="form-control"
                                max="{{ date('Y-m-d') }}" placeholder="Enter dob" />
                            {{-- <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            --}}
                            <div>
                                @error('date_of_birth')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Phone:</label>
                        <div class="col-lg-6">
                            <input type="number" value="{{$obj->phone}}" name="phone" class="form-control"
                                placeholder="Enter phone" />
                            {{-- <span class="form-text text-muted">We'll never share your phone with anyone else</span>
                            --}}
                            <div>
                                @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Cell:</label>
                        <div class="col-lg-6">
                            <input type="number" value="{{$obj->cell}}" name="cell" class="form-control"
                                placeholder="Enter cell" />
                            {{-- <span class="form-text text-muted">We'll never share your phone with anyone else</span>
                            --}}
                            <div>
                                @error('cell')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Blood group:</label>
                        <div class="col-lg-6">
                            <input type="text" name="blood_group" value="{{$obj->blood_group}}" class="form-control"
                                placeholder="Enter blood group" />
                            {{-- <span class="form-text text-muted">We'll never share your phone with anyone else</span>
                            --}}
                            <div>
                                @error('blood_group')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Refering Doctor Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="reffering_doctor_name" value="{{$obj->reffering_doctor_name}}"
                                class="form-control" placeholder="Enter reffering doctor name" />
                            {{-- <span class="form-text text-muted">We'll never share your phone with anyone else</span>
                            --}}
                            <div>
                                @error('reffering_doctor_name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Contact number:</label>
                        <div class="col-lg-6">
                            <input type="number" name="contact_number" value="{{$obj->contact_number}}"
                                class="form-control" placeholder="Enter contact number" />
                            {{-- <span class="form-text text-muted">We'll never share your phone with anyone else</span>
                            --}}
                            <div>
                                @error('contact_number')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Address:</label>
                        <div class="col-lg-6">
                            <input type="text" name="address" class="form-control" value="{{$obj->address}}"
                                placeholder="Enter address" />
                            {{-- <span class="form-text text-muted">We'll never share your phone with anyone else</span>
                            --}}
                            <div>
                                @error('address')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Permanent address:</label>
                        <div class="col-lg-6">
                            <input type="text" name="permanent_address" class="form-control"
                                value="{{$obj->permanent_address}}" placeholder="Enter permanent address" />
                            <div>
                                @error('permanent_address')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Patient Category</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="patient_category" data-live-search="true"
                                id="deviceSelect">
                                <option selected disabled> {{ __('Select Category')}}</option>
                                <option value="resident" @if($obj->patient_category=='resident') selected @endif>
                                    Resident </option>
                                <option value="non_resident" @if($obj->patient_category=='non_resident') selected
                                    @endif> Non Resident </option>
                                <option value="employee" @if($obj->patient_category=='employee') selected @endif>
                                    Employee </option>
                            </select>
                            <div>
                                @error('patient_category')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>


                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Gender</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="gender" data-live-search="true" id="deviceSelect">
                                <option selected disabled> {{ __('Select Gender')}}</option>
                                <option value="male" @if($obj->gender=='male') selected @endif> Male </option>
                                <option value="female" @if($obj->gender=='female') selected @endif> Female </option>
                                <option value="other" @if($obj->gender=='other') selected @endif> Other </option>
                            </select>
                            <div>
                                @error('gender')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Status</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="status" data-live-search="true" id="deviceSelect">
                                <option selected disabled> {{ __('Select Status')}}</option>


                                <option value="1" @if($obj->status==1) selected @endif > Active </option>
                                <option value="0" @if($obj->status==0) selected @endif > In Active </option>


                            </select>
                            <div>
                                @error('status')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <h3 class="mb-6 font-size-lg text-dark font-weight-bold">2. Emergency Contact Info:</h3>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Emergency Contact Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="emergency_contact_name" class="form-control"
                                value="{{ $obj->emergencyContact->name ?? '' }}"
                                placeholder="Enter emergency contact name" required />
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Relation:</label>
                        <div class="col-lg-6">
                            <input type="text" name="emergency_contact_relation" class="form-control"
                                value="{{ $obj->emergencyContact->relation ?? '' }}" placeholder="Enter relation"
                                required />
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Emergency Contact Number:</label>
                        <div class="col-lg-6">
                            <input type="number" name="emergency_contact_number" class="form-control"
                                value="{{ $obj->emergencyContact->contact ?? '' }}"
                                placeholder="Enter emergency contact number" required />
                        </div>
                    </div>
                    <br>



                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-9"></div>
                    <div class="col-lg-3 text-end">
                        <button type="submit" class="mr-2 btn btn-sm btn-primary">Submit</button>
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
</script>
@endsection

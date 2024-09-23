<?php $page='patients'; ?>

<?php $__env->startSection('breadcrumbs'); ?>
<div id="kt_app_toolbar" class="py-3 app-toolbar py-lg-6" data-select2-id="select2-data-kt_app_toolbar">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack" data-select2-id="select2-data-kt_app_toolbar_container">
        <!--begin::Page title-->
        <div class="flex-wrap page-title d-flex flex-column justify-content-center me-3">
            <!--begin::Title-->
            <h1 class="my-0 text-gray-900 page-heading d-flex fw-bold fs-3 flex-column justify-content-center"><?php echo e(titleFilter($page)); ?> Update</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="pt-1 my-0 breadcrumb breadcrumb-separatorless fw-semibold fs-7">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="<?php echo e(route('dashboard')); ?>" class="text-muted text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted"><?php echo e(titleFilter($page)); ?> Management</li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted"><?php echo e(titleFilter($page)); ?></li>
                <!--end::Item-->

                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>

                <li class="breadcrumb-item text-muted">Update</li>
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        
        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="col-xl-12">
    <!--begin::List Widget 8-->
    <div class="mb-5 card card-xl-stretch mb-xl-8">
        <!--begin::Header-->
        <div class="mt-4 border-0 card-header align-items-center">
            <h3 class="card-title align-items-start flex-column">
                <span class="text-gray-900 fw-bold">Update</span>
                
            </h3>
            <div class="card-toolbar">
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <form class="form" action="<?php echo e(route($page.'.update',$obj->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>

            <div class="card-body">
                <h3 class="mb-6 font-size-lg text-dark font-weight-bold">1. <?php echo e(titleFilter($page)); ?> Info:</h3>
                <div class="mb-15">

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Full Name:</label>
                        <div class="col-lg-6">
                            <input type="text" value="<?php echo e($obj->name_of_patient); ?>" name="name_of_patient" class="form-control" placeholder="Enter patient full name"/>
                            
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">CNIC Number:</label>
                        <div class="col-lg-6">
                            <input type="number" value="<?php echo e($obj->cnic_number); ?>" name="cnic_number" class="form-control" placeholder="Enter CNIC"/>
                            
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Email address:</label>
                        <div class="col-lg-6">
                            <input type="email" value="<?php echo e($obj->email); ?>" name="email" class="form-control" placeholder="Enter email"/>
                            
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Date of Birth:</label>
                        <div class="col-lg-6">
                            <input type="date" value="<?php echo e($obj->date_of_birth); ?>"  name="date_of_birth" class="form-control" placeholder="Enter dob"/>
                            
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Phone:</label>
                        <div class="col-lg-6">
                            <input type="number" value="<?php echo e($obj->phone); ?>" name="phone" class="form-control" placeholder="Enter phone"/>
                            
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Cell:</label>
                        <div class="col-lg-6">
                            <input type="number" value="<?php echo e($obj->cell); ?>"  name="cell" class="form-control" placeholder="Enter cell"/>
                            
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Age:</label>
                        <div class="col-lg-6">
                            <input type="number"  value="<?php echo e($obj->age); ?>"  name="age" class="form-control" placeholder="Enter age"/>
                            
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Blood group:</label>
                        <div class="col-lg-6">
                            <input type="text" name="blood_group"  value="<?php echo e($obj->blood_group); ?>"  class="form-control" placeholder="Enter blood group"/>
                            
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Refering Doctor Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="reffering_doctor_name" value="<?php echo e($obj->reffering_doctor_name); ?>"  class="form-control" placeholder="Enter reffering doctor name"/>
                            
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Contact number:</label>
                        <div class="col-lg-6">
                            <input type="text" name="contact_number" value="<?php echo e($obj->contact_number); ?>"  class="form-control" placeholder="Enter contact number"/>
                            
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Address:</label>
                        <div class="col-lg-6">
                            <input type="text" name="address" class="form-control" value="<?php echo e($obj->address); ?>" placeholder="Enter address"/>
                            
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Permanent address:</label>
                        <div class="col-lg-6">
                            <input type="text" name="permanent_address" class="form-control" value="<?php echo e($obj->permanent_address); ?>" placeholder="Enter permanent address"/>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Patient Category</label>
                        <div class="col-lg-6">
                            <select
                            class="form-control"
                            name="patient_category" data-live-search="true"
                            id="deviceSelect">
                            <option selected disabled> <?php echo e(__('Select Category')); ?></option>
                                 <option value="resident" <?php if($obj->patient_category=='resident'): ?> selected <?php endif; ?>> Resident </option>
                                 <option value="non_resident" <?php if($obj->patient_category=='non_resident'): ?> selected <?php endif; ?>> Non Resident </option>
                                 <option value="employee" <?php if($obj->patient_category=='employee'): ?> selected <?php endif; ?>> Employee </option>
                        </select>
                        </div>
                    </div>
                    <br>


                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Gender</label>
                        <div class="col-lg-6">
                            <select
                            class="form-control"
                            name="gender" data-live-search="true"
                            id="deviceSelect">
                            <option selected disabled> <?php echo e(__('Select Gender')); ?></option>
                                 <option value="male" <?php if($obj->gender=='male'): ?> selected <?php endif; ?>> Male </option>
                                 <option value="female" <?php if($obj->gender=='female'): ?> selected <?php endif; ?>> Female </option>
                                 <option value="other" <?php if($obj->gender=='other'): ?> selected <?php endif; ?>> Other </option>
                        </select>
                        </div>
                    </div>
                    <br>

                    <h3 class="mb-6 font-size-lg text-dark font-weight-bold">2. Emergency Contact Info:</h3>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Emergency Contact Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="emergency_contact_name" class="form-control" value="<?php echo e($obj->emergencyContact->name ?? ''); ?>" placeholder="Enter emergency contact name" required/>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Relation:</label>
                        <div class="col-lg-6">
                            <input type="text" name="emergency_contact_relation" class="form-control" value="<?php echo e($obj->emergencyContact->relation ?? ''); ?>" placeholder="Enter relation" required/>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Emergency Contact Number:</label>
                        <div class="col-lg-6">
                            <input type="text" name="emergency_contact_number" class="form-control" value="<?php echo e($obj->emergencyContact->contact ?? ''); ?>" placeholder="Enter emergency contact number" required/>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Status</label>
                        <div class="col-lg-6">
                            <select
                            class="form-control"
                            name="status" data-live-search="true"
                            id="deviceSelect">
                            <option selected disabled> <?php echo e(__('Select Status')); ?></option>


                                 <option value="1" <?php if($obj->status==1): ?> selected <?php endif; ?> > Active </option>
                                 <option value="0" <?php if($obj->status==0): ?> selected <?php endif; ?> > In Active </option>


                        </select>
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
                        <a href="<?php echo e(route($page.'.index')); ?>" class="btn btn-sm btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Body-->
    </div>
    <!--end::List Widget 8-->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master',['activeMenu' => 'patients_management', 'activeSubMenu' => 'patients', 'activeThirdMenu' => 'patients'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hms_temp\resources\views/modules/patients/update.blade.php ENDPATH**/ ?>
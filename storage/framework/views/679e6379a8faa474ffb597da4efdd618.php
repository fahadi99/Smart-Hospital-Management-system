<?php $page='patients'; ?>

<?php $__env->startSection('breadcrumbs'); ?>
<div id="kt_app_toolbar" class="py-3 app-toolbar py-lg-6" data-select2-id="select2-data-kt_app_toolbar">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack"
        data-select2-id="select2-data-kt_app_toolbar_container">
        <!--begin::Page title-->
        <div class="flex-wrap page-title d-flex flex-column justify-content-center me-3">
            <!--begin::Title-->
            <h1 class="my-0 text-gray-900 page-heading d-flex fw-bold fs-3 flex-column justify-content-center">
                Create Patient</h1>
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
                <a href="<?php echo e(route('patients.index')); ?>">
                    <span></span>
                    <li class="breadcrumb-item text-muted text-hover-primary"><?php echo e(titleFilter($page)); ?></li>
                </a>
                <!--end::Item-->

                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>

                <a href="<?php echo e(route('patients.create')); ?>">
                    <span></span>
                    <li class="breadcrumb-item text-muted text-hover-primary">Create</li>
                </a>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>

    <!--begin::List Widget 8-->
    <div class="mb-5 card card-xl-stretch mb-xl-8">
        <!--begin::Header-->
        <div class="mt-4 border-0 card-header align-items-center">
            <h3 class="card-title align-items-start flex-column">
                <span class="text-gray-900 fw-bold">Create</span>
                
            </h3>
            <div class="card-toolbar">
            </div>
        </div>
        <!--end::Header-->


        <!--begin::Body-->
        <form class="form" action="<?php echo e(route($page.'.store')); ?>" method="POST" enctype="multipart/form-data"
            class="needs-validation" novalidate>
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <h3 class="mb-6 font-size-lg text-dark font-weight-bold">1. Patient Info:</h3>
                <div class="mb-15">
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Full Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="name_of_patient" pattern="[A-Za-z\s]+" class="form-control"
                                value="<?php echo e(old('name_of_patient')); ?>" placeholder="Enter patient full name" />
                            
                            <div>
                                <?php $__errorArgs = ['name_of_patient'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">CNIC Number:</label>
                        <div class="col-lg-6">
                            <input type="number" name="cnic_number" class="form-control"
                                value="<?php echo e(old('cnic_number')); ?>" placeholder="Enter CNIC" maxlength="13" />
                            
                            <div>
                                <?php $__errorArgs = ['cnic_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Email Address:</label>
                        <div class="col-lg-6">
                            <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>"
                                placeholder="Enter email" />
                            
                            <div>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Date of Birth:</label>
                        <div class="col-lg-6">
                            <input type="date" name="date_of_birth" class="form-control" max="<?php echo e(date('Y-m-d')); ?>"
                                value="<?php echo e(old('date_of_birth')); ?>" placeholder="Enter dob" />
                            
                            <div>
                                <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Phone:</label>
                        <div class="col-lg-6">
                            <input type="number" name="phone" class="form-control" value="<?php echo e(old('phone')); ?>"
                                placeholder="Enter phone" />
                            
                            <div>
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Cell:</label>
                        <div class="col-lg-6">
                            <input type="number" name="cell" class="form-control" value="<?php echo e(old('cell')); ?>"
                                placeholder="Enter cell" />
                            
                            <div>
                                <?php $__errorArgs = ['cell'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Blood group:</label>
                        <div class="col-lg-6">
                            <input type="text" name="blood_group" class="form-control" value="<?php echo e(old('blood_group')); ?>"
                                placeholder="Enter blood group" />
                            
                            <div>
                                <?php $__errorArgs = ['blood_group'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Refering Doctor Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="reffering_doctor_name" class="form-control"
                                value="<?php echo e(old('reffering_doctor_name')); ?>" placeholder="Enter reffering doctor name" />
                            
                            <div>
                                <?php $__errorArgs = ['reffering_doctor_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Contact number:</label>
                        <div class="col-lg-6">
                            <input type="number" name="contact_number" class="form-control"
                                value="<?php echo e(old('contact_number')); ?>" placeholder="Enter contact number" />
                            
                            <div>
                                <?php $__errorArgs = ['contact_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Address:</label>
                        <div class="col-lg-6">
                            <input type="text" name="address" class="form-control" value="<?php echo e(old('address')); ?>"
                                placeholder="Enter address" />
                            
                            <div>
                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Permanent address:</label>
                        <div class="col-lg-6">
                            <input type="text" name="permanent_address" class="form-control"
                                value="<?php echo e(old('permanent_address')); ?>" placeholder="Enter permanent address" />
                            <div>
                                <?php $__errorArgs = ['permanent_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Patient Category:</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="patient_category" data-live-search="true"
                                id="deviceSelect">
                                <option selected disabled> <?php echo e(__('Select Category')); ?></option>
                                <option value="resident" <?php echo e("resident"===old('patient_category') ? 'selected' : ''); ?>>
                                    Resident </option>
                                <option value="non_resident" <?php echo e("non_resident"===old('patient_category') ? 'selected'
                                    : ''); ?>> Non Resident </option>
                                <option value="employee" <?php echo e("employee"===old('patient_category') ? 'selected' : ''); ?>>
                                    Employee </option>
                            </select>
                            <div>
                                <?php $__errorArgs = ['patient_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>


                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Gender:</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="gender" data-live-search="true" id="deviceSelect">
                                <option selected disabled> <?php echo e(__('Select Gender')); ?></option>
                                <option value="male" <?php echo e("male"===old('gender') ? 'selected' : ''); ?>> Male </option>
                                <option value="female" <?php echo e("female"===old('gender') ? 'selected' : ''); ?>> Female
                                </option>
                                <option value="other" <?php echo e("other"===old('gender') ? 'selected' : ''); ?>> Other </option>
                            </select>
                            <div>
                                <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3 class="mb-6 font-size-lg text-dark font-weight-bold">2. Emergency Contact Info:</h3>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Emergency Contact Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="emergency_contact_name" class="form-control"
                                placeholder="Enter emergency contact name" value="<?php echo e(old('emergency_contact_name')); ?>"
                                required />
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Relation:</label>
                        <div class="col-lg-6">
                            <input type="text" name="emergency_contact_relation" class="form-control"
                                placeholder="Enter relation" value="<?php echo e(old('emergency_contact_relation')); ?>" required />
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Emergency Contact Number:</label>
                        <div class="col-lg-6">
                            <input type="number" name="emergency_contact_number" class="form-control"
                                placeholder="Enter emergency contact number"
                                value="<?php echo e(old('emergency_contact_number')); ?>" required />
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script>
    (function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master',['activeMenu' => 'patients_management', 'activeSubMenu' => 'patients', 'activeThirdMenu' =>
'patients'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hms_temp\resources\views/modules/patients/create.blade.php ENDPATH**/ ?>
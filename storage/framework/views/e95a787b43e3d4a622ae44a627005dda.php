<?php $page='prescriptions'; ?>

<?php $__env->startSection('breadcrumbs'); ?>
<div id="kt_app_toolbar" class="py-3 app-toolbar py-lg-6" data-select2-id="select2-data-kt_app_toolbar">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack"
        data-select2-id="select2-data-kt_app_toolbar_container">
        <!--begin::Page title-->
        <div class="flex-wrap page-title d-flex flex-column justify-content-center me-3">
            <!--begin::Title-->
            <h1 class="my-0 text-gray-900 page-heading d-flex fw-bold fs-3 flex-column justify-content-center">Create
                Prescription</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="pt-1 my-0 breadcrumb breadcrumb-separatorless fw-semibold fs-7">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="<?php echo e(route('dashboard')); ?>" class="text-muted text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="<?php echo e(route('prescriptions.index')); ?>">
                    <span></span>
                    <li class="breadcrumb-item text-muted text-hover-primary"><?php echo e(titleFilter($page)); ?></li>
                </a>
                <!--end::Item-->

                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>

                <a href="<?php echo e(route('prescriptions.create')); ?>">
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
                <h3 class="mb-6 font-size-lg text-dark font-weight-bold">1. Prescription Info:</h3>
                <div class="mb-15">

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Doctors:</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="doctor_id" data-live-search="true" id="kt_select2_2">
                                <option selected disabled> <?php echo e(__('Select Doctor')); ?></option>
                                <?php if(isset($doctors)): ?>
                                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($doctor->id); ?>"> <?php echo e($doctor->doctor_name); ?> - <?php echo e($doctor->department_name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <br>


                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Patients:</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="patient_id" data-live-search="true" id="kt_select2_1">
                                <option selected disabled> <?php echo e(__('Select Patient')); ?></option>
                                <?php if(isset($patients)): ?>
                                <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($patient->id); ?>"> <?php echo e($patient->name_of_patient); ?> -
                                    <?php echo e($patient->patient_mr_number); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="<?php echo e(getAssetsURLs('js/custom/select2_invoices.js')); ?>"></script>
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
<?php echo $__env->make('layouts.master',['activeMenu' => 'prescriptions_management', 'activeSubMenu' => 'prescriptions',
'activeThirdMenu' => 'prescriptions'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hms_temp\resources\views/modules/prescriptions/create.blade.php ENDPATH**/ ?>
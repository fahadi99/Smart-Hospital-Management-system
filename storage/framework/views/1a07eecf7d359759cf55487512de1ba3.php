<?php $page='doctors'; ?>

<?php $__env->startSection('breadcrumbs'); ?>
<div id="kt_app_toolbar" class="py-3 app-toolbar py-lg-6" data-select2-id="select2-data-kt_app_toolbar">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack"
        data-select2-id="select2-data-kt_app_toolbar_container">
        <!--begin::Page title-->
        <div class="flex-wrap page-title d-flex flex-column justify-content-center me-3">
            <!--begin::Title-->
            <h1 class="my-0 text-gray-900 page-heading d-flex fw-bold fs-3 flex-column justify-content-center">
                Update Doctor</h1>
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
                <a href="<?php echo e(route('doctors.index')); ?>">
                    <span></span>
                    <li class="breadcrumb-item text-muted text-hover-primary"><?php echo e(titleFilter($page)); ?></li>
                </a>
                <!--end::Item-->

                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>

                <a href="<?php echo e(route('doctors.edit', $obj->id)); ?>">
                    <span></span>
                    <li class="breadcrumb-item text-muted text-hover-primary">Update</li>
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
                <h3 class="mb-6 font-size-lg text-dark font-weight-bold">1. Doctor Info:</h3>

                <div class="mb-15">
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Doctor Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="doctor_name" pattern="[A-Za-z\s]+" class="form-control"
                                placeholder="Enter doctor name" value="<?php echo e($obj->doctor_name); ?>" />
                            
                            <div>
                                <?php $__errorArgs = ['doctor_name'];
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
                            <input type="email" name="email" class="form-control" placeholder="Enter email"
                                value="<?php echo e($obj->email); ?>" />
                            
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
                        <label class="text-right col-lg-3 col-form-label">Doctor Specialization:</label>
                        <div class="col-lg-6">
                            <input type="text" name="doctor_specialization" class="form-control"
                                placeholder="Enter doctor specialization" value="<?php echo e($obj->doctor_specialization); ?>" />
                            
                            <div>
                                <?php $__errorArgs = ['doctor_specialization'];
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
                        <label class="text-right col-lg-3 col-form-label">Qualification:</label>
                        <div class="col-lg-6">
                            <input type="text" name="qualification" class="form-control"
                                placeholder="Enter doctor qualification" value="<?php echo e($obj->qualification); ?>" />
                            
                            <div>
                                <?php $__errorArgs = ['qualification'];
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
                            <input type="text" name="doctor_address" class="form-control"
                                placeholder="Enter doctor address" value="<?php echo e($obj->doctor_address); ?>" />
                            
                            <div>
                                <?php $__errorArgs = ['doctor_address'];
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
                        <label class="text-right col-lg-3 col-form-label">Department:</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="department_id" data-live-search="true" id="deviceSelect">
                                <option selected disabled> <?php echo e(__('Select Department')); ?></option>

                                <?php if(isset($departments)): ?>
                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($department->id); ?>" <?php if($obj->department_id === $department->id): ?>
                                    selected
                                    <?php endif; ?>> <?php echo e($department->name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </select>
                            <div>
                                <?php $__errorArgs = ['department_id'];
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
                        <label class="text-right col-lg-3 col-form-label">Image:</label>
                        <div class="col-lg-6">
                            <input type="file" name="doctor_image" class="form-control" />
                            <div>
                                <?php $__errorArgs = ['doctor_image'];
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

                    <?php
                    if (file_exists($obj->doctor_image)) {
                    $doctor_image = $obj->doctor_image;
                    } else {
                    $doctor_image = getAssetsURLs('media/avatars/300-1.jpg');
                    }
                    ?>

                    <?php if($doctor_image): ?>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Current Doctor Image:</label>
                        <div class="col-lg-6">
                            <img height="100px" width="100px" src="<?php if(isset($doctor_image)): ?><?php echo e(url($doctor_image)); ?><?php endif; ?>"
                                alt="">
                        </div>
                    </div>
                    <br>
                    <?php endif; ?>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Status:</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="status" data-live-search="true" id="deviceSelect">
                                <option selected disabled> <?php echo e(__('Select Status')); ?></option>

                                <option value="1" <?php if($obj->status==1): ?> selected <?php endif; ?> > Active </option>
                                <option value="0" <?php if($obj->status==0): ?> selected <?php endif; ?> > In Active </option>

                            </select>
                            <div>
                                <?php $__errorArgs = ['status'];
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

<?php echo $__env->make('layouts.master',['activeMenu' => 'doctors_management', 'activeSubMenu' => 'doctors', 'activeThirdMenu' =>
'doctors'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hms_temp\resources\views/modules/doctors/update.blade.php ENDPATH**/ ?>
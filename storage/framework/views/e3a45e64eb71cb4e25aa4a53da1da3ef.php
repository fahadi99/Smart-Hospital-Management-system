<?php $__env->startSection('breadcrumbs'); ?>
<div id="kt_app_toolbar" class="py-3 app-toolbar py-lg-6" data-select2-id="select2-data-kt_app_toolbar">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack" data-select2-id="select2-data-kt_app_toolbar_container">
        <!--begin::Page title-->
        <div class="flex-wrap page-title d-flex flex-column justify-content-center me-3">
            <!--begin::Title-->
            <h1 class="my-0 text-gray-900 page-heading d-flex fw-bold fs-3 flex-column justify-content-center">Users List</h1>
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
                <li class="breadcrumb-item text-muted">User Management</li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Users</li>
                <!--end::Item-->

                <li class="breadcrumb-item">
                    <span class="bg-gray-500 bullet w-5px h-2px"></span>
                </li>

                <li class="breadcrumb-item text-muted">Create</li>
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
        <form class="form" action="<?php echo e(route('users.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <h3 class="mb-6 font-size-lg text-dark font-weight-bold">1. User Info:</h3>
                <div class="mb-15">
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Full Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="name" class="form-control" placeholder="Enter full name"/>
                            
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Email address:</label>
                        <div class="col-lg-6">
                            <input type="email" name="email" class="form-control" placeholder="Enter email"/>
                            
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Phone:</label>
                        <div class="col-lg-6">
                            <input type="text" name="phone" class="form-control" placeholder="Enter phone"/>
                            
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Password:</label>
                        <div class="col-lg-6">
                            <input type="password" name="password" class="form-control" placeholder="Enter password"/>
                            
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Role</label>
                        <div class="col-lg-6">
                            <select
                            class="form-control"
                            name="role_id" data-live-search="true"
                            id="deviceSelect">
                            <option selected disabled> <?php echo e(__('Select Role')); ?></option>

                                <?php if(isset($roles)): ?>
                                 <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($role->id); ?>"> <?php echo e($role->name); ?> </option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                        </select>
                        </div>
                    </div>
                    <br>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Image</label>
                        <div class="col-lg-6">
                            <input type="file" name="image" class="form-control"/>
                            
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-9"></div>
                    <div class="col-lg-3 text-end">
                        <button type="submit" class="mr-2 btn btn-sm btn-primary">Submit</button>
                        <a href="<?php echo e(route('users.index')); ?>" class="btn btn-sm btn-secondary">Cancel</a>
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

<?php echo $__env->make('layouts.master',['activeMenu' => 'users_management', 'activeSubMenu' => 'users', 'activeThirdMenu' => 'users'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hms_temp\resources\views/modules/users/create.blade.php ENDPATH**/ ?>
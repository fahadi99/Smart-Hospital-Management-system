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
                <span class="text-gray-900 fw-bold">Create</span>
                
            </h3>
            <div class="card-toolbar">
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <form class="form" action="<?php echo e(route('users.update',$user->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>

            <div class="card-body">
                <h3 class="mb-6 font-size-lg text-dark font-weight-bold">1. User Info:</h3>
                <div class="mb-15">
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Full Name:</label>
                        <div class="col-lg-6">
                            <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>" placeholder="Enter full name"/>
                            
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Email address:</label>
                        <div class="col-lg-6">
                            <input type="email" name="email" class="form-control" value="<?php echo e($user->email); ?>" placeholder="Enter email"/>
                            
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Phone:</label>
                        <div class="col-lg-6">
                            <input type="text" name="phone" value="<?php echo e($user->phone); ?>" class="form-control" placeholder="Enter phone"/>
                            
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Update Password:</label>
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
                                 <option value="<?php echo e($role->id); ?>" <?php if($user->role_id==$role->id): ?> selected <?php endif; ?> > <?php echo e($role->name); ?> </option>
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
                    <br>

                    <?php
                    if (file_exists($user->image)) {
                      $image = $user->image;
                    } else {
                      $image = getAssetsURLs('media/avatars/300-1.jpg');
                    }
                    ?>

                    <?php if($image): ?>
                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Current Image</label>
                        <div class="col-lg-6">
                        <img height="100px" width="100px" src="<?php if(isset($image)): ?><?php echo e(url($image)); ?><?php endif; ?>" alt="">
                        </div>
                    </div>
                    <br>
                    <?php endif; ?>

                    <div class="form-group row">
                        <label class="text-right col-lg-3 col-form-label">Status</label>
                        <div class="col-lg-6">
                            <select
                            class="form-control"
                            name="status" data-live-search="true"
                            id="deviceSelect">
                            <option selected disabled> <?php echo e(__('Select Status')); ?></option>


                                 <option value="1" <?php if($user->status==1): ?> selected <?php endif; ?> > Active </option>
                                 <option value="0" <?php if($user->status==0): ?> selected <?php endif; ?> > In Active </option>


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

<?php echo $__env->make('layouts.master',['activeMenu' => 'users_management', 'activeSubMenu' => 'users', 'activeThirdMenu' => 'users'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hms_temp\resources\views/modules/users/update.blade.php ENDPATH**/ ?>


<?php if(session()->has('info')): ?>
<div class="msg">
    <!--begin::Alert-->
    <div class="p-5 alert alert-info d-flex align-items-center">
        <!--begin::Icon-->
        <i class="ki-duotone ki-shield-tick fs-2hx text-info me-4"><span class="path1"></span><span
                class="path2"></span></i>
        <!--end::Icon-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            
            <!--end::Title-->
            <!--begin::Content-->
            <span> <?php echo e(session()->get('info')); ?></span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Alert-->
</div>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
<div class="msg">
    <!--begin::Alert-->
    <div class="p-5 alert alert-warning d-flex align-items-center">
        <!--begin::Icon-->
        <i class="ki-duotone ki-shield-tick fs-2hx text-warning me-4"><span class="path1"></span><span
                class="path2"></span></i>
        <!--end::Icon-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            
            <!--end::Title-->
            <!--begin::Content-->
            <span> <?php echo e(session()->get('warning')); ?></span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Alert-->
</div>
<?php endif; ?>

<?php if(session()->has('success')): ?>
<div class="msg">
    <!--begin::Alert-->
    <div class="p-5 alert alert-success d-flex align-items-center">
        <!--begin::Icon-->
        <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span class="path1"></span><span
                class="path2"></span></i>
        <!--end::Icon-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            
            <!--end::Title-->
            <!--begin::Content-->
            <span> <?php echo e(session()->get('success')); ?></span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Alert-->
</div>
<?php endif; ?>



<?php if(session()->has('error')): ?>
<div class="msg">
    <!--begin::Alert-->
    <div class="p-5 alert alert-danger d-flex align-items-center">
        <!--begin::Icon-->
        <i class="ki-duotone ki-shield-tick fs-2hx text-danger me-4"><span class="path1"></span><span
                class="path2"></span></i>
        <!--end::Icon-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            
            <!--end::Title-->
            <!--begin::Content-->
            <span> <?php echo e(session()->get('error')); ?>.</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Alert-->
</div>
<?php endif; ?>




<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="msg">
    <!--begin::Alert-->
    <div class="p-5 alert alert-danger d-flex align-items-center">
        <!--begin::Icon-->
        <i class="ki-duotone ki-shield-tick fs-2hx text-danger me-4"><span class="path1"></span><span
                class="path2"></span></i>
        <!--end::Icon-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            
            <!--end::Title-->
            <!--begin::Content-->
            <span><?php echo e($error); ?>.</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Alert-->
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<script>
    setTimeout(function() {
    $('.msg').fadeOut('fast');
    }, 2000);
</script><?php /**PATH D:\hms_temp\resources\views/include/messages.blade.php ENDPATH**/ ?>
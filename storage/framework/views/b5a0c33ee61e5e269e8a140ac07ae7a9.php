<div class="mb-5 form-group row bg-search">
    <div class="col-lg-4">
        <input type="text" id="q" name="user_name"
            class="mb-3 ajax_call_trigger form-control form-control-solid mb-lg-0" placeholder="Search Doctor"
            value="<?php echo e($search['q'] ?? ''); ?>">
    </div>

    <div class="col-lg-3">
        <select id="status" class="form-select ajax_call_trigger form-select-solid" data-kt-select2="true"
            data-placeholder="Select Status" data-allow-clear="false">
            <option selected disabled> <?php echo e(__('Select Status')); ?></option>
            <option value="2" <?php echo e(!isset($search['status']) || $search['status']==2); ?>>All</option>
            <option value="1" <?php echo e(isset($search['status']) && $search['status']==1); ?>>Active</option>
            <option value="0" <?php echo e(isset($search['status']) && $search['status']==0); ?>>Inactive</option>
        </select>
    </div>

    <div class="col-lg-3">
        <select id="department" name="department" class="form-select ajax_call_trigger form-select-solid"
            data-kt-select2="true" data-placeholder="Select Department" data-allow-clear="true">
            <option value="">All Departments</option>
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($department->id); ?>" <?php echo e((isset($search['department']) &&
                $search['department']==$department->id) ? 'selected="selected"' : ''); ?>>
                <?php echo e($department->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="col-lg-2 mobile-space">
        <div class="d-flex justify-content-end">
            <button type="button" id="normal_reset"
                class="btn btn-sm btn-light btn-active-light-primary me-2">Reset</button>
            <button type="button" id="normal_search" class="btn btn-sm btn-primary">Search</button>
        </div>
    </div>
</div><?php /**PATH D:\hms_temp\resources\views/modules/doctors/include/search_partial.blade.php ENDPATH**/ ?>
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
                <?php echo e(titleFilter($page)); ?> List</h1>
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
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="gap-2 d-flex align-items-center gap-lg-3" data-select2-id="select2-data-122-cw9r">
            <!--begin::Filter menu-->
            
            <!--end::Filter menu-->
            <!--begin::Secondary button-->
            <!--end::Secondary button-->
            <!--begin::Primary button-->
            <!--end::Primary button-->

            <a href="<?php echo e(route($page.'.create')); ?>">
                <button type="button" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_add_permission">
                    <i class="ki-duotone ki-plus-square fs-3">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>Add Doctor</button></a>
        </div>


        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('modules.'.$page.'.include.search_partial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="ajx_result" id="ajax_result">
                <?php echo $__env->make('modules.'.$page.'.include.list_partial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>
    </div>
</div>

<?php echo $__env->make('modules.'.$page.'.modals.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(getAssetsURLs('js/custom/search_partial.js')); ?>"></script>
<script src="<?php echo e(getAssetsURLs('js/custom/helper_scripts.js')); ?>"></script>
<script>
    $(document).ready(function(){

$(document).on('click', '.delete-<?php echo e($page); ?>', function(){
    $('#kt_modal_delete_<?php echo e($page); ?>_submit').attr('href', $(this).attr('href'));
    $('#kt_modal_delete_<?php echo e($page); ?>').modal('show');
    return false;
});

$(document).on('click', '#kt_modal_delete_<?php echo e($page); ?>_close', function(){
    $('#kt_modal_delete_<?php echo e($page); ?>').modal('hide');
    return false;
});

$(document).on('click', '#kt_modal_delete_<?php echo e($page); ?>_cancel', function(){
    $('#kt_modal_delete_<?php echo e($page); ?>').modal('hide');
    return false;
});


$(document).on('click', '#kt_modal_delete_<?php echo e($page); ?>_submit', function(event){
    event.preventDefault();
    getURL = $(this).attr('href');
    $.ajax({
        url: getURL,
        method: 'delete',
        success: function(result){
            $('#kt_modal_delete_<?php echo e($page); ?>').modal('hide');
            show_message('success', result.message);
            setTimeout(function() {
                window.location.href = SITEURL+"/<?php echo e($page); ?>";
            }, 3000);

        },
    });
});
$(document).ready(function(){
    $('.ajax_call_trigger').on('change', function() {
        performSearch();
    });

    $('#normal_reset').on('click', function() {
        $('#q').val('');
        $('#status').val('2').trigger('change');
        $('#department').val('').trigger('change');
    });

    $('#normal_search').on('click', function() {
        performSearch();
    });

    function performSearch() {
        let q = $('#q').val();
        let status = $('#status').val();
        let department = $('#department').val();

        $.ajax({
            url: '<?php echo e(route("doctors.index")); ?>',
            method: 'GET',
            data: {q: q, status: status, department: department},
            success: function(response) {
                if (response.status == 200) {
                    $('#ajax_result').html(response.data);
                }
            },
            error: function(xhr) {
                console.log('Error:', xhr);
            }
        });
    }
});


});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master',['activeMenu' => 'doctors_management', 'activeSubMenu' => 'doctors', 'activeThirdMenu' =>
'doctors'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\hms_temp\resources\views/modules/doctors/index.blade.php ENDPATH**/ ?>
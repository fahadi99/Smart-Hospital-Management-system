<!DOCTYPE html>
<html lang="en"
<?php if(isset($preferences) && $preferences['preference']['theme'] === "light"): ?>
data-bs-theme-mode="light"
<?php endif; ?>
<?php if(isset($preferences) && $preferences['preference']['theme'] === "dark"): ?>
data-bs-theme-mode="dark"
<?php endif; ?>
>
	<!--begin::Head-->
	<head>
        <title>HMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="icon" type="image/png" href="<?php echo e(asset('assets\media\logos\logo_without_background_1.png')); ?>" >

		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="<?php echo e(getAssetsURLs('plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(getAssetsURLs('plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo e(getAssetsURLs('plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(getAssetsURLs('css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
        <?php echo $__env->yieldContent('styles'); ?>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body"

        <?php if(isset($preferences['preference']['layout'])): ?>
            <?php if($preferences['preference']['layout'] == 'dark_sidebar'): ?>
            data-kt-app-layout="dark-sidebar"
            data-kt-app-sidebar-enabled="true"
            data-kt-app-sidebar-fixed="true"
            data-kt-app-sidebar-hoverable="true"
            data-kt-app-sidebar-push-header="true"
            data-kt-app-sidebar-push-toolbar="true"
            data-kt-app-sidebar-push-footer="true"
            data-kt-app-toolbar-enabled="true"
            <?php endif; ?>

            <?php if($preferences['preference']['layout'] == 'dark_header'): ?>
            data-kt-app-layout="dark-header"
            data-kt-app-header-fixed="true"
            data-kt-app-toolbar-enabled="true"
            <?php endif; ?>

            <?php if($preferences['preference']['layout'] == 'light_header'): ?>
            data-kt-app-layout="light-header"
            data-kt-app-header-fixed="true"
            data-kt-app-toolbar-enabled="true"
            <?php endif; ?>

            <?php if($preferences['preference']['layout'] == 'light_sidebar'): ?>
            data-kt-app-layout="light-sidebar"
            data-kt-app-sidebar-enabled="true"
            data-kt-app-sidebar-fixed="true"
            data-kt-app-sidebar-hoverable="true"
            data-kt-app-sidebar-push-header="true"
            data-kt-app-sidebar-push-toolbar="true"
            data-kt-app-sidebar-push-footer="true"
            data-kt-app-toolbar-enabled="true"
            <?php endif; ?>
        <?php endif; ?>
        class="app-default" >
		<!--begin::Theme mode setup on page load-->
		<!--end::Theme mode setup on page load-->
        <?php echo $__env->make('layouts.include.theme_setup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if(isset($preferences['preference']['layout'])): ?>
            <?php if($preferences['preference']['layout'] == 'dark_sidebar'): ?>
               <?php echo $__env->make('layouts.include.vertical_app_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($preferences['preference']['layout'] == 'dark_header'): ?>
                <?php echo $__env->make('layouts.include.horizontal_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($preferences['preference']['layout'] == 'light_header'): ?>
               <?php echo $__env->make('layouts.include.horizontal_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($preferences['preference']['layout'] == 'light_sidebar'): ?>
                <?php echo $__env->make('layouts.include.vertical_app_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        <?php endif; ?>


        <script>var hostUrl = "assets/";</script>
		<script src="<?php echo e(getAssetsURLs('plugins/global/plugins.bundle.js')); ?>"></script>
		<script src="<?php echo e(getAssetsURLs('js/scripts.bundle.js')); ?>"></script>
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		
		<script src="<?php echo e(getAssetsURLs('plugins/custom/datatables/datatables.bundle.js')); ?>"></script>

		<script src="<?php echo e(getAssetsURLs('js/widgets.bundle.js')); ?>"></script>
		<script src="<?php echo e(getAssetsURLs('js/custom/widgets.js')); ?>"></script>
		<script src="<?php echo e(getAssetsURLs('js/custom/apps/chat/chat.js')); ?>"></script>
		<script src="<?php echo e(getAssetsURLs('js/custom/utilities/modals/upgrade-plan.js')); ?>"></script>
		<script src="<?php echo e(getAssetsURLs('js/custom/utilities/modals/create-app.js')); ?>"></script>
		<script src="<?php echo e(getAssetsURLs('js/custom/utilities/modals/new-target.js')); ?>"></script>
		<script src="<?php echo e(getAssetsURLs('js/custom/utilities/modals/users-search.js')); ?>"></script>
        <script src="<?php echo e(getAssetsURLs('plugins/custom/tinymce/tinymce.bundle.js')); ?>"></script>
        <?php echo $__env->yieldContent('scripts'); ?>
        <script>

            var SITEURL = '<?php echo e(URL::to('')); ?>';
                $(document).ready( function () {
                    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('body').on('click', '#addLayoutOutOptions', function (event) {
                    event.preventDefault();
                    var form_data = new FormData(document.getElementById("addLayoutBuilderForm"));
                    $.ajax({
                            data: form_data,
                            url: "<?php echo e(route('user_preferences.change')); ?>",
                            type: "POST",
                            dataType: 'json',
                            cache:false,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                if(data.status === 200){
                                   var message = data.message
                                   Swal.fire("Added!", message, "success");
                                    setTimeout(function () {
                                        location.reload(true);
                                    }, 1000);
                                }
                            if(data.status === 400){
                                var error = data.message
                                var array = $.map(error, function(value, index) {  return [value]; });
                                let list = '';
                                for (var i = 0; i < array.length; i++)
                                list += array[i] + '\n <br>';
                                Swal.fire("Error!",list, "error");
                                $("#domains-grid").load(location.href + " #domains-grid>*", "");
                            }
                            if(data.status === 409){
                                var error = data.message
                                Swal.fire("Error!", error, "error");
                            }
                            },
                            error: function (data) {
                                console.log('Error:', data.responseText);
                                //var error = data.responseText
                                //Swal.fire("Error!", error, "error");
                            }
                    });
                        //Ajax code ends here
                });

            });
        </script>

	</body>
	<!--end::Body-->
</html>
<?php /**PATH D:\hms_temp\resources\views/layouts/master.blade.php ENDPATH**/ ?>
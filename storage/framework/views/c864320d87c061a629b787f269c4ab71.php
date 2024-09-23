<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>HMS</title>
        <link rel="icon" type="image/png" href="<?php echo e(asset('assets\media\logos\logo_without_background_1.png')); ?>" >


		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo e(getAssetsURLs('plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(getAssetsURLs('css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />

    </head>
	<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">

        

        	<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('assets/media/auth/bg10.jpeg'); } [data-bs-theme="dark"] body { background-image: url('assets/media/auth/bg10-dark.jpeg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid">
					<!--begin::Content-->
					<div class="p-10 pb-0 d-flex flex-column flex-center pb-lg-10 w-100">
						<!--begin::Image-->
						<img class="mx-auto mb-10 theme-light-show mw-100 w-150px w-lg-300px mb-lg-20" src="src/media/auth/agency.png" alt="" />
						<img class="mx-auto mb-10 theme-dark-show mw-100 w-150px w-lg-300px mb-lg-20" src="src/media/auth/agency-dark.png" alt="" />
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="p-12 d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end">
					<!--begin::Wrapper-->
					<div class="p-10 bg-body d-flex flex-column flex-center rounded-4 w-md-600px">
						<!--begin::Content-->
						<div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
							<!--begin::Wrapper-->
							<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                                <?php echo e($slot); ?>

							</div>
							<!--end::Wrapper-->
							<!--begin::Footer-->
							<div class="d-flex flex-stack">
								<!--begin::Languages-->
								<div class="me-10">
								</div>
								<!--end::Languages-->
								<!--begin::Links-->
								<div class="gap-5 d-flex fw-semibold text-primary fs-base">
									<a href="" target="_blank">Terms & Conditions</a>
									<a href="" target="_blank">Privacy Policy</a>
									
								</div>
								<!--end::Links-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->



       


        <script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo e(getAssetsURLs('plugins/global/plugins.bundle.js')); ?>"></script>
		<script src="<?php echo e(getAssetsURLs('js/scripts.bundle.js')); ?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo e(getAssetsURLs('js/custom/authentication/sign-in/general.js')); ?>"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->

    </body>
</html>
<?php /**PATH D:\hms_temp\resources\views/layouts/guest.blade.php ENDPATH**/ ?>
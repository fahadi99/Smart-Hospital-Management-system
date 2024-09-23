      	<!--begin::App-->
          <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                <!--begin::Header-->
                <?php echo $__env->make('layouts.include.vertical.vertical_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--end::Header-->
                        <!--end::Logo-->
                        <?php echo $__env->make('layouts.include.vertical.vertical_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!--begin::sidebar menu-->
                        <!--end::sidebar menu-->
                        <!--begin::Footer-->
                        
                        <!--end::Footer-->
                    <!--end::Sidebar-->
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Toolbar-->
                            <?php echo $__env->yieldContent('breadcrumbs'); ?>
                            <!--end::Toolbar-->
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-fluid">
                                    <div id="kt_app_content_container" class="app-container container-xxl">
                                      <?php echo $__env->yieldContent('content'); ?>
                                     </div>
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                        <!--begin::Footer-->
                        <?php echo $__env->make('layouts.include.vertical.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->
        <?php echo $__env->make('layouts.include.layout_builder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH D:\hms_temp\resources\views/layouts/include/vertical_app_content.blade.php ENDPATH**/ ?>
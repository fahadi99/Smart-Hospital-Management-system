<!--begin::Header-->
<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
    data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}"
    data-kt-sticky-animation="false">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">
        <!--begin::Sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
        </div>
        <!--end::Sidebar mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="<?php echo e(route('dashboard')); ?>" class="d-lg-none">
                <img alt="Logo" src="<?php echo e(asset('src/media/logos/logo_without_background_1.png')); ?>" class="h-40px" />
                <?php echo e(session('web_name')); ?>

            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="flex-shrink-0 app-navbar">
                <!--begin::Search-->
                
                <!--end::Search-->
                <!--begin::Activities-->

                <!--end::Activities-->
                <!--begin::Notifications-->
                
                <!--end::Notifications-->
                <!--begin::Chat-->

                <!--end::Chat-->
                <!--begin::My apps links-->

                <!--end::My apps links-->
                <!--begin::Theme mode-->

                <!--end::Theme mode-->

                <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <?php if(auth()->user()->image): ?>
                        <img src="<?php echo e(asset(auth()->user()->image)); ?>" class="rounded-3" alt="user">
                        <?php else: ?>
                        <img src="<?php echo e(asset('assets/media/avatars/300-3.jpg')); ?>" class="rounded-3" alt="user">
                        <?php endif; ?>
                        
                    </div>
                    <!--begin::User account menu-->
                    <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px"
                        data-kt-menu="true" style="">
                        <!--begin::Menu item-->
                        <div class="px-3 menu-item">
                            <div class="px-3 menu-content d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <?php if(auth()->user()->image): ?>
                                    <img src="<?php echo e(asset(auth()->user()->image)); ?>" class="rounded-3" alt="user">
                                    <?php else: ?>
                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg">
                                    <?php endif; ?>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5"><?php if(auth()->guard()->check()): ?>
                                        <?php echo e(auth()->user()->name); ?>

                                        <?php endif; ?></div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7"><?php if(auth()->guard()->check()): ?>
                                        <?php echo e(auth()->user()->email); ?>

                                        <?php endif; ?></a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="my-2 separator"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="px-5 menu-item">
                            <a href="<?php echo e(route('logout_redirect')); ?>" class="px-5 menu-link">Log Out</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>

                <!--begin::User menu-->
                
                    <!--begin::Menu wrapper-->
                    
                    <!--begin::User account menu-->
                    
                        <!--begin::Menu item-->
                        
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        
                        <!--end::Menu item-->
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        
                            <!--begin::Menu-->
                            
                            <!--end::Menu-->
                            
                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--begin::Menu item-->
                        
                        <!--end::Menu item-->

                        

                        <!--end::Menu item-->
                        
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                    
                <!--end::User menu-->
                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                        id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-element-4 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!--end::Header menu toggle-->
                <!--begin::Aside toggle-->
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header--><?php /**PATH D:\hms_temp\resources\views/layouts/include/vertical/vertical_header.blade.php ENDPATH**/ ?>
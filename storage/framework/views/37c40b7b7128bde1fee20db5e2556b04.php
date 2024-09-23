<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
        data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <!--begin::Logo-->
        <div class="app-sidebar-logo" id="kt_app_sidebar_logo">
            <!--begin::Logo image-->
            
                
                
            <!--end::Logo image-->
            <!--begin::Sidebar toggle-->
            <!--begin::Minimized sidebar setup:
if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
}
-->
            <div class="d-flex justify-content-center align-items-center mx-auto mt-1">
                <a href="<?php echo e(route('dashboard')); ?>"><img src="<?php echo e(asset('src/media/logos/logo_without_background_1.png')); ?>"
                        class="h-70px w-auto" alt="logo"></a>
            </div>
            <div id="kt_app_sidebar_toggle"
                class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
                data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                data-kt-toggle-name="app-sidebar-minimize">
                <i class="rotate-180 ki-duotone ki-black-left-line fs-3">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            <!--end::Sidebar toggle-->
        </div>
        <div class="overflow-hidden app-sidebar-menu flex-column-fluid">
            <!--begin::Menu wrapper-->
            <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                <!--begin::Scroll wrapper-->
                <div id="kt_app_sidebar_menu_scroll" class="mx-3 my-5 scroll-y" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                    data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                    data-kt-scroll-save-state="true">

                    <!--begin::Menu Dashboard-->
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                        id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item <?php if(isset($activeMenu)): ?>
                <?php echo e($activeMenu == 'performance' ? ' menu-accordion hover show' : ' menu-accordion'); ?>

                <?php else: ?>
                menu-accordion
                <?php endif; ?>">
                            <!--begin:Menu link-->
                            <span class="menu-link <?php if(isset($activeSubMenu)): ?>
                            <?php echo e($activeSubMenu == 'dashboard' ? 'active' : ''); ?>

                            <?php endif; ?>">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-element-11 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Performance</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion <?php if(isset($activeMenu)): ?>
                    <?php echo e($activeMenu == 'performance' ? 'show' : ''); ?>

                    <?php endif; ?>" <?php if(isset($activeMenu)): ?> <?php echo e($activeMenu=='performance' ? 'style=""'
                                : 'style="display: none; overflow: hidden;"'); ?> <?php endif; ?>>
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                            <?php echo e($activeSubMenu == 'dashboard' ? 'active' : ''); ?>

                            <?php endif; ?>" href="<?php echo e(route('dashboard')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                

                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->

                    </div>
                    <!--end::Menu Dashboard-->


                    <!--begin::Menu Users-->
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                        id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item <?php if(isset($activeMenu)): ?>
                    <?php echo e($activeMenu == 'users_management' ? ' menu-accordion hover show' : ' menu-accordion'); ?>

                    <?php else: ?>
                    menu-accordion
                    <?php endif; ?>">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-address-book fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Users</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion <?php if(isset($activeMenu)): ?>
                        <?php echo e($activeMenu == 'users_management' ? 'show' : ''); ?>

                        <?php endif; ?>" <?php if(isset($activeMenu)): ?> <?php echo e($activeMenu=='users_management' ? 'style=""'
                                : 'style="display: none; overflow: hidden;"'); ?> <?php endif; ?>>

                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                                <?php echo e($activeSubMenu == 'users' ? 'active' : ''); ?>

                                <?php endif; ?>" href="<?php echo e(route('users.index')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">List</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu Users-->

                    <!--begin::Menu Doctors-->
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                        id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item <?php if(isset($activeMenu)): ?>
                    <?php echo e($activeMenu == 'doctors_management' ? ' menu-accordion hover show' : ' menu-accordion'); ?>

                    <?php else: ?>
                    menu-accordion
                    <?php endif; ?>">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-pulse fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Doctors</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion <?php if(isset($activeMenu)): ?>
                        <?php echo e($activeMenu == 'doctors_management' ? 'show' : ''); ?>

                        <?php endif; ?>" <?php if(isset($activeMenu)): ?> <?php echo e($activeMenu=='doctors_management' ? 'style=""'
                                : 'style="display: none; overflow: hidden;"'); ?> <?php endif; ?>>

                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                                <?php echo e($activeSubMenu == 'doctors' ? 'active' : ''); ?>

                                <?php endif; ?>" href="<?php echo e(route('doctors.index')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">List</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu Doctors-->


                    <!--begin::Menu Patients-->
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                        id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item <?php if(isset($activeMenu)): ?>
                    <?php echo e($activeMenu == 'patients_management' ? ' menu-accordion hover show' : ' menu-accordion'); ?>

                    <?php else: ?>
                    menu-accordion
                    <?php endif; ?>">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-capsule fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Patients</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion <?php if(isset($activeMenu)): ?>
                        <?php echo e($activeMenu == 'patients_management' ? 'show' : ''); ?>

                        <?php endif; ?>" <?php if(isset($activeMenu)): ?> <?php echo e($activeMenu=='patients_management' ? 'style=""'
                                : 'style="display: none; overflow: hidden;"'); ?> <?php endif; ?>>

                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                                <?php echo e($activeSubMenu == 'patients' ? 'active' : ''); ?>

                                <?php endif; ?>" href="<?php echo e(route('patients.index')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">List</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu Patients-->

                    <!--begin::Menu prescriptions-->
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                        id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item <?php if(isset($activeMenu)): ?>
                    <?php echo e($activeMenu == 'prescriptions_management' ? ' menu-accordion hover show' : ' menu-accordion'); ?>

                    <?php else: ?>
                    menu-accordion
                    <?php endif; ?>">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-menu fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Prescriptions</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion <?php if(isset($activeMenu)): ?>
                        <?php echo e($activeMenu == 'prescriptions_management' ? 'show' : ''); ?>

                        <?php endif; ?>" <?php if(isset($activeMenu)): ?> <?php echo e($activeMenu=='prescriptions_management' ? 'style=""'
                                : 'style="display: none; overflow: hidden;"'); ?> <?php endif; ?>>

                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                                <?php echo e($activeSubMenu == 'prescriptions' ? 'active' : ''); ?>

                                <?php endif; ?>" href="<?php echo e(route('prescriptions.index')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">List</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu prescriptions-->



                    <!--begin::Menu Doctors-->
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                        id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item <?php if(isset($activeMenu)): ?>
                    <?php echo e($activeMenu == 'invoices_management' ? ' menu-accordion hover show' : ' menu-accordion'); ?>

                    <?php else: ?>
                    menu-accordion
                    <?php endif; ?>">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-pulse fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Invoices</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion <?php if(isset($activeMenu)): ?>
                        <?php echo e($activeMenu == 'invoices_management' ? 'show' : ''); ?>

                        <?php endif; ?>" <?php if(isset($activeMenu)): ?> <?php echo e($activeMenu=='invoices_management' ? 'style=""'
                                : 'style="display: none; overflow: hidden;"'); ?> <?php endif; ?>>

                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                                <?php echo e($activeSubMenu == 'invoices' ? 'active' : ''); ?>

                                <?php endif; ?>" href="<?php echo e(route('invoices.index')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">List</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu Doctors-->


                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                    id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item <?php if(isset($activeMenu)): ?>
                <?php echo e($activeMenu == 'invoices_management' ? ' menu-accordion hover show' : ' menu-accordion'); ?>

                <?php else: ?>
                menu-accordion
                <?php endif; ?>">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-pulse fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </span>
                            <span class="menu-title">Reports</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-accordion <?php if(isset($activeMenu)): ?>
                    <?php echo e($activeMenu == 'reports_management' ? 'show' : ''); ?>

                    <?php endif; ?>" <?php if(isset($activeMenu)): ?> <?php echo e($activeMenu=='reports_management' ? 'style=""'
                            : 'style="display: none; overflow: hidden;"'); ?> <?php endif; ?>>

                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                            <?php echo e($activeSubMenu == 'reports' ? 'active' : ''); ?>

                            <?php endif; ?>" href="<?php echo e(route('reports.create')); ?>">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Generate</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->

                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                </div>



                    <!--begin::Menu settings-->
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                        id="kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item <?php if(isset($activeMenu)): ?>
     <?php echo e($activeMenu == 'settings_management' ? 'menu-accordion hover show' : 'menu-accordion'); ?>

     <?php else: ?>
     menu-accordion
     <?php endif; ?>">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-menu fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Settings</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion <?php if(isset($activeMenu)): ?>
         <?php echo e($activeMenu == 'settings_management' ? 'show' : ''); ?>

         <?php endif; ?>" <?php if(isset($activeMenu)): ?> <?php echo e($activeMenu=='settings_management' ? 'style=""'
                                : 'style="display: none; overflow: hidden;"'); ?> <?php endif; ?>>


                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                            <?php echo e($activeSubMenu == 'service_categories' ? 'active' : ''); ?>

                            <?php endif; ?>" href="<?php echo e(route('service_categories.index')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Service Categories</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>


                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                        <?php echo e($activeSubMenu == 'roles' ? 'active' : ''); ?>

                        <?php endif; ?>" href="<?php echo e(route('roles.index')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Roles</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>


                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                    <?php echo e($activeSubMenu == 'departments' ? 'active' : ''); ?>

                    <?php endif; ?>" href="<?php echo e(route('departments.index')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Departments</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>


                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link <?php if(isset($activeSubMenu)): ?>
                    <?php echo e($activeSubMenu == 'invoice_payment_statuses' ? 'active' : ''); ?>

                    <?php endif; ?>" href="<?php echo e(route('invoice_payment_statuses.index')); ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Payment Status</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>

                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu settings-->


                    <!--begin::Menu Brands-->
                    
                    <!--end::Menu Brands-->

                    <!--begin::Menu Settings-->
                    <!--end::Menu Settings -->


                    <!--begin::Menu Surveys-->
                    
                    <!--end::Menu Surveys -->

                    <!--begin::Menu Products-->
                    
                    <!--end::Menu Points Products -->



                </div>
                <!--end::Scroll wrapper-->
            </div>
            <!--end::Menu wrapper-->
        </div>
    </div>
<?php /**PATH D:\hms_temp\resources\views/layouts/include/vertical/vertical_sidebar.blade.php ENDPATH**/ ?>
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
            <a href="{{route('dashboard')}}" class="d-lg-none">
                <img alt="Logo" src="{{ asset('src/media/logos/logo_without_background_1.png') }}" class="h-40px" />
                {{ session('web_name') }}
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
                {{--
                <!--begin::Menu-->
                <div class="px-2 my-5 menu menu-rounded menu-column menu-lg-row my-lg-0 align-items-stretch fw-semibold px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">Dashboards</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="p-0 menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-850px">
                            <!--begin:Dashboards menu-->
                            <div class="overflow-hidden menu-state-bg menu-extended overflow-lg-visible"
                                data-kt-menu-dismiss="true">
                                <!--begin:Row-->
                                <div class="row">
                                    <!--begin:Col-->
                                    <div class="px-3 py-3 mb-3 col-lg-8 mb-lg-0 py-lg-6 px-lg-6">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-6">
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="index.html" class="menu-link active">
                                                        <span
                                                            class="flex-shrink-0 rounded menu-custom-icon d-flex flex-center w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-element-11 text-primary fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="text-gray-800 fs-6 fw-bold">Default</span>
                                                            <span class="fs-7 fw-semibold text-muted">Reports &
                                                                statistics</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-6">
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/ecommerce.html" class="menu-link">
                                                        <span
                                                            class="flex-shrink-0 rounded menu-custom-icon d-flex flex-center w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-basket text-danger fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="text-gray-800 fs-6 fw-bold">eCommerce</span>
                                                            <span class="fs-7 fw-semibold text-muted">Sales
                                                                reports</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-6">
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/projects.html" class="menu-link">
                                                        <span
                                                            class="flex-shrink-0 rounded menu-custom-icon d-flex flex-center w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-abstract-44 text-info fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="text-gray-800 fs-6 fw-bold">Projects</span>
                                                            <span class="fs-7 fw-semibold text-muted">Tasts, graphs &
                                                                charts</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-6">
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/online-courses.html" class="menu-link">
                                                        <span
                                                            class="flex-shrink-0 rounded menu-custom-icon d-flex flex-center w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-color-swatch text-success fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                                <span class="path5"></span>
                                                                <span class="path6"></span>
                                                                <span class="path7"></span>
                                                                <span class="path8"></span>
                                                                <span class="path9"></span>
                                                                <span class="path10"></span>
                                                                <span class="path11"></span>
                                                                <span class="path12"></span>
                                                                <span class="path13"></span>
                                                                <span class="path14"></span>
                                                                <span class="path15"></span>
                                                                <span class="path16"></span>
                                                                <span class="path17"></span>
                                                                <span class="path18"></span>
                                                                <span class="path19"></span>
                                                                <span class="path20"></span>
                                                                <span class="path21"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="text-gray-800 fs-6 fw-bold">Online
                                                                Courses</span>
                                                            <span class="fs-7 fw-semibold text-muted">Student
                                                                progress</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-6">
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/marketing.html" class="menu-link">
                                                        <span
                                                            class="flex-shrink-0 rounded menu-custom-icon d-flex flex-center w-40px h-40px me-3">
                                                            <i class="text-gray-900 ki-duotone ki-chart-simple fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="text-gray-800 fs-6 fw-bold">Marketing</span>
                                                            <span class="fs-7 fw-semibold text-muted">Campaings &
                                                                conversions</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-6">
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/bidding.html" class="menu-link">
                                                        <span
                                                            class="flex-shrink-0 rounded menu-custom-icon d-flex flex-center w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-switch text-warning fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="text-gray-800 fs-6 fw-bold">Bidding</span>
                                                            <span class="fs-7 fw-semibold text-muted">Campaings &
                                                                conversions</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-6">
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/pos.html" class="menu-link">
                                                        <span
                                                            class="flex-shrink-0 rounded menu-custom-icon d-flex flex-center w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-abstract-42 text-danger fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="text-gray-800 fs-6 fw-bold">POS System</span>
                                                            <span class="fs-7 fw-semibold text-muted">Campaings &
                                                                conversions</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-6">
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/call-center.html" class="menu-link">
                                                        <span
                                                            class="flex-shrink-0 rounded menu-custom-icon d-flex flex-center w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-call text-primary fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                                <span class="path5"></span>
                                                                <span class="path6"></span>
                                                                <span class="path7"></span>
                                                                <span class="path8"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="text-gray-800 fs-6 fw-bold">Call Center</span>
                                                            <span class="fs-7 fw-semibold text-muted">Campaings &
                                                                conversions</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                        <div class="mx-5 my-5 separator separator-dashed"></div>
                                        <!--begin:Landing-->
                                        <div class="flex-wrap gap-2 mx-5 d-flex flex-stack flex-lg-nowrap">
                                            <div class="d-flex flex-column me-5">
                                                <div class="text-gray-800 fs-6 fw-bold">Landing Page Template</div>
                                                <div class="fs-7 fw-semibold text-muted">Onpe page landing template with
                                                    pricing & others</div>
                                            </div>
                                            <a href="landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
                                        </div>
                                        <!--end:Landing-->
                                    </div>
                                    <!--end:Col-->
                                    <!--begin:Col-->
                                    <div class="px-3 py-3 menu-more bg-light col-lg-4 py-lg-6 px-lg-6 rounded-end">
                                        <!--begin:Heading-->
                                        <h4 class="mt-3 mb-3 text-gray-800 fs-6 fs-lg-4 fw-bold ms-4">More Dashboards
                                        </h4>
                                        <!--end:Heading-->
                                        <!--begin:Menu item-->
                                        <div class="p-0 m-0 menu-item">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/logistics.html" class="py-2 menu-link">
                                                <span class="menu-title">Logistics</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="p-0 m-0 menu-item">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/website-analytics.html" class="py-2 menu-link">
                                                <span class="menu-title">Website Analytics</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="p-0 m-0 menu-item">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/finance-performance.html" class="py-2 menu-link">
                                                <span class="menu-title">Finance Performance</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="p-0 m-0 menu-item">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/store-analytics.html" class="py-2 menu-link">
                                                <span class="menu-title">Store Analytics</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="p-0 m-0 menu-item">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/social.html" class="py-2 menu-link">
                                                <span class="menu-title">Social</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="p-0 m-0 menu-item">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/delivery.html" class="py-2 menu-link">
                                                <span class="menu-title">Delivery</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="p-0 m-0 menu-item">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/crypto.html" class="py-2 menu-link">
                                                <span class="menu-title">Crypto</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="p-0 m-0 menu-item">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/school.html" class="py-2 menu-link">
                                                <span class="menu-title">School</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="p-0 m-0 menu-item">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/podcast.html" class="py-2 menu-link">
                                                <span class="menu-title">Podcast</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                </div>
                                <!--end:Row-->
                            </div>
                            <!--end:Dashboards menu-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">Pages</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="p-0 menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown">
                            <!--begin:Pages menu-->
                            <div class="px-4 menu-active-bg px-lg-0">
                                <!--begin:Tabs nav-->
                                <div class="overflow-auto d-flex w-100">
                                    <ul
                                        class="p-0 nav nav-stretch nav-line-tabs fw-bold fs-6 p-lg-10 flex-nowrap flex-grow-1">
                                        <!--begin:Nav item-->
                                        <li class="nav-item mx-lg-1">
                                            <a class="py-3 nav-link py-lg-6 active text-active-primary" href="#"
                                                data-bs-toggle="tab"
                                                data-bs-target="#kt_app_header_menu_pages_pages">General</a>
                                        </li>
                                        <!--end:Nav item-->
                                        <!--begin:Nav item-->
                                        <li class="nav-item mx-lg-1">
                                            <a class="py-3 nav-link py-lg-6 text-active-primary" href="#"
                                                data-bs-toggle="tab"
                                                data-bs-target="#kt_app_header_menu_pages_account">Account</a>
                                        </li>
                                        <!--end:Nav item-->
                                        <!--begin:Nav item-->
                                        <li class="nav-item mx-lg-1">
                                            <a class="py-3 nav-link py-lg-6 text-active-primary" href="#"
                                                data-bs-toggle="tab"
                                                data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
                                        </li>
                                        <!--end:Nav item-->
                                        <!--begin:Nav item-->
                                        <li class="nav-item mx-lg-1">
                                            <a class="py-3 nav-link py-lg-6 text-active-primary" href="#"
                                                data-bs-toggle="tab"
                                                data-bs-target="#kt_app_header_menu_pages_utilities">Utilities</a>
                                        </li>
                                        <!--end:Nav item-->
                                        <!--begin:Nav item-->
                                        <li class="nav-item mx-lg-1">
                                            <a class="py-3 nav-link py-lg-6 text-active-primary" href="#"
                                                data-bs-toggle="tab"
                                                data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
                                        </li>
                                        <!--end:Nav item-->
                                    </ul>
                                </div>
                                <!--end:Tabs nav-->
                                <!--begin:Tab content-->
                                <div class="py-4 tab-content py-lg-8 px-lg-7">
                                    <!--begin:Tab pane-->
                                    <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-8">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="mb-6 col-lg-3 mb-lg-0">
                                                        <!--begin:Menu heading-->
                                                        <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">User Profile</h4>
                                                        <!--end:Menu heading-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/overview.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Overview</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/projects.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Projects</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/campaigns.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Campaigns</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/documents.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Documents</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/followers.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Followers</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/activity.html"
                                                                class="menu-link">
                                                                <span class="menu-title">Activity</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="mb-6 col-lg-3 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Corporate</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/about.html" class="menu-link">
                                                                    <span class="menu-title">About</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/team.html" class="menu-link">
                                                                    <span class="menu-title">Our Team</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/contact.html" class="menu-link">
                                                                    <span class="menu-title">Contact Us</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/licenses.html" class="menu-link">
                                                                    <span class="menu-title">Licenses</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/sitemap.html" class="menu-link">
                                                                    <span class="menu-title">Sitemap</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Careers</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/careers/list.html" class="menu-link">
                                                                    <span class="menu-title">Careers List</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/careers/apply.html" class="menu-link">
                                                                    <span class="menu-title">Careers Apply</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="mb-6 col-lg-3 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">FAQ</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/faq/classic.html" class="menu-link">
                                                                    <span class="menu-title">FAQ Classic</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/faq/extended.html" class="menu-link">
                                                                    <span class="menu-title">FAQ Extended</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Blog</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/blog/home.html" class="menu-link">
                                                                    <span class="menu-title">Blog Home</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/blog/post.html" class="menu-link">
                                                                    <span class="menu-title">Blog Post</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Pricing</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/pricing.html" class="menu-link">
                                                                    <span class="menu-title">Column Pricing</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/pricing/table.html" class="menu-link">
                                                                    <span class="menu-title">Table Pricing</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="mb-6 col-lg-3 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Social</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/social/feeds.html" class="menu-link">
                                                                    <span class="menu-title">Feeds</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/social/activity.html" class="menu-link">
                                                                    <span class="menu-title">Activty</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/social/followers.html" class="menu-link">
                                                                    <span class="menu-title">Followers</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/social/settings.html" class="menu-link">
                                                                    <span class="menu-title">Settings</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-4">
                                                <img src="assets/media/stock/600x600/img-82.jpg" class="rounded mw-100"
                                                    alt="" />
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Tab pane-->
                                    <!--begin:Tab pane-->
                                    <div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="mb-6 col-lg-5 mb-lg-0">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6">
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="account/overview.html" class="menu-link">
                                                                <span class="menu-title">Overview</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="account/settings.html" class="menu-link">
                                                                <span class="menu-title">Settings</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="account/security.html" class="menu-link">
                                                                <span class="menu-title">Security</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="account/activity.html" class="menu-link">
                                                                <span class="menu-title">Activity</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="account/billing.html" class="menu-link">
                                                                <span class="menu-title">Billing</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6">
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="account/statements.html" class="menu-link">
                                                                <span class="menu-title">Statements</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="account/referrals.html" class="menu-link">
                                                                <span class="menu-title">Referrals</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="account/api-keys.html" class="menu-link">
                                                                <span class="menu-title">API Keys</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="p-0 m-0 menu-item">
                                                            <!--begin:Menu link-->
                                                            <a href="account/logs.html" class="menu-link">
                                                                <span class="menu-title">Logs</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-7">
                                                <img src="assets/media/stock/900x600/46.jpg" class="rounded mw-100"
                                                    alt="" />
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Tab pane-->
                                    <!--begin:Tab pane-->
                                    <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_authentication">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="mb-6 col-lg-3 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-6">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Corporate Layout</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/corporate/sign-in.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Sign-In</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/corporate/sign-up.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Sign-Up</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/corporate/two-factor.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/corporate/reset-password.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Reset Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/corporate/new-password.html"
                                                            class="menu-link">
                                                            <span class="menu-title">New Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                                <!--begin:Menu section-->
                                                <div class="mb-0">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Overlay Layout</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/overlay/sign-in.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Sign-In</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/overlay/sign-up.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Sign-Up</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/overlay/two-factor.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/overlay/reset-password.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Reset Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/overlay/new-password.html"
                                                            class="menu-link">
                                                            <span class="menu-title">New Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-6 col-lg-3 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-6">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Creative Layout</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/creative/sign-in.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Sign-in</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/creative/sign-up.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Sign-up</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/creative/two-factor.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/creative/reset-password.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Reset Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/creative/new-password.html"
                                                            class="menu-link">
                                                            <span class="menu-title">New Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                                <!--begin:Menu section-->
                                                <div class="mb-6">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Fancy Layout</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/fancy/sign-in.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Sign-In</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/fancy/sign-up.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Sign-Up</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/fancy/two-factor.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/fancy/reset-password.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Reset Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/fancy/new-password.html"
                                                            class="menu-link">
                                                            <span class="menu-title">New Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-6 col-lg-3 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-0">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">General</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/extended/multi-steps-sign-up.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Multi-Steps Sign-Up</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/welcome.html" class="menu-link">
                                                            <span class="menu-title">Welcome Message</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/verify-email.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Verify Email</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/coming-soon.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Coming Soon</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/password-confirmation.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Password Confirmation</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/account-deactivated.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Account Deactivation</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/error-404.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Error 404</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/error-500.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Error 500</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-6 col-lg-3 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-0">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Email Templates</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/welcome-message.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Welcome Message</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/reset-password.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Reset Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/subscription-confirmed.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Subscription Confirmed</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/card-declined.html"
                                                            class="menu-link">
                                                            <span class="menu-title">Credit Card Declined</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/promo-1.html" class="menu-link">
                                                            <span class="menu-title">Promo 1</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/promo-2.html" class="menu-link">
                                                            <span class="menu-title">Promo 2</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="p-0 m-0 menu-item">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/promo-3.html" class="menu-link">
                                                            <span class="menu-title">Promo 3</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Tab pane-->
                                    <!--begin:Tab pane-->
                                    <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_utilities">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-7">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="mb-6 col-lg-4 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">General Modals
                                                            </h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/general/invite-friends.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Invite Friends</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/general/view-users.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">View Users</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/general/select-users.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Select Users</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/general/upgrade-plan.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Upgrade Plan</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/general/share-earn.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Share & Earn</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/forms/new-target.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">New Target</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/forms/new-card.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">New Card</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/forms/new-address.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">New Address</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/forms/create-api-key.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Create API Key</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/forms/bidding.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Bidding</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="mb-6 col-lg-4 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Advanced Modals
                                                            </h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/create-app.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Create App</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/create-campaign.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Create Campaign</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/create-account.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Create Business Acc</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/create-project.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Create Project</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/top-up-wallet.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Top Up Wallet</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/offer-a-deal.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Offer a Deal</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/two-factor-authentication.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Two Factor Auth</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Search</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/search/horizontal.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Horizontal</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/search/vertical.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Vertical</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/search/users.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Users</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/search/select-location.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Select Location</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="mb-6 col-lg-4 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="mb-3 fs-6 fs-lg-4 fw-bold ms-4">Wizards</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/horizontal.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Horizontal</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/vertical.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Vertical</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/two-factor-authentication.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Two Factor Auth</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/create-app.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Create App</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/create-campaign.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Create Campaign</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/create-account.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Create Account</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/create-project.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Create Project</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/top-up-wallet.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Top Up Wallet</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="p-0 m-0 menu-item">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/offer-a-deal.html"
                                                                    class="menu-link">
                                                                    <span class="menu-title">Offer a Deal</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-5 pe-lg-5">
                                                <img src="assets/media/stock/600x600/img-84.jpg" class="rounded mw-100"
                                                    alt="" />
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Tab pane-->
                                    <!--begin:Tab pane-->
                                    <div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="mb-6 col-lg-4 mb-lg-0">
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/lists.html" class="menu-link">
                                                        <span class="menu-title">Lists</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/statistics.html" class="menu-link">
                                                        <span class="menu-title">Statistics</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/charts.html" class="menu-link">
                                                        <span class="menu-title">Charts</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/mixed.html" class="menu-link">
                                                        <span class="menu-title">Mixed</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/tables.html" class="menu-link">
                                                        <span class="menu-title">Tables</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/feeds.html" class="menu-link">
                                                        <span class="menu-title">Feeds</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-8">
                                                <img src="assets/media/stock/900x600/44.jpg" class="rounded mw-100"
                                                    alt="" />
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Tab pane-->
                                </div>
                                <!--end:Tab content-->
                            </div>
                            <!--end:Pages menu-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">Apps</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div
                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-rocket fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Projects</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/projects/list.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">My Projects</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/projects/project.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Project</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/projects/targets.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Targets</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/projects/budget.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Budget</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/projects/users.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Users</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/projects/files.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Files</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/projects/activity.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Activity</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/projects/settings.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-handcart fs-2"></i>
                                    </span>
                                    <span class="menu-title">eCommerce</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Catalog</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/catalog/products.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Products</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/catalog/categories.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Categories</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/catalog/add-product.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Add Product</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/catalog/edit-product.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Edit Product</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/catalog/add-category.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Add Category</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/catalog/edit-category.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Edit Category</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                        class="menu-item menu-accordion menu-sub-indention">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Sales</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/sales/listing.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Orders Listing</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/sales/details.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Order Details</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/sales/add-order.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Add Order</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/sales/edit-order.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Edit Order</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                        class="menu-item menu-accordion menu-sub-indention">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Customers</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/customers/listing.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Customers Listing</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/customers/details.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Customers Details</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                        class="menu-item menu-accordion menu-sub-indention">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Reports</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/reports/view.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Products Viewed</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/reports/sales.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Sales</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/reports/returns.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Returns</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/reports/customer-orders.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Customer Orders</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/ecommerce/reports/shipping.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Shipping</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/ecommerce/settings.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-chart fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Support Center</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/support-center/overview.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Overview</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Tickets</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/support-center/tickets/list.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Ticket List</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/support-center/tickets/view.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Ticket View</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Tutorials</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/support-center/tutorials/list.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Tutorials List</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/support-center/tutorials/post.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Tutorials Post</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/support-center/faq.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">FAQ</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/support-center/licenses.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Licenses</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/support-center/contact.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-shield-tick fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">User Management</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Users</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/user-management/users/list.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Users List</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/user-management/users/view.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">View User</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Roles</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/user-management/roles/list.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Roles List</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/user-management/roles/view.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">View Roles</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/user-management/permissions.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Permissions</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-phone fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Contacts</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/contacts/getting-started.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/contacts/add-contact.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Add Contact</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/contacts/edit-contact.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Edit Contact</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/contacts/view-contact.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Contact</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-basket fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Subscriptions</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/subscriptions/getting-started.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/subscriptions/list.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Subscription List</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/subscriptions/add.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Add Subscription</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/subscriptions/view.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Subscription</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-briefcase fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Customers</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/customers/getting-started.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/customers/list.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Customer Listing</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/customers/view.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Customer Details</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-credit-cart fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Invoice Management</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Profile</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/invoices/view/invoice-1.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Invoice 1</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/invoices/view/invoice-2.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Invoice 2</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="apps/invoices/view/invoice-3.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Invoice 3</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/invoices/create.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Create Invoice</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-file-added fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">File Manager</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/file-manager/folders.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Folders</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/file-manager/files.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Files</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/file-manager/blank.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Blank Directory</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/file-manager/settings.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-sms fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Inbox</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/inbox/listing.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Messages</span>
                                            <span class="menu-badge">
                                                <span class="badge badge-light-success">3</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/inbox/compose.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Compose</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/inbox/reply.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View & Reply</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-message-text-2 fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Chat</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/chat/private.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Private Chat</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/chat/group.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Group Chat</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="apps/chat/drawer.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Drawer Chat</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="apps/calendar.html">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-calendar-8 fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Calendar</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">Layouts</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div
                            class="p-0 menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-900px w-xxl-950px">
                            <!--begin:Dashboards menu-->
                            <div class="px-3 pt-1 pb-3 menu-active-bg py-lg-6 px-lg-6" data-kt-menu-dismiss="true">
                                <!--begin:Row-->
                                <div class="row">
                                    <!--begin:Col-->
                                    <div class="col-lg-7">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-4">
                                                <!--begin:Heading-->
                                                <h4 class="mt-3 mb-3 text-gray-800 fs-6 fs-lg-4 fw-bold ms-4">Layouts
                                                </h4>
                                                <!--end:Heading-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="layouts/light-sidebar.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Light Sidebar</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="layouts/dark-sidebar.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Dark Sidebar</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="layouts/light-header.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Light Header</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="layouts/dark-header.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Dark Header</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-4">
                                                <!--begin:Heading-->
                                                <h4 class="mt-3 mb-3 text-gray-800 fs-6 fs-lg-4 fw-bold ms-4">Toolbars
                                                </h4>
                                                <!--end:Heading-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="toolbars/classic.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Classic</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="toolbars/saas.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">SaaS</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="toolbars/accounting.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Accounting</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="toolbars/extended.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Extended</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="toolbars/reports.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Reports</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="mb-3 col-lg-4">
                                                <!--begin:Heading-->
                                                <h4 class="mt-3 mb-3 text-gray-800 fs-6 fs-lg-4 fw-bold ms-4">Asides
                                                </h4>
                                                <!--end:Heading-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="asides/aside-1.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Filters</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="asides/aside-2.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Segments</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="asides/aside-3.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Shipment History</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="asides/aside-4.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Courier Activity</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="p-0 m-0 menu-item">
                                                    <!--begin:Menu link-->
                                                    <a href="asides/aside-5.html" class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span
                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                        </span>
                                                        <span class="menu-title">Calendar</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                        <div class="mt-2 mb-6 separator separator-dashed mx-lg-5"></div>
                                        <!--begin:Layout Builder-->
                                        <div
                                            class="flex-wrap gap-2 mb-5 d-flex flex-stack flex-lg-nowrap mb-lg-0 mx-lg-5">
                                            <div class="d-flex flex-column me-5">
                                                <div class="text-gray-800 fs-6 fw-bold">Layout Builder</div>
                                                <div class="fs-7 fw-semibold text-muted">Customize, preview and export
                                                </div>
                                            </div>
                                            <a href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html"
                                                class="btn btn-sm btn-primary fw-bold">Try Builder</a>
                                        </div>
                                        <!--end:Layout Builder-->
                                    </div>
                                    <!--end:Col-->
                                    <!--begin:Col-->
                                    <div class="mb-3 col-lg-5 py-lg-3 pe-lg-8 d-flex align-items-center">
                                        <img src="assets/media/stock/900x600/45.jpg" class="rounded mw-100" alt="" />
                                    </div>
                                    <!--end:Col-->
                                </div>
                                <!--end:Row-->
                            </div>
                            <!--end:Dashboards menu-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">Help</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div
                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                    target="_blank"
                                    title="Check out over 200 in-house components, plugins and ready for use solutions"
                                    data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                    data-bs-placement="right">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-rocket fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Components</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs"
                                    target="_blank" title="Check out the complete documentation"
                                    data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                    data-bs-placement="right">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-abstract-26 fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Documentation</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link"
                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                    target="_blank">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-code fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </span>
                                    <span class="menu-title">Changelog v8.2.5</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end::Menu--> --}}
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="flex-shrink-0 app-navbar">
                <!--begin::Search-->
                {{-- <div class="app-navbar-item ms-1 ms-md-4">
                    <!--begin::Drawer toggle-->
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
                        data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-dismiss="click" data-bs-trigger="hover" id="kt_app_layout_builder_toggle">
                        <i class="ki-duotone ki-setting-4 fs-4 me-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                    </div>
                    <!--end::Drawer toggle-->
                </div> --}}
                <!--end::Search-->
                <!--begin::Activities-->

                <!--end::Activities-->
                <!--begin::Notifications-->
                {{-- <div class="app-navbar-item ms-1 ms-md-4" wire:poll.30s>
                    @livewire('notifications.notifications.pane-notification')
                </div> --}}
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
                        @if (auth()->user()->image)
                        <img src="{{ asset(auth()->user()->image) }}" class="rounded-3" alt="user">
                        @else
                        <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="rounded-3" alt="user">
                        @endif
                        {{-- @if (file_exists(auth()->user()->image))
                        <img src="@auth {{ auth()->user()->image }} @endauth" class="rounded-3" alt="user">
                        @else
                        <img src="assets/media/avatars/300-3.jpg" class="rounded-3" alt="user">
                        @endif --}}
                    </div>
                    <!--begin::User account menu-->
                    <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px"
                        data-kt-menu="true" style="">
                        <!--begin::Menu item-->
                        <div class="px-3 menu-item">
                            <div class="px-3 menu-content d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    @if (auth()->user()->image)
                                    <img src="{{ asset(auth()->user()->image) }}" class="rounded-3" alt="user">
                                    @else
                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg">
                                    @endif
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">@auth
                                        {{ auth()->user()->name }}
                                        @endauth</div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">@auth
                                        {{ auth()->user()->email }}
                                        @endauth</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="my-2 separator"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        {{-- <div class="px-5 menu-item">
                            <a href="{{route('profile.edit')}}" class="px-5 menu-link">My Profile</a>
                        </div> --}}
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
                            <a href="{{route('logout_redirect')}}" class="px-5 menu-link">Log Out</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>

                <!--begin::User menu-->
                {{-- <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle"> --}}
                    <!--begin::Menu wrapper-->
                    {{-- <div class="cursor-pointer symbol symbol-35px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        @auth
                        @php
                        $image = auth()->user()->image;
                        @endphp
                        @if($image)
                        <img src="{{AvatarImagePath($image)}}" alt="image" class="rounded-3">
                        @endif
                        @endauth
                    </div> --}}
                    <!--begin::User account menu-->
                    {{-- <div
                        class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px"
                        data-kt-menu="true"> --}}
                        <!--begin::Menu item-->
                        {{-- <div class="px-3 menu-item">
                            <div class="px-3 menu-content d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    @auth
                                    @if($image)
                                    <img src="{{url($image)}}" alt="image" class="rounded-3">
                                    @endif
                                    @endauth
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">@auth
                                        {{ auth()->user()->name }}
                                        @endauth
                                    </div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">@auth
                                        {{ auth()->user()->email }}
                                        @endauth</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div> --}}
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        {{-- <div class="my-2 separator"></div> --}}
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        {{-- <div class="px-5 menu-item">
                            <a href="{{route('profile.edit')}}" class="px-5 menu-link">My Profile</a>
                        </div> --}}
                        <!--end::Menu item-->
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        {{-- <div class="my-2 separator"></div> --}}
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        {{-- <div class="px-5 menu-item" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="px-5 menu-link">
                                <span class="menu-title position-relative">Mode
                                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                        <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                            <span class="path9"></span>
                                            <span class="path10"></span>
                                        </i>
                                        <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span></span>
                            </a> --}}
                            <!--begin::Menu-->
                            {{-- <div
                                class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold fs-base w-150px"
                                data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="px-3 my-0 menu-item">
                                    <a href="#" class="px-3 py-2 menu-link" data-kt-element="mode"
                                        data-kt-value="light">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-night-day fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Light</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="px-3 my-0 menu-item">
                                    <a href="#" class="px-3 py-2 menu-link" data-kt-element="mode" data-kt-value="dark">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-moon fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">Dark</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="px-3 my-0 menu-item">
                                    <a href="#" class="px-3 py-2 menu-link" data-kt-element="mode"
                                        data-kt-value="system">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-duotone ki-screen fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">System</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div> --}}
                            <!--end::Menu-->
                            {{--
                        </div> --}}
                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--begin::Menu item-->
                        {{-- <div class="px-5 menu-item">
                            <a href="{{route('logout_redirect')}}" class="px-5 menu-link">Log Out</a>
                        </div> --}}
                        <!--end::Menu item-->

                        {{--
                        <a class="px-5 menu-link" style="margin-left: 50px">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </a> --}}

                        <!--end::Menu item-->
                        {{--
                    </div> --}}
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                    {{--
                </div> --}}
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
<!--end::Header-->
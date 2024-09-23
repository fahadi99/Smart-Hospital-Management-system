      	<!--begin::App-->
          <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                <!--begin::Header-->
                @include('layouts.include.vertical.vertical_header')
                <!--end::Header-->
                        <!--end::Logo-->
                        @include('layouts.include.vertical.vertical_sidebar')
                        <!--begin::sidebar menu-->
                        <!--end::sidebar menu-->
                        <!--begin::Footer-->
                        {{-- <div class="px-6 pt-2 pb-6 app-sidebar-footer flex-column-auto" id="kt_app_sidebar_footer">
                            <a href="https://preview.keenthemes.com/html/metronic/docs" class="px-0 overflow-hidden btn btn-flex flex-center btn-custom btn-primary text-nowrap h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
                                <span class="btn-label">Docs & Components</span>
                                <i class="m-0 ki-duotone ki-document btn-icon fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </div> --}}
                        <!--end::Footer-->
                    <!--end::Sidebar-->
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Toolbar-->
                            @yield('breadcrumbs')
                            <!--end::Toolbar-->
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-fluid">
                                    <div id="kt_app_content_container" class="app-container container-xxl">
                                      @yield('content')
                                     </div>
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                        <!--begin::Footer-->
                        @include('layouts.include.vertical.footer')
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->
        @include('layouts.include.layout_builder')


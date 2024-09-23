<!DOCTYPE html>
<html lang="en"
@if(isset($preferences) && $preferences['preference']['theme'] === "light")
data-bs-theme-mode="light"
@endif
@if(isset($preferences) && $preferences['preference']['theme'] === "dark")
data-bs-theme-mode="dark"
@endif
>
	<!--begin::Head-->
	<head>
        <title>HMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{ asset('assets\media\logos\logo_without_background_1.png') }}" >

		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{getAssetsURLs('plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{getAssetsURLs('plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{getAssetsURLs('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{getAssetsURLs('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        @yield('styles')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body"

        @if(isset($preferences['preference']['layout']))
            @if($preferences['preference']['layout'] == 'dark_sidebar')
            data-kt-app-layout="dark-sidebar"
            data-kt-app-sidebar-enabled="true"
            data-kt-app-sidebar-fixed="true"
            data-kt-app-sidebar-hoverable="true"
            data-kt-app-sidebar-push-header="true"
            data-kt-app-sidebar-push-toolbar="true"
            data-kt-app-sidebar-push-footer="true"
            data-kt-app-toolbar-enabled="true"
            @endif

            @if($preferences['preference']['layout'] == 'dark_header')
            data-kt-app-layout="dark-header"
            data-kt-app-header-fixed="true"
            data-kt-app-toolbar-enabled="true"
            @endif

            @if($preferences['preference']['layout'] == 'light_header')
            data-kt-app-layout="light-header"
            data-kt-app-header-fixed="true"
            data-kt-app-toolbar-enabled="true"
            @endif

            @if($preferences['preference']['layout'] == 'light_sidebar')
            data-kt-app-layout="light-sidebar"
            data-kt-app-sidebar-enabled="true"
            data-kt-app-sidebar-fixed="true"
            data-kt-app-sidebar-hoverable="true"
            data-kt-app-sidebar-push-header="true"
            data-kt-app-sidebar-push-toolbar="true"
            data-kt-app-sidebar-push-footer="true"
            data-kt-app-toolbar-enabled="true"
            @endif
        @endif
        class="app-default" >
		<!--begin::Theme mode setup on page load-->
		<!--end::Theme mode setup on page load-->
        @include('layouts.include.theme_setup')

        @if(isset($preferences['preference']['layout']))
            @if($preferences['preference']['layout'] == 'dark_sidebar')
               @include('layouts.include.vertical_app_content')
            @endif

            @if($preferences['preference']['layout'] == 'dark_header')
                @include('layouts.include.horizontal_app')
            @endif

            @if($preferences['preference']['layout'] == 'light_header')
               @include('layouts.include.horizontal_app')
            @endif

            @if($preferences['preference']['layout'] == 'light_sidebar')
                @include('layouts.include.vertical_app_content')
            @endif
        @endif


        <script>var hostUrl = "assets/";</script>
		<script src="{{getAssetsURLs('plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{getAssetsURLs('js/scripts.bundle.js')}}"></script>
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		{{-- <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script> --}}
		<script src="{{getAssetsURLs('plugins/custom/datatables/datatables.bundle.js')}}"></script>

		<script src="{{getAssetsURLs('js/widgets.bundle.js')}}"></script>
		<script src="{{getAssetsURLs('js/custom/widgets.js')}}"></script>
		<script src="{{getAssetsURLs('js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{getAssetsURLs('js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{getAssetsURLs('js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{getAssetsURLs('js/custom/utilities/modals/new-target.js')}}"></script>
		<script src="{{getAssetsURLs('js/custom/utilities/modals/users-search.js')}}"></script>
        <script src="{{getAssetsURLs('plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
        @yield('scripts')
        <script>

            var SITEURL = '{{URL::to('')}}';
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
                            url: "{{ route('user_preferences.change')}}",
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

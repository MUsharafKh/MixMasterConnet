<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
	<head><base href=""/>
		<title>Djs Songs Request</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{url('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('backend/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{url('backend/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('backend/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
    <!--begin::Body-->
    <body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
        <!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
        </script>
		<!--end::Theme mode setup on page load-->
        <!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                <!--begin::Header-->
                @include('admin-backend.layouts.partials.header')
                <!--end::Header-->
                <!--begin::Wrapper-->
                @include('admin-backend.layouts.partials.wrapper')
                <!--end::Wrapper-->
            </div>
			<!--end::Page-->
        </div>
		<!--end::App-->
        <!--begin::Drawers-->
        <!--begin::Activities drawer-->
        @include('admin-backend.layouts.partials.activities-drawer')
        <!--end::Activities drawer-->
        <!--begin::Chat drawer-->
        @include('admin-backend.layouts.partials.chat-drawer')
        <!--end::Chat drawer-->
        <!--end::Drawers-->
        <!--begin::Scrolltop-->
        @include('admin-backend.layouts.partials.scrolltop')
        <!--end::Scrolltop-->
        <!--begin::Modals-->
        @yield('modals')
        <!--end::Modals-->
        <!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{url('backend/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{url('backend/assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{url('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="{{url('backend/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{url('backend/assets/js/widgets.bundle.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/widgets.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/utilities/modals/create-campaign.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/utilities/modals/offer-a-deal/type.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/utilities/modals/offer-a-deal/details.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/utilities/modals/offer-a-deal/finance.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/utilities/modals/offer-a-deal/complete.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/utilities/modals/offer-a-deal/main.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{url('backend/assets/js/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
    </body>
	<!--end::Body-->
</html>
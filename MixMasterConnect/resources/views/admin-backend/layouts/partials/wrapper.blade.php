<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar">
        <!--begin::Toolbar container-->
        {{-- @include('admin-backend.layouts.partials.toolbar') --}}
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Sidebar-->
    @include('admin-backend.layouts.partials.includes.side-bar')
    <!--end::Sidebar-->
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    @yield('content')
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
    @include('admin-backend.layouts.partials.footer')
        <!--end::Footer-->
    </div>
    <!--end:::Main-->
</div>
<!--end::Wrapper-->
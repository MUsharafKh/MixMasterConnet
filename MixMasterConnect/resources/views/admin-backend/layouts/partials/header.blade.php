	<!--begin::Header-->
    <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
        <!--begin::Header container-->
        <div class="app-container container-fluid d-flex flex-stack" id="kt_app_header_container">
            <!--begin::Sidebar toggle-->
            <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
                <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
                    <i class="ki-outline ki-abstract-14 fs-2"></i>
                </div>
                <!--begin::Logo image-->
                <a href="../../demo27/dist/index.html">
                    <img alt="Logo" src="{{url('backend/assets/media/logos/default-small.svg')}}" class="h-30px theme-light-show" />
                    <img alt="Logo" src="{{url('backend/assets/media/logos/default-small-dark.svg')}}" class="h-30px theme-dark-show" />
                </a>
                <!--end::Logo image-->
            </div>
            <!--end::Sidebar toggle-->
            <!--begin::Header wrapper-->
            <div class="d-flex flex-stack flex-lg-row-fluid" id="kt_app_header_wrapper">
                <!--begin::Page title-->
                <div class="page-title gap-4 me-3 mb-5 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 mb-2">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600 fw-bold lh-1">
                            <a href="/wyse-cms" class="text-gray-700 text-hover-primary me-1">
                                <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                            </a>
                        </li>
                        <!--end::Item-->
                        @foreach($settings['bread_crumb'] as $element)
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600 fw-bold lh-1">{{$element}}</li>
                        <!--end::Item-->
                        @endforeach
                    </ul>
                    <!--end::Breadcrumb-->
                    @if(isset($settings['window_title']))
                    <!--begin::Title-->
                    <h1 class="text-gray-900 fw-bolder m-0">{{$settings['window_title']}}</h1>
                    <!--end::Title-->
                    @endif
                </div>
                <!--end::Page title-->
                @if($settings['show_new_button']==true)
                    @php
                    $string = $settings['new_btn_text'];
                    $buttonName = explode(" ", $string);
                    @endphp
                <!--begin::Action-->
                <a href="#" class="btn btn-primary d-flex flex-center h-35px h-lg-40px" data-bs-toggle="modal" data-bs-target="#{{$settings['new_btn_traget_model_id']}}" id="{{$settings['new_btn_id']}}">{{$buttonName[0]}}
                <span class="d-none d-sm-inline ps-2">{{$buttonName[1]}}</span></a>
                <!--end::Action-->
                @endif
            </div>
            <!--end::Header wrapper-->
        </div>
        <!--end::Header container-->
    </div>
    <!--end::Header-->
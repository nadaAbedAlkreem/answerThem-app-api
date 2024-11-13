

<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href="../../../">
    <title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->

    @include('dashboard.asset.css');

 </head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-column flex-column-fluid">
        <!--begin::Header-->
        <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
            <!--begin::Container-->
            @include('dashboard.components.header')
            <!--end::Container-->
            <!--begin::Container-->
            @include('dashboard.components.header_menu')

            <!--end::Container-->
        </div>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid container-xxl" id="kt_wrapper">
            <!--begin::Toolbar-->
            <div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column align-items-start me-3 gap-1">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Delivery</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Daterange-->
                    <a href="#" class="btn btn-sm btn-flex btn-light px-5 me-2" id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover" title="Select dashboard daterange">
								<span class="me-2">
									<span class="text-gray-600 fw-bold me-1" id="kt_dashboard_daterangepicker_title">Today</span>
									<span class="text-info fw-bolder" id="kt_dashboard_daterangepicker_date">Dec 31</span>
								</span>
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-4 m-0">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
									</svg>
								</span>
                        <!--end::Svg Icon-->
                    </a>
                    <!--end::Daterange-->
                    <!--begin::Filter-->
                    <div class="me-2">
                        <!--begin::Menu-->
                        <a href="#" class="btn btn-sm btn-flex btn-light" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-gray-400 me-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
									</svg>
								</span>
                            <!--end::Svg Icon-->Filter</a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf14eea2718">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf14eea2718" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Filter-->
                    <!--begin::Button-->
                    <a href="apps/ecommerce/sales/add-order" class="btn btn-sm btn-info" id="kt_toolbar_primary_button">New Shipment</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Main-->
            <div class="d-flex flex-row flex-column-fluid align-items-stretch">
                <!--begin::Content-->
                <div class="content flex-row-fluid" id="kt_content">

                    <div class="row gy-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!--begin::List widget 18-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-gray-800">Lading Companies</span>
                                        <span class="text-gray-400 mt-1 fw-bold fs-6">8k social visitors</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <ul class="nav me-n1" id="kt_chart_widget_11_tabs">
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bolder px-4 me-1" data-bs-toggle="tab" id="kt_list_widget_18_tab_1" href="#kt_list_widget_18_tab_content_1">2021</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bolder px-4 me-1 active" data-bs-toggle="tab" id="kt_list_widget_18_tab_2" href="#kt_list_widget_18_tab_content_2">Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-4">
                                    <!--begin::Tab Content-->
                                    <div class="tab-content">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_list_widget_18_tab_content_1">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstergo Ltd.</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Video Channel</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">1,578</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-success d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																		<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->4.1 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Barone LLC.</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Messanger</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">794</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-success d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																		<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->0.2 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Big Kahuna Burger</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Network</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">2,047</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-success d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																		<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->1.9 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Biffco Enterprises</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Network</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">3,458</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-success d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																		<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->8.3 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstergo Ltd.</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Community</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">579</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-success d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																		<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->2.6 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Binford Ltd.</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Media</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">2,588</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-danger d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z" fill="black" />
																		<path d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->0.4 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade show active" id="kt_list_widget_18_tab_content_2">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstergo Ltd.</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Community</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">579</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-success d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																		<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->2.6 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Binford Ltd.</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Media</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">2,588</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-danger d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z" fill="black" />
																		<path d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->0.4 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Barone LLC.</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Messanger</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">794</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-success d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																		<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->0.2 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Abstergo Ltd.</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Video Channel</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">1,578</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-success d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																		<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->4.1 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Biffco Enterprises</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Network</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">3,458</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-success d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																		<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->8.3 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed my-4"></div>
                                            <!--end::Separator-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-5">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                                    <!--end::Flag-->
                                                    <!--begin::Content-->
                                                    <div class="me-5">
                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Big Kahuna Burger</a>
                                                        <!--end::Title-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Social Network</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bolder fs-4 me-3">2,047</span>
                                                    <!--end::Number-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-success d-flex align-items-center px-2">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.5" d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z" fill="black" />
																		<path d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z" fill="black" />
																	</svg>
																</span>
                                                            <!--end::Svg Icon-->1.9 %</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Tap pane-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::List widget 18-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <!--begin::Chart widget 17-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-dark">Sales Statistics</span>
                                        <span class="text-gray-400 pt-2 fw-bold fs-6">Top Selling Products</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                <!--end::Input-->
                                                                <!--end::Label-->
                                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Chart container-->
                                    <div id="kt_charts_widget_17_chart" class="w-100 h-400px"></div>
                                    <!--end::Chart container-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 17-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Main-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-column flex-md-row align-items-center justify-content-between" id="kt_footer">
                <!--begin::Copyright-->
                <div class="order-2 order-md-1">
                    <span class="text-white opacity-75 fw-bold me-1">2021©</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-white text-hover-primary opacity-75">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-white menu-hover-primary fw-bold order-1 opacity-75">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>

 @yield('content')
 </body>

@include('dashboard.asset.js');





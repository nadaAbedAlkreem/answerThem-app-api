@extends('dashboard.layout.app')

@section('content')

<style>
    /* Change the look of the select box */
    .select2-container .select2-selection--single {
        height: 40px; /* Adjust the height */
        border-radius: 8px; /* Rounded corners */
        border: 1px solid #ccc; /* Border color */
        padding: 0 10px; /* Padding inside the box */
    }

    /* Change the arrow inside the select box */
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 34px; /* Adjust the height of the arrow */
        width: 34px; /* Adjust the width of the arrow */
    }

    /* Change the background of the dropdown list */
    .select2-dropdown {
        background-color: #f4f4f4; /* Background color */
        border-radius: 8px; /* Rounded corners */
    }

    /* Style the dropdown list when scrolling */
    .select2-container--default .select2-results > .select2-results__options {
        max-height: 200px; /* Limit the height */
        overflow-y: auto; /* Enable scrolling if there are many options */
    }

    .select2-search__field {
        width: 100%; /* Full width of the dropdown */
        padding: 8px 12px; /* Add padding for spacing */
        font-size: 14px; /* Set font size */
        border: 1px solid #ccc; /* Add border to the input field */
        border-radius: 4px; /* Rounded corners */
        background-color: #fff; /* Set background color */
    }

    /* Optional: Change border color on focus */
    .select2-search__field:focus {
        border-color: #007bff; /* Blue border when focused */
        outline: none; /* Remove default outline */
    }
    .stepper-label{
        padding:7px;
    }


</style>
    <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-column flex-column-fluid">
        <!--begin::Header-->
        <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
            <!--begin::Container-->
            <div class="header-top-container container-xxl sabi d-flex flex-grow-1 flex-stack">
                <!--begin::Header Logo-->
                <div class="d-flex align-items-center me-5">
                    <!--begin::Heaeder menu toggle-->
                    <div class="d-lg-none btn btn-icon btn-active-color-300 w-30px h-30px me-2" id="kt_header_menu_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
									</svg>
								</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Heaeder menu toggle-->
                    <!--begin::Logo-->

                </div>
                <!--end::Header Logo-->
                <!--begin::Toolbar wrapper-->
                <div class="topbar d-flex align-items-stretch flex-shrink-0" id="kt_topbar">
                    <!--begin::User-->
                    <div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
                        <!--begin::Menu wrapper-->
                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <img src="assets/media/avatars/300-1.jpg" alt="user" />
                        </div>
                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3" style ="padding:5px">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">{{auth('admin')->user()->name}}
                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"></span></div>
                                        <a  class="fw-bold text-muted text-hover-primary fs-7">{{auth('admin')->user()->email}}</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="hover">
                                <a  class="menu-link px-5">
											<span class="menu-title position-relative">{{__('setting.language')}}

                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{route('dashboard.category' , ['lang' => 'en'])}}" class="menu-link d-flex px-5  @if(app()->getLocale() == 'en') active @endif">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
												</span>{{__('setting.english')}}</a>
                                    </div>

                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{route('dashboard.category' , ['lang' => 'ar'])}}" class="menu-link d-flex px-5  @if(app()->getLocale() == 'ar') active @endif">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/saudi-arabia.svg" alt="" />
												</span>{{__('setting.arabic')}}</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="{{route('admin.logout')}}" class="menu-link px-5">{{__('setting.sign_out')}}</a>
                            </div>
                            <!--end::Menu item-->


                        </div>
                        <!--end::User account menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::User -->
                    <!--begin::Heaeder menu toggle-->
                    <!--end::Heaeder menu toggle-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            @include('dashboard.components.header')
        </div>


        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid container-xxl" id="kt_wrapper">
            <!--begin::Toolbar-->
            <div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">

                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
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
                            <!--end::Svg Icon-->{{__('setting.Filter')}}</a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf14c9caa9b">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">{{__('setting.Filter Options')}}</div>
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
                                    <label class="form-label fw-bold">{{__('setting.Status:')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" id = "level_category" data-kt-select2="true" data-placeholder="{{__('setting.Select Option')}}" data-dropdown-parent="#kt_menu_61cf14c9caa9b" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">First level categories</option>
                                            <option value="2">Level 2 Categories</option>
                                            <option value="3">Level 3 Categories</option>
                                         </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">{{__('setting.Show dependencies :')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select id="categorySelect" name="categorySelect" data-kt-select2="true" data-placeholder="{{__('setting.Select a category')}}" data-dropdown-parent="#kt_menu_61cf14c9caa9b" data-allow-clear="true" style="width: 100%"></select>
                                    </div>


                                    <!--end::Input-->
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true"
                                    >{{__('setting.Reset')}}</button>
                                    <button type="submit" id = "apply" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">
                                        {{__('setting.Apply')}}</button>
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
                    <a  class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">{{__('setting.Create')}}</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Main-->
            <div class="d-flex flex-row flex-column-fluid align-items-stretch">
                <!--begin::Content-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Inbox App - Messages -->
                    <div class="d-flex flex-column flex-lg-row">

                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                            <!--begin::Card-->
                            <div class="card">
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                                    <!--begin::Pagination-->
                                    <div class="d-flex align-items-center flex-wrap gap-2">


                                    </div>
                                    <!--end::Pagination-->
                                </div>
                                <div class="card-body p-2">
                                    <!--begin::Table-->
                                    <table class="table data-table-category table-bordered table-striped table-hover table-row-dashed fs-6 gy-5 my-0">
                                        <!--begin::Table head-->
                                        <thead >
                                        <tr>
                                            <th>{{__('setting.Actions')}}</th>
                                            <th>{{__('setting.Name')}}</th>
                                            <th>{{__('setting.Description')}}</th>
                                            <th>{{__('setting.Dependency')}}</th>
                                            <th>{{__('setting.Rating')}}</th>
                                            <th>{{__('setting.Famous gaming')}}</th>

                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>

                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Inbox App - Messages -->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Main-->

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->

<!--begin::Modals-->

<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('setting.Create Category')}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id ="dismiss_create_category" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                    <!--begin::Aside-->
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav ps-lg-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class=" w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">{{ __('setting.Details') }}</h3>
                                    <div class="stepper-desc">{{ __('setting.Name Category') }}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class=" w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">{{ __('setting.Details') }}</h3>
                                    <div class="stepper-desc">{{ __('setting.Description Category') }}</div>
                                </div>
                                <!--end::Label-->

                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class=" w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">{{ __('setting.Other Details') }}</h3>
                                    <div class="stepper-desc">{{ __('setting.Define profile picture and category affiliation') }}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class=" w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">4</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">{{ __('setting.Evaluation') }}</h3>
                                    <div class="stepper-desc">{{ __('setting.Determine category distinction') }}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class=" w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">5</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">{{ __('setting.Completed') }}</h3>
                                    <div class="stepper-desc">{{ __('setting.Review and Submit') }}</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->

                    </div>
                    <!--begin::Aside-->
                    <!--begin::Content nada-->
                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" enctype="multipart/form-data" id="kt_modal_create_app_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">{{ __('setting.Category Name Arabic') }}</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Specify your unique app name') }}"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="name_ar" placeholder="{{ __('setting.Category Name Arabic') }}" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">{{ __('setting.Category Name English') }}</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Specify your unique app name') }}"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="name_en" placeholder="{{ __('setting.Category Name English') }}" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                            </div>

                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">{{ __('setting.Category Description Arabic') }}</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Specify your unique app name') }}"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="mb-4">
                                            <textarea class="form-control form-control-lg form-control-solid rounded-3 shadow-sm" name="description_ar" rows="4" placeholder="{{ __('setting.Category Description Arabic') }}" required></textarea>
                                        </div>                                        <!--end::Input-->
                                    </div>

                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">{{ __('setting.Category Description English') }}</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Specify your unique app name') }}"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="mb-4">
                                            <textarea class="form-control form-control-lg form-control-solid rounded-3 shadow-sm" name="description_en" rows="4" placeholder="{{ __('setting.Category Description English') }}" required></textarea>
                                        </div>                                        <!--end::Input-->
                                    </div>

                                </div>
                            </div>




                            <!--end::Step 3-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span class="required">{{ __('setting.Select image') }}</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Specify your apps framework') }}"></i>
                                        </label>
                                        <!--end::Label-->
                                        <div class="row mb-5">
                                            <div class="col-lg-8">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url()"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Label-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="{{ __('setting.Change avatar') }}">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Cancel-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="{{ __('setting.Cancel avatar') }}">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="{{ __('setting.Remove avatar') }}">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                                                    <!--end::Remove-->
                                                </div>
                                                <!--end::Image input-->
                                                <!--begin::Hint-->
                                                <div class="form-text">{{ __('setting.Allowed file types') }}</div>
                                                <!--end::Hint-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <div class="mb-4">
                                        <select class="form-control form-control-lg form-control-solid form-select-sm" name="category_id" aria-label=".form-select-sm example">
                                            <option value="0-0">{{ __('setting.Not affiliated') }}</option>
                                            <optgroup label="{{ __('setting.Primary Category') }}">

                                                @if(!empty($category))
                                                    @foreach($category as $key => $item)
                                                        @if($item['level'] == 1)
                                                            <option value="{{ $item['level'] }}-{{ $item['id'] }}">
                                                                {{ $item['name'] }}
                                                                <span>  - ({{ __('setting.Category Not affiliated') }})</span>
                                                            </option>
                                                        @endif
                                                    @endforeach
                                            </optgroup>

                                            <optgroup label="{{ __('setting.Sub Category') }}">
                                                @foreach($category as $item)
                                                    @if($item['level'] == 2)
                                                        <option value="{{ $item['level'] }}-{{ $item['id'] }}">
                                                            {{ $item['name'] }}
                                                            <span> ({{ __('setting.Category belongs to') }} {{ app()->getLocale() === 'ar' ? $item['parent']['name_ar'] ?? '' : $item['parent']['name_en'] ?? '' }})</span>
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <!--begin::Step 5-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <label for="rating" class="required fs-5 fw-bold mb-2">{{ __('setting.Rating') }}:</label>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" name="rating" data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span class="required">{{ __('setting.Famous gaming') }}</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Select your app database engine') }}"></i>
                                        </label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="famous_gaming" id="famous_gaming_create" value="on">
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                        <span class="svg-icon svg-icon-3 me-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
                    <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
                </svg>
            </span>
                                        <!--end::Svg Icon-->{{ __('setting.Back') }}
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div>
                                    <button type="submit" id="submit_form" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
            <span class="indicator-label">{{ __('setting.Submit') }}
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                <span class="svg-icon svg-icon-3 ms-2 me-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </span>
                                        <span class="indicator-progress">{{ __('setting.Please wait...') }}
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">{{ __('setting.Continue') }}
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-3 ms-1 me-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                </svg>
            </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Create App-->

    <!--begin::Modal - update App-->
<div class="modal fade" id="kt_modal_update_app" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <!--بداية رأس النافذة المنبثقة-->
                <div class="modal-header">
                    <!--بداية عنوان النافذة المنبثقة-->
                    <h2>{{ __('setting.Update Category') }}</h2>
                    <!--نهاية عنوان النافذة المنبثقة-->
                    <!--بداية زر الإغلاق-->
                    <input type="hidden" id="id" class="form-control" value="" placeholder="{{ __('setting.Item ID will appear here') }}">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" id="dismiss_update_category" data-bs-dismiss="modal">
                        <!--بداية أيقونة SVG | المسار: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                                    <!--نهاية أيقونة SVG-->
                    </div>
                    <!--نهاية زر الإغلاق-->
                </div>
                <!--نهاية رأس النافذة المنبثقة-->
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_update_app_stepper">
                        <!--begin::Aside-->
                        <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <!--بداية التنقل-->
                            <div class="stepper-nav ps-lg-10">
                                <!--بداية الخطوة 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--بداية الخط-->
                                    <div class=" w-40px"></div>
                                    <!--نهاية الخط-->
                                    <!--بداية الأيقونة-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--نهاية الأيقونة-->
                                    <!--بداية التسمية-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">{{ __('setting.Details') }}</h3>
                                        <div class="stepper-desc">{{ __('setting.Name Category') }}</div>
                                    </div>
                                    <!--نهاية التسمية-->
                                </div>
                                <!--نهاية الخطوة 1-->

                                <!--بداية الخطوة 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--بداية الخط-->
                                    <div class=" w-40px"></div>
                                    <!--نهاية الخط-->
                                    <!--بداية الأيقونة-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--بداية الأيقونة-->
                                    <!--بداية التسمية-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">{{ __('setting.Details') }}</h3>
                                        <div class="stepper-desc">{{ __('setting.Description Category') }}</div>
                                    </div>
                                    <!--نهاية التسمية-->
                                </div>
                                <!--نهاية الخطوة 2-->

                                <!--بداية الخطوة 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--بداية الخط-->
                                    <div class=" w-40px"></div>
                                    <!--نهاية الخط-->
                                    <!--بداية الأيقونة-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--بداية الأيقونة-->
                                    <!--بداية التسمية-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">{{ __('setting.Other Details') }}</h3>
                                        <div class="stepper-desc">{{ __('setting.Define the profile picture and the category affiliation') }}</div>
                                    </div>
                                    <!--نهاية التسمية-->
                                </div>
                                <!--نهاية الخطوة 3-->

                                <!--بداية الخطوة 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--بداية الخط-->
                                    <div class=" w-40px"></div>
                                    <!--نهاية الخط-->
                                    <!--بداية الأيقونة-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--نهاية الأيقونة-->
                                    <!--بداية التسمية-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">{{ __('setting.Evaluation') }}</h3>
                                        <div class="stepper-desc">{{ __('setting.Determine the category distinction') }}</div>
                                    </div>
                                    <!--نهاية التسمية-->
                                </div>
                                <!--نهاية الخطوة 4-->

                                <!--بداية الخطوة 5-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--بداية الخط-->
                                    <div class=" w-40px"></div>
                                    <!--نهاية الخط-->
                                    <!--بداية الأيقونة-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--نهاية الأيقونة-->
                                    <!--بداية التسمية-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">{{ __('setting.Completed') }}</h3>
                                        <div class="stepper-desc">{{ __('setting.Review and Submit') }}</div>
                                    </div>
                                    <!--نهاية التسمية-->
                                </div>
                                <!--نهاية الخطوة 5-->
                            </div>
                            <!--نهاية التنقل-->

                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" enctype="multipart/form-data" id="kt_modal_update_app_form">

                                <!--بداية الخطوة 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--بداية مجموعة المدخلات-->
                                        <div class="fv-row mb-10">
                                            <!--بداية التسمية-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">{{ __('setting.Category Name Arabic') }}</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Specify your unique app name') }}"></i>
                                            </label>
                                            <!--نهاية التسمية-->
                                            <!--بداية المدخل-->
                                            <input type="text" class="form-control form-control-lg form-control-solid" id="name_ar" name="name_ar" placeholder="{{ __('setting.Category Name Arabic') }}" value="" />
                                            <!--نهاية المدخل-->
                                        </div>
                                        <!--نهاية مجموعة المدخلات-->

                                        <div class="w-100">
                                            <!--بداية مجموعة المدخلات-->
                                            <div class="fv-row mb-10">
                                                <!--بداية التسمية-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                    <span class="required">{{ __('setting.Category Name English') }}</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Specify your unique app name') }}"></i>
                                                </label>
                                                <!--نهاية التسمية-->
                                                <!--بداية المدخل-->
                                                <input type="text" class="form-control form-control-lg form-control-solid" id="name_en" name="name_en" placeholder="{{ __('setting.Category Name English') }}" value="" />
                                                <input type="hidden" id="id_update" name="id" value="" />
                                                <!--نهاية المدخل-->
                                            </div>
                                            <!--نهاية مجموعة المدخلات-->
                                        </div>
                                    </div>
                                </div>
                                <!--نهاية الخطوة 1-->

                                <!--بداية الخطوة 2-->


                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="fv-row mb-10">
                                            <!--بداية التسمية-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">{{ __('setting.Category Description Arabic') }}</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Specify your unique app name') }}"></i>
                                            </label>
                                            <!--نهاية التسمية-->
                                            <!--بداية المدخل-->
                                            <div class="mb-4">
                                                <textarea id="description_ar" class="form-control form-control-lg form-control-solid rounded-3 shadow-sm" name="description_ar" rows="4" placeholder="{{ __('setting.Category Description Arabic') }}" required></textarea>
                                            </div>
                                            <!--نهاية المدخل-->
                                        </div>

                                        <div class="fv-row mb-10">
                                            <!--بداية التسمية-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">{{ __('setting.Category Description English') }}</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Specify your unique app name') }}"></i>
                                            </label>
                                            <!--نهاية التسمية-->
                                            <!--بداية المدخل-->
                                            <div class="mb-4">
                                                <textarea id="description_en" class="form-control form-control-lg form-control-solid rounded-3 shadow-sm" name="description_en" rows="4" placeholder="{{ __('setting.Category Description English') }}" required></textarea>
                                            </div>
                                            <!--نهاية المدخل-->
                                        </div>

                                    </div>
                                </div>

                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                <span class="required">{{ __('setting.Select image') }}</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('setting.Specify your apps framework') }}"></i>
                                            </label>
                                            <!--end::Label-->
                                            <div class="row mb-5">
                                                <div class="col-lg-8">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper image-update w-125px h-125px bgi-position-center" id="imageUpdate" style="background-size: 75%; background-image: url('')"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="{{ __('setting.Change avatar') }}">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="{{ __('setting.Cancel avatar') }}">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="{{ __('setting.Remove avatar') }}">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">{{ __('setting.Allowed file types') }}</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Col-->
                                            </div>

                                        </div>
                                        <!--end::Input group-->

                                        <div class="mb-4">
                                            <select class="form-control form-control-lg form-control-solid form-select-sm" name="category_id" id="category_id_update" aria-label=".form-select-sm example">
                                                <option value="0-0">{{ __('setting.Not affiliated') }}</option>
                                                <optgroup label="{{ __('setting.Primary Category') }}">

                                                    @if(!empty($category))

                                                        @foreach($category as $key => $item)
                                                            @if($item['level'] == 1)
                                                                <option value="{{$item['level']}}-{{$item['id']}}">{{$item['name']}}
                                                                    <span>{{ __('setting.Category Not affiliated') }}</span>
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="{{ __('setting.Sub Category') }}">
                                                    @foreach($category as $item)
                                                        @if($item['level'] == 2)
                                                            <option value="{{$item['level']}}-{{$item['id']}}">{{$item['name']}}
                                                                <span>{{ __('setting.Category belongs to') }}
                                                                    {{ app()->getLocale() === 'ar' ? $item['parent']['name_ar'] ?? '' : $item['parent']['name_en'] ?? '' }}
                                    </span>
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </optgroup>

                                                @endif
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                             <label for="rating" class="required fs-5 fw-bold mb-2">{{__('setting.Rating')}} :</label>

                                            <div class="ms-2 w-100px">
                                                <select id ="rating" class="form-select form-select-solid form-select-sm" name = "rating"   data-hide-search="true">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->

                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                <span class="required">{{__('setting.Famous gaming')}}</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
                                            </label>
                                            <div class="form-check form-switch">
                                                <input id = "famous_gaming" class="form-check-input" type="checkbox" name="famous_gaming"  value="on">
                                            </div>

                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100 text-center">
                                        <!--begin::Heading-->
                                        <h1 class="fw-bolder text-dark mb-3">{{ __('setting.Release!') }}</h1>
                                        <!--end::Heading-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-bold fs-3">{{ __('setting.Submit your app to kickstart your project.') }}</div>
                                        <!--end::Description-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4 py-15">
                                            <img src="assets/media/illustrations/sketchy-1/9.png" alt="{{ __('setting.Release illustration') }}" class="mw-100 mh-300px" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                            <span class="svg-icon svg-icon-3 me-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
                    <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
                </svg>
            </span>
                                            <!--end::Svg Icon--> {{ __('setting.Back') }}
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" id="submit_form_Update_Category" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
            <span class="indicator-label">{{ __('setting.Update') }}
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                <span class="svg-icon svg-icon-3 ms-2 me-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </span>
                                            <span class="indicator-progress">{{ __('setting.Please wait...') }}
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                            {{ __('setting.Continue') }}
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-3 ms-1 me-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                </svg>
            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
<script>

    window.translations = {
         OK: @json(__('setting.OK!')),
        Sorry: @json(__('setting.Sorry')),
        name: @json(__('setting.name')),
        image: @json(__('setting.image')),
        desc: @json(__('setting.desc')),
        are_sure: @json(__('setting.are_sure')),
        revert: @json(__('setting.revert')),
        yes: @json(__('setting.yes')),

        // Add more translations as needed
    };
</script>

<script src="{{url('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>

     <script src="{{url('assets/js/custom/actions/category-action.js')}}"></script>

@endsection

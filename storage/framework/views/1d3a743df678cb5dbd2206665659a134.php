<?php $__env->startSection('content'); ?>

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
                    <!--begin:Search-->
                    <div class="d-flex align-items-center ms-2 ms-lg-3">
                        <!--begin::Search-->
                        <div id="kt_header_search" class="d-flex align-items-center topbar-search w-lg-225px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                            <!--begin::Tablet and mobile search toggle-->
                            <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
                                <div class="btn btn-icon btn-icon-gray-300 w-30px h-30px w-md-40px h-md-40px">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Tablet and mobile search toggle-->
                            <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                            <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                <input type="hidden" />
                                <!--end::Hidden input-->
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-lg-3 svg-icon-gray-800 position-absolute top-50 translate-middle-y ms-5">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
												<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
											</svg>
										</span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Input-->
                                <input type="text" class="search-input form-control form-control-solid ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                <!--end::Input-->
                                <!--begin::Spinner-->
                                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
											<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
										</span>
                                <!--end::Spinner-->
                                <!--begin::Reset-->
                                <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
													<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
										</span>
                                <!--end::Reset-->
                            </form>
                            <!--end::Form-->
                            <!--begin::Menu-->
                            <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden">
                                <!--begin::Wrapper-->
                                <div data-kt-search-element="wrapper">
                                    <!--begin::Recently viewed-->
                                    <div data-kt-search-element="results" class="d-none">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-200px mh-lg-350px">
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-6.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-bold">
                                                    <span class="fs-6 fw-bold">Karina Clark</span>
                                                    <span class="fs-7 fw-bold text-muted">Marketing Manager</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-2.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-bold">
                                                    <span class="fs-6 fw-bold">Olivia Bold</span>
                                                    <span class="fs-7 fw-bold text-muted">Software Engineer</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-9.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-bold">
                                                    <span class="fs-6 fw-bold">Ana Clark</span>
                                                    <span class="fs-7 fw-bold text-muted">UI/UX Designer</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-14.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-bold">
                                                    <span class="fs-6 fw-bold">Nick Pitola</span>
                                                    <span class="fs-7 fw-bold text-muted">Art Director</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-11.jpg" alt="" />
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-bold">
                                                    <span class="fs-6 fw-bold">Edward Kulnic</span>
                                                    <span class="fs-7 fw-bold text-muted">System Administrator</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-bold">

                                                    <span class="fs-6 fw-bold">Company Rbranding</span>
                                                    <span class="fs-7 fw-bold text-muted">UI Design</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-bold">
                                                    <span class="fs-6 fw-bold">Company Re-branding</span>
                                                    <span class="fs-7 fw-bold text-muted">Web Development</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-bold">
                                                    <span class="fs-6 fw-bold">Business Analytics App</span>
                                                    <span class="fs-7 fw-bold text-muted">Administration</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-bold">
                                                    <span class="fs-6 fw-bold">EcoLeaf App Launch</span>
                                                    <span class="fs-7 fw-bold text-muted">Marketing</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-bold">
                                                    <span class="fs-6 fw-bold">Tower Group Website</span>
                                                    <span class="fs-7 fw-bold text-muted">Google Adwords</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black" />
																		<rect x="7" y="17" width="6" height="2" rx="1" fill="black" />
																		<rect x="7" y="12" width="10" height="2" rx="1" fill="black" />
																		<rect x="7" y="7" width="6" height="2" rx="1" fill="black" />
																		<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold">Si-Fi Project by AU Themes</span>
                                                    <span class="fs-7 fw-bold text-muted">#45670</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
																		<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
																		<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
																		<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold">Shopix Mobile App Planning</span>
                                                    <span class="fs-7 fw-bold text-muted">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
																		<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
																		<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold">Finance Monitoring SAAS Discussion</span>
                                                    <span class="fs-7 fw-bold text-muted">#21090</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
																		<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold">Dashboard Analitics Launch</span>
                                                    <span class="fs-7 fw-bold text-muted">#34560</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Recently viewed-->
                                    <!--begin::Recently viewed-->
                                    <div class="" data-kt-search-element="main">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-stack fw-bold mb-4">
                                            <!--begin::Label-->
                                            <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                            <!--end::Label-->
                                            <!--begin::Toolbar-->
                                            <div class="d-flex" data-kt-search-element="toolbar">
                                                <!--begin::Preferences toggle-->
                                                <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
                                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                                    <span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
																	<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Preferences toggle-->
                                                <!--begin::Advanced search toggle-->
                                                <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Advanced search toggle-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-200px mh-lg-325px">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="black" />
																		<path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="black" />
																		<path opacity="0.3" d="M15 17H9V20H15V17Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">BoomApp by Keenthemes</a>
                                                    <span class="fs-7 text-muted fw-bold">#45789</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="black" />
																		<path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Kept API Project Meeting</a>
                                                    <span class="fs-7 text-muted fw-bold">#84050</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black" />
																		<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"KPI Monitoring App Launch</a>
                                                    <span class="fs-7 text-muted fw-bold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black" />
																		<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Reference FAQ</a>
                                                    <span class="fs-7 text-muted fw-bold">#67945</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
																		<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"FitPro App Development</a>
                                                    <span class="fs-7 text-muted fw-bold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black" />
																		<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Shopix Mobile App</a>
                                                    <span class="fs-7 text-muted fw-bold">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black" />
																		<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Landing UI Design" Launch</a>
                                                    <span class="fs-7 text-muted fw-bold">#24005</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Recently viewed-->
                                    <!--begin::Empty-->
                                    <div data-kt-search-element="empty" class="text-center d-none">
                                        <!--begin::Icon-->
                                        <div class="pt-10 pb-10">
                                            <!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
                                            <span class="svg-icon svg-icon-4x opacity-50">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black" />
															<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
															<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black" />
															<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Message-->
                                        <div class="pb-15 fw-bold">
                                            <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                            <div class="text-muted fs-7">Please try again with a different query</div>
                                        </div>
                                        <!--end::Message-->
                                    </div>
                                    <!--end::Empty-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Preferences-->
                                <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                    <!--begin::Heading-->
                                    <h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Radio group-->
                                        <div class="nav-group nav-group-fluid">
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="users" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="orders" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="projects" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Radio group-->
                                        <div class="nav-group nav-group-fluid">
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="attachment" value="any" />
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                            <option value="next">Within the next</option>
                                            <option value="last">Within the last</option>
                                            <option value="between">Between</option>
                                            <option value="on">On</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                                <option value="days">Days</option>
                                                <option value="weeks">Weeks</option>
                                                <option value="months">Months</option>
                                                <option value="years">Years</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                        <a href="../../demo19/dist/pages/search/horizontal.html" class="btn btn-sm fw-bolder btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Preferences-->
                                <!--begin::Preferences-->
                                <form data-kt-search-element="preferences" class="pt-1 d-none">
                                    <!--begin::Heading-->
                                    <h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="pb-4 border-bottom">
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate Programs</span>
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end pt-7">
                                        <button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                                        <button type="submit" class="btn btn-sm fw-bolder btn-primary">Save Changes</button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Preferences-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end:Search-->

                    <!--begin::Notifications-->
                    <div class="d-flex align-items-center ms-2 ms-lg-3">
                        <!--begin::Menu- wrapper-->
                        <div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
											<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
											<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
											<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-1.jpg')">
                                <!--begin::Title-->
                                <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                    <span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
                                <!--end::Title-->
                                <!--begin::Tabs-->
                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                    </li>
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab panel-->
                                <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
																		<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Alice</a>
                                                    <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">1 hr</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-danger">
																<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-danger">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																		<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																		<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">HR Confidential</a>
                                                    <div class="text-gray-400 fs-7">Confidential staff documents</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-warning">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																		<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Company HR</a>
                                                    <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">5 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-success">
																<!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z" fill="black" />
																		<path d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z" fill="black" />
																		<path opacity="0.3" d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z" fill="black" />
																		<path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Redux</a>
                                                    <div class="text-gray-400 fs-7">New frontend admin theme</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 days</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="black" />
																		<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Breafing</a>
                                                    <div class="text-gray-400 fs-7">Product launch status update</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">21 Jan</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-info">
																<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-info">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black" />
																		<path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Banner Assets</a>
                                                    <div class="text-gray-400 fs-7">Collection of banner images</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">21 Jan</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-warning">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
																		<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black" />
																		<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Icon Assets</a>
                                                    <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">20 March</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                    <!--begin::View more-->
                                    <div class="py-3 text-center border-top">
                                        <a href="../../demo19/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-5">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
													</svg>
												</span>
                                            <!--end::Svg Icon--></a>
                                    </div>
                                    <!--end::View more-->
                                </div>
                                <!--end::Tab panel-->
                                <!--begin::Tab panel-->
                                <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column px-9">
                                        <!--begin::Section-->
                                        <div class="pt-10 pb-0">
                                            <!--begin::Title-->
                                            <h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="text-center text-gray-600 fw-bold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div class="text-center mt-5 mb-9">
                                                <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4">
                                            <img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/1.png" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tab panel-->
                                <!--begin::Tab panel-->
                                <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">New order</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Just now</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">New customer</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">Payment process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">5 hrs</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">Search query</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">2 days</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">API connection</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">1 week</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">Database restore</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Mar 5</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">System update</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">May 15</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">Server OS update</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Apr 3</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">API rollback</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Jun 30</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">Refund process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Jul 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">Withdrawal process</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Sep 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-2">
                                                <!--begin::Code-->
                                                <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                <!--end::Code-->
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">Mail tasks</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">Dec 10</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                    <!--begin::View more-->
                                    <div class="py-3 text-center border-top">
                                        <a href="../../demo19/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-5">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
													</svg>
												</span>
                                            <!--end::Svg Icon--></a>
                                    </div>
                                    <!--end::View more-->
                                </div>
                                <!--end::Tab panel-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::Notifications-->

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
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="../../demo19/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="../../demo19/dist/apps/projects/list.html" class="menu-link px-5">
                                    <span class="menu-text">My Projects</span>
                                    <span class="menu-badge">
												<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
											</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title">My Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo19/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo19/dist/account/billing.html" class="menu-link px-5">Billing</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo19/dist/account/statements.html" class="menu-link px-5">Payments</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo19/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <span class="form-check-label text-muted fs-7">Notifications</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="../../demo19/dist/account/statements.html" class="menu-link px-5">My Statements</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                <a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Language
											<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
											<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5 active">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
												</span>English</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
												</span>Spanish</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
												</span>German</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
												</span>Japanese</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
												</span>French</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5 my-1">
                                <a href="../../demo19/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="../../demo19/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <div class="menu-content px-5">
                                    <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo19/dist/index.html" />
                                        <span class="pulse-ring ms-n1"></span>
                                        <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                    </label>
                                </div>
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
            <?php echo $__env->make('dashboard.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                            <!--end::Svg Icon-->Filter</a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61cf14c9caa9b">
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
                                        <select class="form-select form-select-solid" id = "level_category" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61cf14c9caa9b" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">First level categories</option>
                                            <option value="2">Level 2 Categories</option>
                                            <option value="3">Level 3 Categories</option>
                                         </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->





















                                <!--end::Input group-->
                                <!--begin::Input group-->











                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" id = "apply" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
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
                    <a  class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
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
                                    <table class="table  table-hover table-row-dashed fs-6 gy-5 my-0 data-question" id="kt_inbox_listing">
                                        <!--begin::Table head-->
                                        <thead >
                                        <tr>
                                            <th>Actions</th>
                                            <th>Question</th>
                                            <th>Answers</th>
                                            <th>Category</th>

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
<!--end::Root-->
<!--begin::Drawers-->

<!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Upgrade a Plan</h1>
                    <div class="text-muted fw-bold fs-5">If you need more info, please check
                        <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.</div>
                </div>
                <!--end::Heading-->
                <!--begin::Plans-->
                <div class="d-flex flex-column">
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</a>
                        <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</a>
                    </div>
                    <!--end::Nav group-->
                    <!--begin::Row-->
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Startup</h2>
                                            <div class="fw-bold opacity-50">Best for startups</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="advanced" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Advanced</h2>
                                            <div class="fw-bold opacity-50">Best for 100+ team size</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Enterprise
                                                <span class="badge badge-light-success ms-2 fs-7">Most popular</span></h2>
                                            <div class="fw-bold opacity-50">Best value for 1000+ team</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="custom" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Custom</h2>
                                            <div class="fw-bold opacity-50">Requet a custom license</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <a href="#" class="btn btn-sm btn-primary">Contact Us</a>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                            </div>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-muted fw-bold">Optimal for 10+ team size and new startup</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-muted fw-bold">Optimal for 100+ team size and grown company</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-muted fw-bold">Optimal for 1000+ team and enterpise</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Plans-->
                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upgrade Plan</button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create Category</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Details</h3>
                                    <div class="stepper-desc">Name Category </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--begin::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Details</h3>
                                    <div class="stepper-desc">description Category </div>
                                </div>
                                <!--begin::Label-->
                            </div>
                            <!--end::Step 2-->


                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--begin::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Other Details</h3>
                                    <div class="stepper-desc">Define the profile picture and the category affiliation</div>
                                </div>
                                <!--begin::Label-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">4</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Evaluation</h3>
                                    <div class="stepper-desc">Determine the category distinction</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">5</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Completed</h3>
                                    <div class="stepper-desc">Review and Submit</div>
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
                                            <span class="required">Category Name Arabic</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="name_ar" placeholder="category name  arabic " value="" />
                                         <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Category  Name English</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="name_en" placeholder="category name  english " value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    <!--begin::Input group-->

                                    <!--end::Input group-->

                                </div>
                            </div>
                            <!--end::Step 1-->

                            </div>
                            <!--begin::Step 2-->

                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Category Description Arabic</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="mb-4">
                                            <textarea class="form-control form-control-lg form-control-solid rounded-3 shadow-sm" name="description_ar" rows="4" placeholder="Enter description text" required></textarea>
                                        </div>                                        <!--end::Input-->
                                    </div>

                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Category Description English</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="mb-4">
                                            <textarea class="form-control form-control-lg form-control-solid rounded-3 shadow-sm" name="description_en" rows="4" placeholder="Enter description text" required></textarea>
                                        </div>                                        <!--end::Input-->
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
                                            <span class="required">Select image </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
                                        </label>
                                        <!--end::Label-->
                                        <div class="row mb-5">
                                            <!--begin::Col-->
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url()"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Label-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Cancel-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                                                            <i class="bi bi-x fs-2"></i>
                                                                                        </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                                                            <i class="bi bi-x fs-2"></i>
                                                                                        </span>
                                                    <!--end::Remove-->
                                                </div>
                                                <!--end::Image input-->
                                                <!--begin::Hint-->
                                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                <!--end::Hint-->
                                            </div>
                                            <!--end::Col-->
                                        </div>

                                    </div>
                                    <!--end::Input group-->
                                    <div class="mb-4">
                                        <select class="form-control form-control-lg form-control-solid  form-select-sm" name = "category_id"   aria-label=".form-select-sm example">
                                            <option value="0-0">Not affiliated </option>
                                            <optgroup label="Primary Category">

                                                <?php if(!empty($category)): ?>

                                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($item['level'] == 1 ): ?>

                                                            <option value="<?php echo e($item['level']); ?>-<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option>
                                                        <?php endif; ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </optgroup>
                                            <optgroup label="Sub Category">

                                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($item['level'] == 2 ): ?>
                                                        <option value="<?php echo e($item['level']); ?>-<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option>
                                                    <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </optgroup>


                                            <?php endif; ?>
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

                                        <label for="rating" class="required fs-5 fw-bold mb-2">Rating:</label>

                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" name = "rating"  data-control="select2" data-hide-search="true">
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
                                            <span class="required">famous gaming</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
                                        </label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="famous_gaming" id="radioSwitch" value="on">
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
                                    <h1 class="fw-bolder text-dark mb-3">Release!</h1>
                                    <!--end::Heading-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-bold fs-3">Submit your app to kickstart your project.</div>
                                    <!--end::Description-->
                                    <!--begin::Illustration-->
                                    <div class="text-center px-4 py-15">
                                        <img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
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
                                        <!--end::Svg Icon-->Back</button>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div>
                                    <button type="submit" id="submit_form" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
													</svg>
												</span>
                                                    <!--end::Svg Icon--></span>
                                        <span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
                                        <!--end::Svg Icon--></button>
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
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Update Category</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <input type="hidden" id="id" class="form-control" value ="" placeholder="Item ID will appear here">

                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_update_app_stepper">
                        <!--begin::Aside-->
                        <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <!--begin::Nav-->
                            <div class="stepper-nav ps-lg-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Details</h3>
                                        <div class="stepper-desc">Name Category </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--begin::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Details</h3>
                                        <div class="stepper-desc">description Category </div>
                                    </div>
                                    <!--begin::Label-->
                                </div>
                                <!--end::Step 2-->


                                <!--begin::Step 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--begin::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Other Details</h3>
                                        <div class="stepper-desc">Define the profile picture and the category affiliation</div>
                                    </div>
                                    <!--begin::Label-->
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Evaluation</h3>
                                        <div class="stepper-desc">Determine the category distinction</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Completed</h3>
                                        <div class="stepper-desc">Review and Submit</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" enctype="multipart/form-data" id="kt_modal_update_app_form">

                                <!--begin::Step 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Category Name Arabic</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid" id ="name_ar" name="name_ar" placeholder="category name  arabic " value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                    <span class="required">Category  Name English</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-lg form-control-solid" id = "name_en" name="name_en" placeholder="category name  english " value="" />
                                                <input type="hidden" id = "id_update" name="id" value="" />

                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->

                                            <!--end::Input group-->

                                        </div>
                                    </div>
                                    <!--end::Step 1-->

                                </div>
                                <!--begin::Step 2-->

                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Category Description Arabic</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="mb-4">
                                                <textarea   id = "description_ar" class="form-control form-control-lg form-control-solid rounded-3 shadow-sm" name="description_ar" rows="4" placeholder="Enter description text" required></textarea>
                                            </div>                                        <!--end::Input-->
                                        </div>

                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Category Description English</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="mb-4">
                                                <textarea id ="description_en" class="form-control form-control-lg form-control-solid rounded-3 shadow-sm" name="description_en" rows="4" placeholder="Enter description text" required></textarea>
                                            </div>                                        <!--end::Input-->
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
                                                <span class="required">Select image </span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
                                            </label>
                                            <!--end::Label-->
                                            <div class="row mb-5">
                                                <div class="col-lg-8">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper image-update w-125px h-125px bgi-position-center" id = "imageUpdate" style="background-size: 75%; background-image: url('')"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                                                            <i class="bi bi-x fs-2"></i>
                                                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                                                            <i class="bi bi-x fs-2"></i>
                                                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Col-->
                                            </div>

                                        </div>
                                        <!--end::Input group-->
                                        <div class="mb-4">
                                            <select class="form-control form-control-lg form-control-solid  form-select-sm" name = "category_id" id = "category_id_update" aria-label=".form-select-sm example">
                                                <option value="0-0">Not affiliated </option>
                                                <optgroup label="Primary Category">

                                                    <?php if(!empty($category)): ?>

                                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($item['level'] == 1 ): ?>

                                                                <option value="<?php echo e($item['level']); ?>-<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option>
                                                            <?php endif; ?>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </optgroup>
                                                <optgroup label="Sub Category">

                                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($item['level'] == 2 ): ?>
                                                            <option value="<?php echo e($item['level']); ?>-<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option>
                                                        <?php endif; ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </optgroup>


                                                <?php endif; ?>
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
                                             <label for="rating" class="required fs-5 fw-bold mb-2">Rating:</label>

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
                                                <span class="required">famous gaming</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
                                            </label>
                                            <div class="form-check form-switch">
                                                <input id = "famous_gaming" class="form-check-input" type="checkbox" name="famous_gaming" id="radioSwitch" value="on">
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
                                        <h1 class="fw-bolder text-dark mb-3">Release!</h1>
                                        <!--end::Heading-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-bold fs-3">Submit your app to kickstart your project.</div>
                                        <!--end::Description-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4 py-15">
                                            <img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
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
                                            <!--end::Svg Icon-->Back</button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" id="submit_form_Update" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Update
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
													</svg>
												</span>
                                                    <!--end::Svg Icon--></span>
                                            <span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
                                            <!--end::Svg Icon--></button>
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
    <!--end::Modal - update App-->
<!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>
                    <div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
                </div>
                <!--end::Content-->
                <!--begin::Search-->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
									</svg>
								</span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
                        <!--end::Spinner-->
                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
											<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
								</span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::Suggestions-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Heading-->
                            <h3 class="fw-bold mb-5">Recently searched:</h3>
                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                        <span class="badge badge-light">Art Director</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                        <span class="badge badge-light">Marketing Analytic</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                        <span class="badge badge-light">Software Enginer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                        <span class="badge badge-light">Web Developer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                        <span class="badge badge-light">UI/UX Designer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Suggestions-->
                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                            <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                            <div class="fw-bold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                            <div class="fw-bold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                            <div class="fw-bold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                            <div class="fw-bold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                            <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                            <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                            <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                            <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                            <div class="fw-bold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                            <div class="fw-bold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                            <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                            <div class="fw-bold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                                            <div class="fw-bold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                            <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                            <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                            <div class="fw-bold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center mt-15">
                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-bold py-10">
                                <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                            </div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">If you need more info, please check out
                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bolder w-100 mb-8">
                    <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
                <!--end::Google Contacts Invite-->
                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
                </div>
                <!--end::Separator-->
                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
                <!--end::Textarea-->
                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-bold mb-2">Your Invitations</div>
                    <!--end::Heading-->
                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                    <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                    <div class="fw-bold text-muted">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                    <div class="fw-bold text-muted">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                    <div class="fw-bold text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                    <div class="fw-bold text-muted">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                    <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                    <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                    <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                    <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                    <div class="fw-bold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                    <div class="fw-bold text-muted">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                    <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                    <div class="fw-bold text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                                    <div class="fw-bold text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                    <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                    <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                    <div class="fw-bold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5 fw-bold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        <span class="form-check-label fw-bold text-muted">Allowed</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
    <script src="<?php echo e(url('assets/js/custom/actions/question-action.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\answerThem-api-main\resources\views/dashboard/pages/questions.blade.php ENDPATH**/ ?>

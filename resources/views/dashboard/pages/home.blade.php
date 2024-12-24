@extends('dashboard.layout.app')

@section('content')

<link href="{{asset('assets/css/home.css')}}"  rel="stylesheet"/>

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
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">{{auth('admin')->user()->name}}
                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"></span></div>
                                        <a class="fw-bold text-muted text-hover-primary fs-7">{{auth('admin')->user()->email}}</a>
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
                                        <a href="{{route('dashboard.home' , ['lang' => 'en'])}}" class="menu-link d-flex px-5  @if(app()->getLocale() == 'en') active @endif">
											       	<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
												</span>{{__('setting.english')}}</a>
                                    </div>

                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{route('dashboard.home' , ['lang' => 'ar'])}}" class="menu-link d-flex px-5  @if(app()->getLocale() == 'ar') active @endif">
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
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column align-items-start me-3 gap-1">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder m-0 fs-3">{{__('setting.dashboard')}}</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->

            </div>
            <!--end::Toolbar-->
            <!--begin::Main-->
            <div class="d-flex flex-row flex-column-fluid align-items-stretch">
                <!--begin::Content-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Row-->
                    <div class="row ">


                        <div class="row justify-content-center g-3" style ="margin-bottom: 20px"> <!-- أضف g-3 لتقليل الفواصل -->
                            <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="card card-flush h-md-100 card-reviews" style="max-width: 100%; margin: 0 auto;">
                                    <div class="card-header pt-5 d-flex justify-content-between">
                                        <div class="card-title d-flex flex-column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{$totalRatings}}</span>
                                            </div>
                                            <span class="text-gray-400 pt-1 fw-bold fs-6">{{__('setting.app_review')}}</span>
                                        </div>
                                        <i class="card-icon fas fa-star"></i>
                                    </div>
                                    <div class="card-body pt-2 pb-4 d-flex align-items-center">
                                        <!-- محتوى الكارد -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="card card-flush h-md-100 card-questions" style="max-width: 100%; margin: 0 auto;">
                                    <div class="card-header pt-5 d-flex justify-content-between">
                                        <div class="card-title d-flex flex-column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{$totalQuestions}}</span>
                                            </div>
                                            <span class="text-gray-400 pt-1 fw-bold fs-6">{{(__('setting.app_questions'))}}</span>
                                        </div>
                                        <i class="card-icon fas fa-question-circle"></i>
                                    </div>
                                    <div class="card-body d-flex align-items-end pt-0">
                                        <!-- محتوى الكارد -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="card card-flush h-md-100 card-categories" style="max-width: 100%; margin: 0 auto;">
                                    <div class="card-header pt-5 d-flex justify-content-between">
                                        <div class="card-title d-flex flex-column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{$totalCategory}}</span>
                                            </div>
                                            <span class="text-gray-400 pt-1 fw-bold fs-6">{{__('setting.app_categories')}}</span>
                                        </div>
                                        <i class="card-icon fas fa-th-large"></i>
                                    </div>
                                    <div class="card-body pt-2 pb-4 d-flex align-items-center">
                                        <!-- محتوى الكارد -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="card card-flush h-md-100 card-users" style="max-width: 100%; margin: 0 auto;">
                                    <div class="card-header pt-5 d-flex justify-content-between">
                                        <div class="card-title d-flex flex-column">
                                            <div class="d-flex align-items-center">
                                                <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{$totalUser}}</span>
                                            </div>
                                            <span class="text-gray-400 pt-1 fw-bold fs-6">{{__('setting.app_users')}}</span>
                                        </div>
                                        <i class="card-icon fas fa-users"></i>
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-end">
                                        <!-- محتوى الكارد -->
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!--begin::Col-->
                        <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                            <!--begin::Chart widget 3-->
                            <div class="card card-flush overflow-hidden h-md-100">
                                <!--begin::Header-->
                                <div class="card-header py-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-dark">{{__('setting.challenges_created')}}</span>
                                        <span class="text-gray-400 mt-1 fw-bold fs-6">{{__('setting.monthly_challenge')}}</span>

                                    </h3>
                                    <!--end::Title-->

                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                    <!--begin::Statistics-->
                                    <div class="px-9 mb-5">
                                        <!--begin::Statistics-->
                                        <div class="d-flex mb-2">
                                             <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">{{__('setting.Challenges')}}</span>
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-bold text-gray-400">{{__('setting.track_user')}}</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Chart-->
                                    <canvas id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 500px"></canvas>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Chart widget 3-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                            <!--begin::Chart widget 3-->
                            <div class="card card-flush overflow-hidden h-md-100">
                                <!--begin::Header-->
                                <div class="card-header py-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-dark">{{__('setting.user_created')}}</span>
                                        <span class="text-gray-400 mt-1 fw-bold fs-6">{{__('setting.monthly_create')}}</span>

                                    </h3>
                                    <!--end::Title-->

                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                    <!--begin::Statistics-->
                                    <div class="px-9 mb-5">
                                        <!--begin::Statistics-->
                                        <div class="d-flex mb-2">
                                            <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">{{__('setting.create_user')}}</span>
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-bold text-gray-400">{{__('setting.track')}}</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Chart-->
                                    <canvas id="accountCreationChart" class="min-h-auto ps-4 pe-6" style="height: 500px"></canvas>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
{{--                            <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">--}}

{{--                                <!--end::Chart widget 3 begin::Chart Widget 1-->--}}
{{--                                <div class="card card-flush h-lg-100">--}}
{{--                                    <!--begin::Header-->--}}
{{--                                    <div class="card-header pt-5">--}}
{{--                                        <!--begin::Title-->--}}
{{--                                        <h3 class="card-title align-items-start flex-column">--}}
{{--                                            <span class="card-label fw-bolder text-dark">Instagram Subscribers</span>--}}
{{--                                            <span class="text-gray-400 pt-2 fw-bold fs-6">75% activity growth</span>--}}
{{--                                        </h3>--}}
{{--                                        <!--end::Title-->--}}
{{--                                        <!--begin::Toolbar-->--}}
{{--                                        <div class="card-toolbar">--}}
{{--                                            <!--begin::Menu-->--}}
{{--                                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">--}}
{{--                                                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->--}}
{{--                                                <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">--}}
{{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />--}}
{{--                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />--}}
{{--                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />--}}
{{--                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />--}}
{{--                                                            </svg>--}}
{{--                                                        </span>--}}
{{--                                                <!--end::Svg Icon-->--}}
{{--                                            </button>--}}
{{--                                            <!--begin::Menu 2-->--}}
{{--                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">--}}
{{--                                                <!--begin::Menu item-->--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Menu item-->--}}
{{--                                                <!--begin::Menu separator-->--}}
{{--                                                <div class="separator mb-3 opacity-75"></div>--}}
{{--                                                <!--end::Menu separator-->--}}
{{--                                                <!--begin::Menu item-->--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <a href="#" class="menu-link px-3">New Ticket</a>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Menu item-->--}}
{{--                                                <!--begin::Menu item-->--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <a href="#" class="menu-link px-3">New Customer</a>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Menu item-->--}}
{{--                                                <!--begin::Menu item-->--}}
{{--                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">--}}
{{--                                                    <!--begin::Menu item-->--}}
{{--                                                    <a href="#" class="menu-link px-3">--}}
{{--                                                        <span class="menu-title">New Group</span>--}}
{{--                                                        <span class="menu-arrow"></span>--}}
{{--                                                    </a>--}}
{{--                                                    <!--end::Menu item-->--}}
{{--                                                    <!--begin::Menu sub-->--}}
{{--                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">--}}
{{--                                                        <!--begin::Menu item-->--}}
{{--                                                        <div class="menu-item px-3">--}}
{{--                                                            <a href="#" class="menu-link px-3">Admin Group</a>--}}
{{--                                                        </div>--}}
{{--                                                        <!--end::Menu item-->--}}
{{--                                                        <!--begin::Menu item-->--}}
{{--                                                        <div class="menu-item px-3">--}}
{{--                                                            <a href="#" class="menu-link px-3">Staff Group</a>--}}
{{--                                                        </div>--}}
{{--                                                        <!--end::Menu item-->--}}
{{--                                                        <!--begin::Menu item-->--}}
{{--                                                        <div class="menu-item px-3">--}}
{{--                                                            <a href="#" class="menu-link px-3">Member Group</a>--}}
{{--                                                        </div>--}}
{{--                                                        <!--end::Menu item-->--}}
{{--                                                    </div>--}}
{{--                                                    <!--end::Menu sub-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Menu item-->--}}
{{--                                                <!--begin::Menu item-->--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <a href="#" class="menu-link px-3">New Contact</a>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Menu item-->--}}
{{--                                                <!--begin::Menu separator-->--}}
{{--                                                <div class="separator mt-3 opacity-75"></div>--}}
{{--                                                <!--end::Menu separator-->--}}
{{--                                                <!--begin::Menu item-->--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <div class="menu-content px-3 py-3">--}}
{{--                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Menu item-->--}}
{{--                                            </div>--}}
{{--                                            <!--end::Menu 2-->--}}
{{--                                            <!--end::Menu-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Toolbar-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Header-->--}}
{{--                                    <!--begin::Body-->--}}
{{--                                    <div class="card-body pt-0 px-0">--}}
{{--                                        <!--begin::Chart-->--}}
{{--                                        <div id="kt_charts_widget_1" class="min-h-auto ps-4 pe-6 mb-3" style="height: 350px"></div>--}}
{{--                                        <!--end::Chart-->--}}
{{--                                        <!--begin::Info-->--}}
{{--                                        <div class="d-flex align-items-center px-9">--}}
{{--                                            <!--begin::Item-->--}}
{{--                                            <div class="d-flex align-items-center me-6">--}}
{{--                                                <!--begin::Bullet-->--}}
{{--                                                <span class="rounded-1 bg-primary me-2 h-10px w-10px"></span>--}}
{{--                                                <!--end::Bullet-->--}}
{{--                                                <!--begin::Label-->--}}
{{--                                                <span class="fw-bold fs-6 text-gray-600">Gained</span>--}}
{{--                                                <!--end::Label-->--}}
{{--                                            </div>--}}
{{--                                            <!--ed::Item-->--}}
{{--                                            <!--begin::Item-->--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <!--begin::Bullet-->--}}
{{--                                                <span class="rounded-1 bg-success me-2 h-10px w-10px"></span>--}}
{{--                                                <!--end::Bullet-->--}}
{{--                                                <!--begin::Label-->--}}
{{--                                                <span class="fw-bold fs-6 text-gray-600">Lost</span>--}}
{{--                                                <!--end::Label-->--}}
{{--                                            </div>--}}
{{--                                            <!--ed::Item-->--}}
{{--                                        </div>--}}
{{--                                        <!--ed::Info-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Body-->--}}
{{--                                </div>--}}
{{--                                <!--end::Chart Widget 1-->--}}
{{--                            </div> --}}



                        </div>





                    </div>



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

<script src="{{url('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {



        const ctx = document.getElementById('kt_charts_widget_3').getContext('2d');
        const chartData = @json($chartData); // Pass PHP data to JavaScript

        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: Object.keys(chartData), // تسميات المحاور
                datasets: [{
                    label: 'Challenges',
                    data: Object.values(chartData), // البيانات
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // خلفية الأعمدة
                    borderColor: 'rgba(54, 162, 235, 1)', // لون حواف الأعمدة
                    borderWidth: 1 // عرض الحدود
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: '#333' // لون النص
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.7)',
                        titleColor: '#fff',
                        bodyColor: '#fff'
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false // إخفاء الشبكة الأفقية
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(200, 200, 200, 0.2)', // لون الشبكة العمودية
                        },
                        ticks: {
                            color: '#666' // لون الأرقام
                        }
                    }
                }
            }
        });


    const account = document.getElementById('accountCreationChart').getContext('2d');

        const chartDataCreate = {
            labels: @json($formattedData).map(item => `Month ${item.month}`), // Month labels
            datasets: [{
                label: 'Accounts Created',
                data: @json($formattedData).map(item => item.total), // Total counts
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                fill: true, // Fill the area under the curve
                tension: 0.4, // Creates the wave effect
            }]
        };

        new Chart(account, {
            type: 'line', // Line chart
            data: chartDataCreate,
            options: {
                scales: {
                    x: {
                        grid: {
                            display: false // Removes the grid lines on the x-axis
                        }
                    },
                    y: {
                        grid: {
                            display: false // Removes the grid lines on the y-axis
                        },
                        beginAtZero: true
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        labels: {
                            color: '#333' // Text color
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.7)',
                        titleColor: '#fff',
                        bodyColor: '#fff'
                    }
                }
            }
        });

    });






</script>
@endsection

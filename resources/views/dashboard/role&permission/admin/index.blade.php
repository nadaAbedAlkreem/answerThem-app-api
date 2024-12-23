
@extends('Dashboard.layout.app')
@section('content')

  <div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-column flex-column-fluid">
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
                                        <div class="fw-bolder d-flex align-items-center fs-5">{{auth()->user()->name}}
                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"></span></div>
                                        <a class="fw-bold text-muted text-hover-primary fs-7">{{auth()->user()->email}}</a>
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
                                        <a href="{{route('admins.index.lang' , ['lang' => 'en'])}}" class="menu-link d-flex px-5  @if(app()->getLocale() == 'en') active @endif">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                                                    </span>{{__('setting.english')}}</a>
                                    </div>

                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{route('admins.index.lang' , ['lang' => 'ar'])}}" class="menu-link d-flex px-5  @if(app()->getLocale() == 'ar') active @endif">
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

        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid container-xxl" id="kt_wrapper">
            <!--begin::Toolbar-->

            <!--end::Toolbar-->
            <!--begin::Main-->
            <div class="d-flex flex-row flex-column-fluid align-items-stretch">
                <!--begin::Content-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Inbox App - Messages -->
                    <div class="d-flex flex-column flex-lg-row">

                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-12">

                                        @if (session('status'))
                                            <div class="alert alert-success">{{ session('status') }}</div>
                                        @endif

                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <select id="filter_column_type_user"  class="form-control"  >
                                                    <option value="-1">All</option>
                                                    @if(!empty($roles))
                                                        @foreach($roles as $id =>$name)
                                                            <option value="{{$id}}">{{$name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>

                                            </div>
                                            <div class="card-body">

                                                <table class="data-table-admins table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>{{__('setting.ID')}}</th>
                                                        <th>{{__('setting.Name')}}</th>
                                                        <th>{{__('setting.Email')}}</th>
                                                        <th>{{__('setting.Roles')}}</th>
                                                        <th>{{__('setting.Actions')}}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Inbox App - Messages -->
                </div>
                <!--end::Content-->
            </div>

        </div>
        <!--end::Wrapper-->

        <input type="hidden" name="locale"  id="locale" value="{{app()->getLocale()}}" />

        <script>
            window.translations = {

                are_sure: @json(__('setting.are_sure')),
                revert: @json(__('setting.revert')),
                yes: @json(__('setting.yes')),

                // Add more translations as needed
            }
        </script>

        <script src="{{url('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script src='{{asset('assets/js/custom/actions/admins-action.js')}}'></script>
    </div>
  </div>

@endsection


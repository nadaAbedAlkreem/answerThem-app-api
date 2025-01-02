<?php $__env->startSection('content'); ?>
    <style>
        .hidden-progress {
            display: none;
        }

        input[readonly] {
            background-color: #e9ecef;
            cursor: not-allowed;
        }
      </style>



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
                                <div class="menu-content d-flex align-items-center px-3" style ="padding:5px">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5"><?php echo e(auth('admin')->user()->name); ?>

                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"></span></div>
                                        <a class="fw-bold text-muted text-hover-primary fs-7"><?php echo e(auth('admin')->user()->email); ?></a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="hover">
                                <a  class="menu-link px-5">
                                                <span class="menu-title position-relative"><?php echo e(__('setting.language')); ?>


                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="<?php echo e(route('admins.index.lang' , ['lang' => 'en'])); ?>" class="menu-link d-flex px-5  <?php if(app()->getLocale() == 'en'): ?> active <?php endif; ?>">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                                                    </span><?php echo e(__('setting.english')); ?></a>
                                    </div>

                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="<?php echo e(route('admins.index.lang' , ['lang' => 'ar'])); ?>" class="menu-link d-flex px-5  <?php if(app()->getLocale() == 'ar'): ?> active <?php endif; ?>">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/saudi-arabia.svg" alt="" />
                                                    </span><?php echo e(__('setting.arabic')); ?></a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="<?php echo e(route('admin.logout')); ?>" class="menu-link px-5"><?php echo e(__('setting.sign_out')); ?></a>
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
                                        <a  class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#kt_modal_create_admin_app"><?php echo e(__('setting.Create')); ?></a>

                                        <?php if(session('status')): ?>
                                            <div class="alert alert-success"><?php echo e(session('status')); ?></div>
                                        <?php endif; ?>

                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <select id="filter_column_type_user"  class="form-control"  >
                                                    <option value="-1">All</option>
                                                    <?php if(!empty($roles)): ?>
                                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id =>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </select>

                                            </div>
                                            <div class="container mt-4">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center">
                                                        <span class="me-2 fw-bold"><?php echo e(__('setting.Number of employees who have not been assigned a category')); ?></span>
                                                        <input class="form-control" name="staffCount"  type="text" value="0" readonly>
                                                    </div>
                                                     <div class="d-flex align-items-center">
                                                        <span class="me-2 fw-bold"><?php echo e(__('setting.Number of categories for which no employee has been assigned')); ?></span>
                                                        <input class="form-control" name = "categoriesCount" type="text" value="0" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">

                                                <table class="data-table-admins table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th><?php echo e(__('setting.ID')); ?></th>
                                                        <th><?php echo e(__('setting.Name')); ?></th>
                                                        <th><?php echo e(__('setting.Email')); ?></th>
                                                        <th><?php echo e(__('setting.Roles')); ?></th>
                                                        <th><?php echo e(__('setting.Dependency')); ?></th>
                                                        <th><?php echo e(__('setting.Actions')); ?></th>
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
        <!--begin::Modal - Create App-->
        <div class="modal fade" id="kt_modal_create_admin_app" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2><?php echo e(__('setting.Create Admin')); ?></h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" id ="dismiss_create_admin" data-bs-dismiss="modal">
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
                        <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="">

                            <div class="flex-row-fluid py-lg-5 px-lg-15">
                                <!--begin::Form-->
                                <form class="form" novalidate="novalidate" enctype="multipart/form-data" id="kt_sign_up_form">

                                    <!--begin::Step 1-->
                                    <div class="current" data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                    <span class="required"> <?php echo e(__('setting.Name')); ?></span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="<?php echo e(__('setting.Specify your unique app name')); ?>"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder=" <?php echo e(__('setting.Name')); ?>" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required"> <?php echo e(__('setting.Email')); ?></span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="<?php echo e(__('setting.Specify your unique app name')); ?>"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="email" placeholder=" <?php echo e(__('setting.Email')); ?>" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->

                                                <!--end::Input group-->

                                            </div>

                                            <div class="mb-4">
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                    <span class="required"><?php echo e(__('setting.Category')); ?></span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"></i>
                                                </label>

                                                <div id="categories_container"  class="form-control form-control-lg form-control-solid" >
                                                 </div>
                                            </div>



                                            <div class="fv-row mb-10">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack mb-2">
                                                    <!--begin::Label-->
                                                    <label class="form-label fs-6 fw-bolder text-dark"><?php echo e(__('setting.password')); ?></label>
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Step 1-->

                                    </div>

                                    <div>
                                        <button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary" >
                                            <?php echo e(__('setting.Continue')); ?>

                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
                                            <!--end::Svg Icon-->
                                                <span class="indicator-label-progress hidden-progress"><?php echo e(__('setting.Please wait...')); ?>

												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <button type="button" id="resetButtonQuestion" class="btn btn-secondary d-none">
                                                إعادة تعيين
                                            </button>

                                        </div>
                                        <!--end::Wrapper-->
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
        <input type="hidden" name="locale"  id="locale" value="<?php echo e(app()->getLocale()); ?>" />


        <script src="<?php echo e(url('assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
        <script src='<?php echo e(asset('assets/js/custom/actions/admins-action.js')); ?>'></script>
    </div>
  </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\answerThem-api-main\resources\views/dashboard/role&permission/admin/index.blade.php ENDPATH**/ ?>
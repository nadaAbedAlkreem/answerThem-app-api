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
                            <!--begin::Menu sub-->
                            <div class="menu-item px-5" data-kt-menu-trigger="hover" >
                                <a class="menu-link px-5" style="display: flex; align-items: center; justify-content: space-between; position: relative;">

                                <span class="menu-title position-relative"><?php echo e(__('setting.language')); ?>


                                </span>
                                </a>
                                <!-- Menu sub -->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4"  >
                                    <!-- Menu item: English -->
                                    <div class="menu-item px-3">
                                        <a href="<?php echo e(route('dashboard.setting', ['lang' => 'en'])); ?>"
                                           class="menu-link d-flex px-5 <?php if(app()->getLocale() == 'en'): ?> active <?php endif; ?>">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                                        </span><?php echo e(__('setting.english')); ?>

                                        </a>
                                    </div>
                                    <!-- Menu item: Arabic -->
                                    <div class="menu-item px-3" >
                                        <a href="<?php echo e(route('dashboard.setting', ['lang' => 'ar'])); ?>"
                                           class="menu-link d-flex px-5 <?php if(app()->getLocale() == 'ar'): ?> active <?php endif; ?>">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="assets/media/flags/saudi-arabia.svg" alt="" />
                                        </span><?php echo e(__('setting.arabic')); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Menu sub-->

                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="<?php echo e(route('admin.logout')); ?>" class="menu-link px-5"><?php echo e(__('setting.sign_out')); ?></a>
                            </div>

                            <!--end::Menu item-->
                        </div>
                        <!--end::User account menu-->
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
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column align-items-start me-3 gap-1">
                        <!--begin::Title-->
                        <h1 class="d-flex text-dark fw-bolder m-0 fs-3"><?php echo e(__('setting.Project Settings')); ?></h1>
                        <!--end::Title-->

                        <!--end::Breadcrumb-->
                    </div>

                </div>
                <!--end::Toolbar-->
                <!--begin::Main-->
                <div class="d-flex flex-row flex-column-fluid align-items-stretch">
                    <!--begin::Content-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Navbar-->
                        <div class="card mb-9">
                            <div class="card-body pt-9 pb-0">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                                    <!--begin::Image-->
                                    <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                        <img class="mw-50px mw-lg-75px" src="<?php echo e(asset('assets/media/logos/favicon.ico')); ?>" alt="image" />
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Wrapper-->
                                    <div class="flex-grow-1">
                                        <!--begin::Head-->
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2"  style="padding:5px">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center mb-1">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3"><?php echo e(__('setting.gaweb7om app')); ?></a>
                                                    <span class="badge badge-light-success me-auto"><?php echo e(__('setting.In Progress')); ?></span>
                                                </div>
                                                <!--end::Status-->
                                                <!--begin::Description-->
                                                <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400"><?php echo e(__('setting.Answer them game application, a competition on a set of questions')); ?></div>
                                                <!--end::Description-->
                                            </div>

                                        </div>

                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Details-->
                                <div class="separator"></div>
                                <!--begin::Nav-->
                                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary py-5 me-6 active" ><?php echo e(__('setting.setting')); ?></a>
                                    </li>
                                    <!--end::Nav item-->
                                </ul>
                                <!--end::Nav-->
                            </div>
                        </div>
                        <!--end::Navbar-->
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title fs-3 fw-bolder"><?php echo e(__('setting.Project Settings')); ?></div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Form-->
                            <form id="kt_project_settings_form" class="form"  enctype="multipart/form-data" >
                                <?php echo e(csrf_field()); ?>

                                <!--begin::Card body-->
                                <div class="card-body p-9">
                                    <?php if(!empty($settings)): ?>
                                        <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php switch($setting->type):
                                                case ('string'): ?>
                                                    <!-- String Setting -->
                                                    <div class="row mb-8">
                                                        <div class="col-xl-3">
                                                            <label class="fs-6 fw-bold mt-2 mb-3"><?php echo e(__('setting.app name')); ?></label>
                                                        </div>
                                                        <div class="col-xl-9 fv-row">
                                                            <input type="text" class="form-control form-control-solid" name="<?php echo e($setting->id); ?>" value="<?php echo e($setting->value); ?>" required/>
                                                        </div>
                                                    </div>
                                                    <?php break; ?>

                                                <?php case ('image'): ?>
                                                    <!-- Image Setting -->
                                                    <div class="row mb-5">
                                                        <!--begin::Col-->
                                                        <div class="col-xl-3">
                                                            <div class="fs-6 fw-bold mt-2 mb-3"><?php echo e($setting->base_term); ?></div>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-8">
                                                            <!--begin::Image input-->
                                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                                <!--begin::Preview existing avatar-->
                                                                <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url(<?php echo e($setting->value); ?>)"></div>
                                                                <!--end::Preview existing avatar-->
                                                                <!--begin::Label-->
                                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="<?php echo e(__('setting.Change avatar')); ?>">
                                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                                    <!--begin::Inputs-->
                                                                    <input type="file" name="<?php echo e($setting->id); ?>" accept=".png, .jpg, .jpeg"  />
                                                                    <input type="hidden" name="<?php echo e(__('setting.avatar_remove')); ?>" />
                                                                    <!--end::Inputs-->
                                                                </label>
                                                                <!--end::Label-->
                                                                <!--begin::Cancel-->
                                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="<?php echo e(__('setting.Cancel avatar')); ?>">
                                                                        <i class="bi bi-x fs-2"></i>
                                                                    </span>
                                                                <!--end::Cancel-->
                                                                <!--begin::Remove-->
                                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="<?php echo e(__('setting.Remove avatar')); ?>">
                                                                        <i class="bi bi-x fs-2"></i>
                                                                    </span>
                                                                <!--end::Remove-->
                                                            </div>
                                                            <!--end::Image input-->
                                                            <!--begin::Hint-->
                                                            <div class="form-text"><?php echo e(__('setting.Allowed file types')); ?></div>
                                                            <!--end::Hint-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>

                                                    <?php break; ?>

                                                <?php case ('json'): ?>
                                                    <!-- JSON Settings Section -->
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4 class="fw-bold text-primary mb-4"><?php echo e($setting->base_term); ?></h4>
                                                        </div>

                                                        <?php $__currentLoopData = json_decode($setting->value, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $json): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-md-6 col-lg-4 mb-4">
                                                                <!-- Modern Item Card -->
                                                                <div class="card shadow-lg border-0 rounded-3 hover-shadow-lg transition-all">

                                                                    <div class="card-body">
                                                                        <!-- JSON Image with Modern Styling          " -->
                                                                        <?php if(!empty($json['image'])): ?>
                                                                            <!-- Image Setting -->
                                                                            <div class="row mb-5">
                                                                                <!--begin::Col-->
                                                                                <label class="form-label fw-bold text-dark">
                                                                                    <i class="bi bi-image-fill me-2"></i><?php echo e(__('setting.Image')); ?>

                                                                                </label>
                                                                                <!--end::Col-->
                                                                                <!--begin::Col-->
                                                                                <div class="col-lg-8">
                                                                                    <!--begin::Image input-->
                                                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                                                        <!--begin::Preview existing avatar-->
                                                                                        <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url(<?php echo e($json['image']); ?>)"></div>
                                                                                        <!--end::Preview existing avatar-->
                                                                                        <!--begin::Label-->
                                                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="<?php echo e(__('setting.Change avatar')); ?>">
                                                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                                                            <!--begin::Inputs-->
                                                                                            <input type="file" name="<?php echo e($setting->id); ?>-<?php echo e($index); ?>-image" accept=".png, .jpg, .jpeg" />
                                                                                            <input type="hidden" name="<?php echo e(__('setting.avatar_remove')); ?>" />
                                                                                            <!--end::Inputs-->
                                                                                        </label>
                                                                                        <!--end::Label-->
                                                                                        <!--begin::Cancel-->
                                                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="<?php echo e(__('setting.Cancel avatar')); ?>">
                                                                                            <i class="bi bi-x fs-2"></i>
                                                                                        </span>
                                                                                        <!--end::Cancel-->
                                                                                        <!--begin::Remove-->
                                                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="<?php echo e(__('setting.Remove avatar')); ?>">
                                                                                            <i class="bi bi-x fs-2"></i>
                                                                                        </span>
                                                                                        <!--end::Remove-->
                                                                                    </div>
                                                                                    <!--end::Image input-->
                                                                                    <!--begin::Hint-->
                                                                                    <div class="form-text"><?php echo e(__('setting.Allowed file types')); ?></div>
                                                                                    <!--end::Hint-->
                                                                                </div>
                                                                                <!--end::Col-->
                                                                            </div>

                                                                        <?php endif; ?>

                                                                        <!-- JSON Title with Input Styling -->
                                                                        <?php if(!empty($json['title'])): ?>
                                                                            <div class="mb-4">
                                                                                <label class="form-label fw-bold text-dark">
                                                                                    <i class="bi bi-fonts me-2"></i><?php echo e(__('setting.Title')); ?>

                                                                                </label>
                                                                                <input type="text" class="form-control rounded-3 shadow-sm" name="<?php echo e($setting->id); ?>-<?php echo e($index); ?>-title" value="<?php echo e($json['title']); ?>" placeholder="Enter title" required />
                                                                            </div>
                                                                        <?php endif; ?>

                                                                        <!-- JSON Body with More Spacing and Subtle Styling -->
                                                                        <?php if(!empty($json['body'])): ?>
                                                                            <div class="mb-4">
                                                                                <label class="form-label fw-bold text-dark">
                                                                                    <i class="bi bi-textarea-t me-2"></i><?php echo e(__('setting.Body')); ?>

                                                                                </label>
                                                                                <textarea class="form-control rounded-3 shadow-sm" name="<?php echo e($setting->id); ?>-<?php echo e($index); ?>-body" rows="4" placeholder="Enter body text" required><?php echo e($json['body']); ?></textarea>
                                                                            </div>
                                                                        <?php endif; ?>

                                                                        <?php if(!empty($json['name'])): ?>
                                                                            <div class="mb-4">
                                                                                <label class="form-label fw-bold text-dark">
                                                                                    <i class="bi bi-globe me-2"></i>
                                                                                    <?php echo e(__('setting.Country')); ?>

                                                                                </label>
                                                                                <input type="text" class="form-control rounded-3 shadow-sm" name="<?php echo e($setting->id); ?>-<?php echo e($index); ?>-name" value="<?php echo e($json['name']); ?>" placeholder="Enter country" required />
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        <?php if(!empty($json['code'])): ?>
                                                                            <div class="mb-4">
                                                                                <label class="form-label fw-bold text-dark">
                                                                                    <i class="bi bi-globe me-2"></i>
                                                                                    <?php echo e(__('setting.code')); ?>

                                                                                </label>
                                                                                <input type="text" class="form-control rounded-3 shadow-sm" name="<?php echo e($setting->id); ?>-<?php echo e($index); ?>-code" value="<?php echo e($json['code']); ?>" placeholder="Enter code" required />
                                                                            </div>
                                                                        <?php endif; ?>


                                                                        <?php if($setting->base_term == 'app contact us'): ?>
                                                                            <div class="mb-4">
                                                                                <label class="form-label fw-bold text-dark">
                                                                                    <i class="bi bi-globe me-2"></i> <?php echo e($index); ?>

                                                                                </label>
                                                                                <input type="text" class="form-control rounded-3 shadow-sm" name="<?php echo e($setting->id); ?>-<?php echo e($index); ?>" value="<?php echo e($json); ?>"  placeholder="Enter contact us "  required/>

                                                                            </div>
                                                                        <?php endif; ?>



                                                                        <?php if($setting->base_term == 'app terms and conditions'): ?>
                                                                            <div class="mb-4">
                                                                                <label class="form-label fw-bold text-dark">
                                                                                    <i class="bi bi-globe me-2"></i>
                                                                                    <?php echo e(__('setting.app terms and conditions')); ?>

                                                                                </label>
                                                                                <input type="text" class="form-control rounded-3 shadow-sm" name="<?php echo e($setting->id); ?>-<?php echo e($index); ?>" value="<?php echo e($json); ?>" placeholder="Enter contact us " required />

                                                                            </div>
                                                                        <?php endif; ?>

                                                                        <?php if($setting->base_term == 'problem suggestions'): ?>
                                                                            <div class="mb-4">
                                                                                <label class="form-label fw-bold text-dark">
                                                                                    <i class="bi bi-globe me-2"></i>
                                                                                    <?php echo e(__('setting.problem suggestions')); ?>

                                                                                </label>
                                                                                <input type="text" class="form-control rounded-3 shadow-sm" name="<?php echo e($setting->id); ?>-<?php echo e($index); ?>" value="<?php echo e($json); ?>" placeholder="Enter contact us " required />

                                                                            </div>
                                                                        <?php endif; ?>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                    <?php break; ?>
                                                <?php default: ?>
                                                    <p class="text-muted">Unsupported setting type: <?php echo e($setting->type); ?></p>
                                            <?php endswitch; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                                <!--end::Card body-->

                                <!--begin::Card footer-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset" class="btn btn-light btn-active-light-primary me-2"><?php echo e(__('setting.Discard')); ?></button>
                                    <button type="submit" id="setting_form" class="btn btn-primary"><?php echo e(__('setting.Save Changes')); ?></button>
                                </div>
                                <!--end::Card footer-->
                            </form>
                            <!--end:Form-->
                        </div>
                        <!--end::Card-->
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


    <!--end::Drawers-->
    <!--end::Main-->
    <!--begin::Engage drawers-->

    <!--begin::Modals-->



    <!--end::Modals-->
    <!--begin::Javascript-->

    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <script>

        window.translations = {
            success_message: <?php echo json_encode(__('setting.Successfully_updated_changes'), 15, 512) ?>,
            OK: <?php echo json_encode(__('setting.OK!'), 15, 512) ?>,
            // Add more translations as needed
        };
    </script>
    <script src="<?php echo e(asset('assets/js/custom/setting/update.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\answerThem-api-main\resources\views/dashboard/pages/setting.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-body">
                        <h4>
                            <a href="<?php echo e(url('dashboard/admins/' .  request('lang'))); ?>" class="btn btn-danger float-end"><?php echo e(__('setting.Back')); ?></a>
                        </h4>
                    </div>
                    <div class="card-body">
                         <form id ="formUpdateAdmins">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="hidden" name="id" id="userId" value="<?php echo e($user->id); ?>" class="form-control" />
                            <div class="mb-3">
                                <label for=""><?php echo e(__('setting.Name')); ?></label>
                                <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control" />
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for=""><?php echo e(__('setting.Email')); ?></label>
                                <input type="text" name="email" readonly value="<?php echo e($user->email); ?>" class="form-control" />
                            </div>
                            <?php if($user->getRoleNames()[0]  != 'super-admin'): ?>
                                <div class="mb-4">
                                    <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                        <span class="required"><?php echo e(__('setting.Category')); ?> </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"  ></i>
                                    </label>
                                    <select class="form-control form-control-lg form-control-solid  form-select-sm"  multiple name = "category_id[]"   id="category_id_edit_admin" required aria-label=".form-select-sm example">
                                        <option value=""></option>
                                        <?php if(!empty($user['category'])): ?>
                                            <?php $__currentLoopData = $user['category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <option selected value="<?php echo e($item['id']); ?>"> <?php echo e(app()->getLocale() === 'ar' ? $item['name_ar'] ?? '' : $item['name_en'] ?? ''); ?>

                                                    <span>(<?php echo e(app()->getLocale() === 'ar' ? $item['parent']['name_ar'] ?? '' : $item['parent']['name_en'] ?? ''); ?>) -  (<?php echo e(app()->getLocale() === 'ar' ? $item['parent']['parent']['name_ar'] ?? '' : $item['parent']['parent']['name_en'] ?? ''); ?>)</span>
                                                </option>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <?php endif; ?>
                                        <?php if(!empty($categories)): ?>
                                                 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item['id']); ?>"  > <?php echo e(app()->getLocale() === 'ar' ? $item['name_ar'] ?? '' : $item['name_en'] ?? ''); ?>

                                                        <span>(<?php echo e(app()->getLocale() === 'ar' ? $item['parent']['name_ar'] ?? '' : $item['parent']['name_en'] ?? ''); ?>) -  (<?php echo e(app()->getLocale() === 'ar' ? $item['parent']['parent']['name_ar'] ?? '' : $item['parent']['parent']['name_en'] ?? ''); ?>)</span>
                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                     </select>

                                </div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label for=""><?php echo e(__('setting.Roles')); ?></label>
                                <select name="roles[]" class="form-control" multiple>
                                    <option value=""><?php echo e(__('setting.Select Role')); ?></option>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($role); ?>"
                                            <?php echo e(in_array($role, $userRoles) ? 'selected':''); ?>>
                                            <?php echo e($role); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['roles'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <button type="submit" id ="submitAdmins" class="btn btn-primary"><?php echo e(__('setting.Update')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="locale"  id="locale" value="<?php echo e(app()->getLocale()); ?>" />

    </div>
    <script>var hostUrl = "assets/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?php echo e(url('assets/plugins/global/plugins.bundle.js')); ?>"></script>
    <!-- <script src="<?php echo e(url('assets/js/scripts.bundle.js')); ?>"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="<?php echo e(url('assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?php echo e(url('assets/js/widgets.bundle.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/custom/widgets.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/custom/apps/chat/chat.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/custom/utilities/modals/users-search.js')); ?>"></script>
    <script src='<?php echo e(asset('assets/js/custom/actions/admins-action.js')); ?>'></script>
    <script>
        window.translations = {
            OK: <?php echo json_encode(__('setting.OK!'), 15, 512) ?>,
            are_sure: <?php echo json_encode(__('setting.are_sure'), 15, 512) ?>,
            revert: <?php echo json_encode(__('setting.revert'), 15, 512) ?>,
            yes: <?php echo json_encode(__('setting.yes'), 15, 512) ?>,
        };

    </script>
    <?php $__env->startPush('scripts'); ?>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]", {
                enableTime: true, // Enable time selection
                dateFormat: "Y-m-d h:i K", // Format with AM/PM indicator
            });
        </script>
    <?php $__env->stopPush(); ?>



    <?php if(request('error')): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "<?php echo e(request('error')); ?>",
                customClass: {
                    confirmButton: "btn btn-primary",
                },
            });
        </script>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\answerThem-api-main\resources\views/dashboard/role&permission/admin/edit.blade.php ENDPATH**/ ?>
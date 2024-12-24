<?php $__env->startSection('content'); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <?php if(session('status')): ?>
                    <div class="alert alert-success"><?php echo e(session('status')); ?></div>
                <?php endif; ?>

                <div class="card">
                    <div class="card-body">
                        <h4><?php echo e(__('setting.Roles')); ?> : <?php echo e($role->name); ?>

                            <a href="<?php echo e(url('dashboard/roles/' . request('lang'))); ?>" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo e(url('roles/'.$role->id.'/update-permissions')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="mb-3">
                                <?php $__errorArgs = ['permission'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                <label for=""><?php echo e(__('setting.Permissions')); ?></label>

                                <div class="row">
                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-2">
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    name="permission[]"
                                                    value="<?php echo e($permission->name); ?>"
                                                    <?php echo e(in_array($permission->id, $rolePermissions) ? 'checked':''); ?>

                                                />
                                                <?php echo e($permission->name); ?>

                                            </label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"><?php echo e(__('setting.Update')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="locale"  id="locale" value="<?php echo e(app()->getLocale()); ?>" />

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
    <?php $__env->startPush('scripts'); ?>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]", {
                enableTime: true, // Enable time selection
                dateFormat: "Y-m-d h:i K", // Format with AM/PM indicator
            });
        </script>
    <?php $__env->stopPush(); ?>
    <!-- in this page  -->
    <!-- <script src='assets/js/custom/actions/news-actions.js'></script> -->




<?php $__env->stopSection(); ?>


<?php echo $__env->make('Dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\answerThem-api-main\resources\views/dashboard/role&permission/role/add-permissions.blade.php ENDPATH**/ ?>
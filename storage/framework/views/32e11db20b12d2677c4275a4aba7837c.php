<?php $__env->startSection('content'); ?>



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <?php if($errors->any()): ?>
                    <ul class="alert alert-warning">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>

                <div class="card">
                    <div class="card-body">
                         <h4><?php echo e(__('setting.Create')); ?>

                            <a href="<?php echo e(url('dashboard/permissions/' .request('lang'))); ?>" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form  id="formAddPermission">
                            <?php echo csrf_field(); ?>

                            <div class="mb-3">
                                <label for=""><?php echo e(__('setting.Name')); ?> </label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" id="submitPermissionAdd" class="btn btn-primary"><?php echo e(__('setting.Submit')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="<?php echo e(asset('assets/js/custom/actions/permissions-action.js')); ?>"></script>

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

<?php echo $__env->make('dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\answerThem-api-main\resources\views/Dashboard/role&permission/permission/create.blade.php ENDPATH**/ ?>
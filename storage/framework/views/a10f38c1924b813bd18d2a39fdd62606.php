<?php $__env->startSection('content'); ?>



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-body">
                        <h4>Edit
                            <a href="<?php echo e(url('dashboard/admins/' .  request('lang'))); ?>" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form id ="formUpdateAdmins">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="hidden" name="id" id="userId" value="<?php echo e($user->id); ?>" class="form-control" />
                            <div class="mb-3">
                                <label for="">Name</label>
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
                                <label for="">Email</label>
                                <input type="text" name="email" readonly value="<?php echo e($user->email); ?>" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label for="">Roles</label>
                                <select name="roles[]" class="form-control" multiple>
                                    <option value="">Select Role</option>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($role); ?>"
                                            <?php echo e(in_array($role, $userRoles) ? 'selected':''); ?>

                                        >
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
                                <button type="submit" id ="submitAdmins" class="btn btn-primary">Update</button>
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
    <script src='<?php echo e(asset('assets/js/custom/actions/admins-action.js')); ?>'></script>

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

<?php echo $__env->make('Dashboard.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\answerThem-api-main\resources\views/Dashboard/role&permission/admin/edit.blade.php ENDPATH**/ ?>
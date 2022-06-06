

<?php $__env->startSection('content'); ?>

    <div class="card">
        <form action="<?php echo e(url('insertPaymentKind')); ?>" method="POST" enctype="multipart/form-data">

        <div class="card-body">
                <?php echo csrf_field(); ?>
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="">اسم الدفعة</label>
                        <input type="text" value="" class="form-control  font-weight-bold text-dark" name="name" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPanelApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/payments/addPaymentKind.blade.php ENDPATH**/ ?>
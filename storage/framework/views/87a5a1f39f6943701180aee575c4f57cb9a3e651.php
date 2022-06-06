

<?php $__env->startSection('content'); ?>
<?php if(!isset($_GET['do'])): ?>
<?php echo $__env->make('admins.payments.paymentKindsTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php else: ?>
I don't have any records!
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminPanelApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/paymentKindsIndex.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>
<?php if(!isset($_GET['do'])): ?>
<?php echo $__env->make('admins.customers.customerTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($_GET['do'] == 'addCustomer'): ?>
<?php echo $__env->make('admins.customers.addCustomer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($_GET['do'] == 'editCustomer'): ?>
<?php echo $__env->make('admins.customers.editCustomer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($_GET['do'] == 'allDetails'): ?>
<?php echo $__env->make('admins.allDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($_GET['do'] == 'projects'): ?>
<?php echo $__env->make('admins.constructions.constructionTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
I don't have any records!
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPanelApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/customerIndex.blade.php ENDPATH**/ ?>
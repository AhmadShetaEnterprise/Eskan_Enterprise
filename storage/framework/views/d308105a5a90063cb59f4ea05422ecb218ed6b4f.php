

<?php $__env->startSection('content'); ?>
<?php if(!isset($_GET['do'])): ?>
<?php echo $__env->make('admins.properties.propertiesTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($_GET['do'] == 'addProperty'): ?>
<?php echo $__env->make('admins.properties.addProperty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($_GET['do'] == 'editProperty'): ?>
<?php echo $__env->make('admins.properties.editProperty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($_GET['do'] == 'allDetails'): ?>
<?php echo $__env->make('admins.allDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php else: ?>
I don't have any records!
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPanelApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/propertiesIndex.blade.php ENDPATH**/ ?>
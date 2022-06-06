

<?php $__env->startSection('content'); ?>
<?php if(!isset($_GET['do'])): ?>
<?php echo $__env->make('admins.constructions.constructionTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($_GET['do'] == 'addConstruction'): ?>
<?php echo $__env->make('admins.constructions.addConstruction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($_GET['do'] == 'editConstruction'): ?>
<?php echo $__env->make('admins.constructions.editConstruction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php else: ?>
I don't have any records!
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPanelApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/constructionsIndex.blade.php ENDPATH**/ ?>
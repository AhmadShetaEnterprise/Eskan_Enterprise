

<?php $__env->startSection('content'); ?>
<?php if(!isset($_GET['do'])): ?>
<?php echo $__env->make('admins.main_projects.main_projectsTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($_GET['do'] == 'add_main_project'): ?>
<?php echo $__env->make('admins.main_projects.add_main_project', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
I don't have any records!
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPanelApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/main_projectsIndex.blade.php ENDPATH**/ ?>
<h1>hello <?php echo e($name); ?></h1>
<h2>Age is <?php echo e($age); ?></h2>

<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($book); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\GitHub\laravel_again\resources\views/hello.blade.php ENDPATH**/ ?>
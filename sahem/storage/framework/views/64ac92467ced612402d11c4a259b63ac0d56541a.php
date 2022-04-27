<!DOCTYPE html>
<html  lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name', 'Sahem')); ?></title>

    <link href="<?php echo e(asset('assets/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/fontawesome/css/all.css')); ?>" rel="stylesheet">
</head>

<body dir="rtl">

    <?php echo $__env->make('layouts.includes.usersNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="content">

        <?php echo $__env->yieldContent('content'); ?>

    </div>

    <?php echo $__env->make('layouts.includes.usersFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script src="assets/js/bootstrap.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\GitHub\sahem\resources\views/layouts/appUsers.blade.php ENDPATH**/ ?>

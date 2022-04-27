<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Sahem')); ?></title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="<?php echo e(asset('assets/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/fontawesome/css/all.css')); ?>" rel="stylesheet">
</head>
<body>

    <?php echo $__env->make('layouts.includes.usersNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="container">



    </div>


    <?php echo $__env->make('layouts.includes.usersFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Scripts -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


    <!-- SWEET ALERT SRIPT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(session('status')): ?>

        <script>
            swal('<?php echo e(session('status')); ?>')
        </script>

    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\GitHub\sahem\resources\views/layouts/app.blade.php ENDPATH**/ ?>
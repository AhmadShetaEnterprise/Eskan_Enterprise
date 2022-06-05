

<?php $__env->startSection('content'); ?>

<body>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">

                    <!-- AMA.MY Main page row START -->
                    <!-- AMA.MY Main page row START -->
                    <!-- AMA.MY Main page row START -->
                    <h4 class="text-lg-center text-light bg-info">المشاريع الرئيسية</h4>
                    <?php $__currentLoopData = $mainProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mainProject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h5 class="text-lg-center text-dark border border-danger">
                        <a href="<?php echo e(url('show_main_project/'.$mainProject->id)); ?>">
                            <?php echo e($mainProject->name); ?>

                        </a>
                    </h5>
                    <div class="row">
                        <?php if($mainProject->constructions->isNotEmpty() || !is_null($mainProject->constructions)): ?>

                        <?php $__currentLoopData = $mainProject->constructions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $construction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3">

                            <p class="bg-primary text-lg-center">
                                <a class=" text-light" href="<?php echo e(url('showConstruction/'.$construction->id)); ?>">
                                    <?php echo e($construction->name); ?>

                                </a>
                            </p>
                            <div class="row">
                                <?php $__currentLoopData = $construction->units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div <?php if($unit->status == "تعاقد"): ?>
                                    class="col-3 bg-danger text-lg-center border border-primary" style="width :10rem;height :3rem"
                                    <?php elseif($unit->status == "خالية"): ?>
                                    class="col-3 bg-success text-lg-center border border-primary" style="width :10rem;height :3rem"
                                    <?php elseif($unit->status == "محجوزة"): ?>
                                    class="col-3 bg-warning text-lg-center border border-primary" style="width :10rem;height :3rem"
                                    <?php else: ?>
                                    class="col-3 text-lg-center border border-primary" style="width :10rem;height :3rem"
                                    <?php endif; ?>
                                    >
                                    <h5 class="">
                                        <a class="text-dark p-2" href="<?php echo e(url('unitShow/'.$unit->id)); ?>">
                                        <?php echo e($unit->name); ?>

                                        </a>
                                    </h5>

                                </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>


                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>

                        <?php endif; ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- AMA.MY Main page row END -->
                    <!-- AMA.MY Main page row END -->
                    <!-- AMA.MY Main page row END -->
                    <!-- AMA.MY Main page row END -->











                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPanelApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/index/mainPage.blade.php ENDPATH**/ ?>
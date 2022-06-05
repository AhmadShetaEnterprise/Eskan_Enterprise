


<?php $__env->startSection('content'); ?>

<div class="card" style="width: ;">
    <div class="card-header text-lg-center text-danger">
        <h1>
            <?php echo e($main_projects->name); ?>

        </h1>
            
            <img src="..." class="card-img-top" alt="...">
        </div>
        <div class="d-lg-inline-flex">
            <div class="card-body col-lg-12"  style="width: 20rem;">
                <br>
                <table>
                    <thead>
                        <tr>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">المنشأة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">اسم الوحدة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">قسم الوحدة</h3></th>
                            <th><h3 class="m-2 p-2 bg-dark text-lg-center">العميل</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $main_projects->units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a href="<?php echo e(url('showConstruction/'.$unit->constructions->id)); ?>" class="btn btn-outline-primary m-2"><?php echo e($unit->constructions->name); ?></a></td>
                            <td><a href="<?php echo e(url('unitShow/'.$unit->id)); ?>" class="btn btn-primary m-2" style="width: 125px"><?php echo e($unit->name); ?></a></td>
                            <td><a href="<?php echo e(url('showProperties/'.$unit->properties->id)); ?>" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($unit->properties->name); ?></a></td>
                            <td><a href="<?php echo e(url('customerShow/'.$unit->customers->id)); ?>" class="btn btn-outline-danger m-2 d-inline-block" style="font-size: 1vw"><?php echo e($unit->customers->name); ?></a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <h3 class="card-title d-lg-inline-flex">

                </h3>
                <br>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminPanelApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/main_projects/show_main_project.blade.php ENDPATH**/ ?>
<div class="col-lg-8">
    <a href="add_main_project" class="btn btn-warning mb-2 myText-button" href="">Add New Project</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">name</th>
            <th scope="col" class="text-xl-center">Category</th>
            <th scope="col" class="text-xl-center">Action</th>
        </tr>
        </thead>
        <tbody>
<?php $__currentLoopData = $main_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <th scope="row" class="text-xl-center"><?php echo e($item->id); ?></th>
            <td class="text-xl-center">
                <a href="<?php echo e(url('show_main_project/'.$item->id)); ?>">
                    <?php echo e($item->name); ?>

                </a>
            </td>
            <td class="text-xl-center"><?php echo e($item->properties->name); ?></td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm" href="<?php echo e(url('edit_main_project/'.$item->id)); ?>">تعديل </ac>

            </td>

        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/main_projects/main_projectsTable.blade.php ENDPATH**/ ?>
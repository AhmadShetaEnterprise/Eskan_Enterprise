<div class="col-lg-8">
    <a href="<?php echo e(url('addProperty')); ?>" class="btn btn-warning mb-2 myText-button">اضافة قسم جديد</a>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">القسم</th>
            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
<?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <th scope="row" class="text-xl-center"><?php echo e($item->id); ?></th>
            <td class="text-xl-center"><a href="<?php echo e(url('showProperties/'.$item->id)); ?>"><?php echo e($item->name); ?></a></td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm mr-1" href="<?php echo e(url('editProperty/'.$item->id)); ?>">تعديل القسم</ac>
                <a class="btn btn-danger btn-sm ml-1" href="<?php echo e(url('deleteProperty/'.$item->id)); ?>">حذف القسم</ac>
            </td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/properties/propertiesTable.blade.php ENDPATH**/ ?>
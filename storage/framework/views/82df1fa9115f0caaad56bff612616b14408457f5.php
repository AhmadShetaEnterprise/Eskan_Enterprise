<div class="col-lg-12">
    <a href="<?php echo e(route('addConstruction')); ?>" class="btn btn-warning mb-2 btn-block responsive-width text-dark myText-button">اضافة منشأة جديدة</a>
    <?php echo $__env->make('admins.constructions.customAddConstrutionsNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">اسم المنشأة</th>
            <th scope="col" class="text-xl-center">قسم</th>
            <th scope="col" class="text-xl-center">المشروع الرئيسي</th>
            <th scope="col" class="text-xl-center">الادوار</th>
            <th scope="col" class="text-xl-center">وحدات الدور</th>
            <th scope="col" class="text-xl-center">اجمالي الوحدات</th>
            <th scope="col" class="text-xl-center">التكلفة الكلية</th>
            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
<?php $__currentLoopData = $constructions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <th scope="row" class="text-xl-center"><?php echo e($item->id); ?></th>
            <td class="text-xl-center">
                <a href="<?php echo e(url('showConstruction/'.$item->id)); ?>">
                    <?php echo e($item->name); ?>

                </a>
            </td>
            <td class="text-xl-center"><a href="<?php echo e(url('showProperties/'.$item->property_id)); ?>"><?php echo e($item->properties->name); ?></a></td>
            <td class="text-xl-center"><a href="<?php echo e(url('show_main_project/'.$item->main_project_id)); ?>"><?php echo e($item->main_projects->name); ?></a></td>
            <td class="text-xl-center"><a href="<?php echo e(url('showConstructionLevels/'.$item->id)); ?>"><?php echo e($item->levels); ?></a></td>
            <td class="text-xl-center"><a href="<?php echo e(url('showConstructionUnits/'.$item->id)); ?>"><?php echo e($item->level_units); ?></a></td>
            <td class="text-xl-center"><?php echo e($item->total_units); ?></td>
            <td class="text-xl-center"><?php echo e($item->coast); ?></td>
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm m-1" href="<?php echo e(url('editConstruction/'.$item->id)); ?>">تعديل المشروع</ac>
                <a class="btn btn-danger btn-sm m-1" href="<?php echo e(url('deleteConstruction/'.$item->id)); ?>">حذف المشروع</ac>
            </td>

        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/constructions/constructionTable.blade.php ENDPATH**/ ?>
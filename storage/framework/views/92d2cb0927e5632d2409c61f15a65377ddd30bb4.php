
<form action="<?php echo e(url('addConstructions')); ?>" method="get">

    <div class="d-inline-flex">

            <select class="custom-select form-control m-1 font-weight-bold text-dark" name="property_id" >
                <option selected>القسم</option>
                <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($property->id); ?>"><?php echo e($property->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>


            <select class="custom-select form-control m-1 font-weight-bold text-dark" name="main_project_id" >
                <option selected>المشروع</option>
                <?php $__currentLoopData = $main_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $main_project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($main_project->id); ?>"><?php echo e($main_project->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <input type="text" class="form-control m-1 font-weight-bold text-dark" name="levels" placeholder="الطوابق">

            <input type="text" class="form-control m-1 font-weight-bold text-dark" name="level_units" placeholder="الوحدات ">

            <input type="text" class="form-control m-1 font-weight-bold text-dark" name="total_units" placeholder="اجمالي الوحدات (تلقائية) ">

            <input type="text" class="form-control m-1 font-weight-bold text-dark" name="rows" placeholder="عدد الصفوف ">

            <button type="submit" class="btn btn-primary m-1" style="height: 40px">ملء البيانات</button>

    </div>
</form>
<?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/constructions/customAddConstrutionsNavbar.blade.php ENDPATH**/ ?>
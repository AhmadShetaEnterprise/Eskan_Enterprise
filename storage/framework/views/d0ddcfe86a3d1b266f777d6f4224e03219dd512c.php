

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <h1 class="text-success font-italic text-center bg-dark font-weight-bold">Add Construction</h1>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('insertConstruction')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">اسم المنشأة</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="name" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="">القسم</label>
                        </div>
                        <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-check d-inline-flex">
                            <label class="form-check-label mr-3" for="exampleRadios2">
                            <input class="form-check-input mr-2" type="radio" name="property_id" id="exampleRadios2" value="<?php echo e($property->id); ?>">
                                <?php echo e($property->name); ?>

                            </label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="col-md-6 mb-3">

                        <div>
                            <label for="">المشروع</label>
                        </div>
                        <?php $__currentLoopData = $main_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $main_project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-check d-inline-flex">
                            <label class="form-check-label mr-3" for="exampleRadios2">
                            <input class="form-check-input mr-2" type="radio" name="main_project_id" id="exampleRadios2" value="<?php echo e($main_project->id); ?>">
                                <?php echo e($main_project->name); ?>

                            </label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الطوابق</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="levels">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">الوحدات بالطابق</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="level_units">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">كل الوحدات</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="total_units" placeholder="ستضاف تلقائيا اذا تركت فارغة">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">التكلفة الكلية</label>
                        <input type="text" class="form-control  font-weight-bold text-dark" name="coast">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">صورة</label>
                        <input type="file" name="image" class="form-control  font-weight-bold text-dark">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPanelApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/constructions/addConstruction.blade.php ENDPATH**/ ?>
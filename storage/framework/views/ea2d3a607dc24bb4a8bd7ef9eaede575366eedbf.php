<div class="col-lg-12">
    <a href="<?php echo e(url('addManagerFund')); ?>" class="mb-2 btn btn-warning text-light text-bold myText-tr">حركة مالية</a>
    <a href="<?php echo e(url('managerFundIndex')); ?>" class="mb-2 btn btn-primary text-light text-bold myText-tr">كل الحركات</a>
    <a href="<?php echo e(url('searchManagerFund/'.'0')); ?>" class="mb-2 btn btn-danger text-light text-bold myText-tr">حركات شخصية</a>
    <a href="<?php echo e(url('searchManagerFund/'.'1')); ?>" class="mb-2 btn btn-success text-light text-bold myText-tr">حركات المؤسسة</a>
    <form method="GET" action="<?php echo e(url('searchManagerFund/'.'day')); ?>" class="d-inline-flex" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="input-group date" id="datepicker">
            <label for="">From date</label>
            <input  type="date" class="form-control m-1" id="date" type="date" name="day_from">
            <label for="">To date</label>
            <input  type="date" class="form-control m-1" id="date" type="date" name="day_to">
            <label for="">date</label>
            <input  type="date" class="form-control m-1" id="date" type="date" name="one_day">
        </div>
        <button type="submit" class="btn btn-primary m-1">Search</button>
    </form>
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th class="text-xl-center">id</th>
            <th class="text-xl-center">نوع الحركة</th>
            <th class="text-xl-center">نوع الحساب</th>
            <th class="text-xl-center">المبلغ</th>
            <th class="text-xl-center">تعليق</th>
            <th class="text-xl-center">وقت التحرير</th>
            <th class="text-xl-center">وقت التعديل</th>
            <th class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
<?php $__currentLoopData = $managerFunds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr <?php if($item->kind == 0 && $item->category == 0): ?> class="text-xl-center myText-tr bg-primary bg-opacity-50" <?php elseif($item->kind == 1 && $item->category == 0): ?> class="text-xl-center bg-info bg-opacity-50 myText-tr" <?php elseif($item->category == 1): ?> class="text-xl-center text-danger myText-tr" <?php else: ?> class="text-xl-center text-dark myText-tr" <?php endif; ?>>
            <th class="text-xl-center"><?php echo e($item->id); ?></th>
            <td 
            <?php if($item->category == 0): ?> class="text-xl-center text-light" <?php else: ?> class="text-xl-center text-dark" <?php endif; ?>  >
                <?php echo e($item->kind == 0 ? 'وارد' : 'منصرف'); ?>

            </td>
            <td <?php if($item->category == 0): ?> class="text-xl-center text-light" <?php else: ?> class="text-xl-center text-dark" <?php endif; ?>>
                
                    <?php echo e($item->category == 0 ? 'شخصي' : 'مؤسسة'); ?>

            </td>
            <td 
                <?php if($item->category == 0): ?> class="text-xl-center text-light" <?php else: ?> class="text-xl-center text-dark" <?php endif; ?> >
               <?php echo e($item->value); ?>

            </td>
            <td <?php if($item->category == 0): ?> class="text-xl-center text-light" <?php else: ?> class="text-xl-center text-dark" <?php endif; ?> ><?php echo e($item->comment); ?></td>
            <td <?php if($item->category == 0): ?> class="text-xl-center text-light" <?php else: ?> class="text-xl-center text-dark" <?php endif; ?> ><?php echo e($item->created_at); ?></td>
            <td <?php if($item->category == 0): ?> class="text-xl-center text-light" <?php else: ?> class="text-xl-center text-dark" <?php endif; ?> ><?php echo e($item->updated_at); ?></td>

            <td class="text-xl-center">
                <a class="btn btn-info btn-sm d-inline-block" href="<?php echo e(url('editManagerFund/'.$item->id)); ?>">تعديل الحركة</ac>    
            </td>

        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="myText-button" colspan="2">Out  =  <?php echo e($outgoingFunds); ?></td>
            <td class="myText-button" colspan="2"></td>
            <td class="myText-button" colspan="2">In  =  <?php echo e($incomingFunds); ?></td>
            <td class="myText-button" colspan="2">difference = <?php echo e($incomingFunds - $outgoingFunds); ?></td>
        </tr>
        
        </tbody>
    </table>
</div>
<div class="col-lg-8">
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center bg-danger">مصروف شخصي</th>
            <th scope="col" class="text-xl-center bg-danger">مصروف مؤسسة</th>
            <th scope="col" class="text-xl-center bg-success">دخل شخصي</th>
            <th scope="col" class="text-xl-center bg-success">دخل مؤسسة</th>
            <th class="text-xl-center bg-danger">اجمالي مصروفات</th>
            <th class="text-xl-center bg-success">اجمالي دخل</th>
            <th class="text-xl-center bg-warning text-dark">الفرق</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-xl-center bg-primary"><?php echo e($outgoingPersonal); ?></td>
                <td class="text-xl-center"><?php echo e($outgoingCompany); ?></td>
                <td class="text-xl-center bg-primary"><?php echo e($incomingPersonal); ?></td>
                <td class="text-xl-center "><?php echo e($incomingCompany); ?></td>
                <td class="text-xl-center bg-danger"><?php echo e($outgoingFunds); ?></td>
                <td class="text-xl-center bg-success"><?php echo e($incomingFunds); ?></td>
                <td class="text-xl-center bg-warning text-dark"><?php echo e($incomingFunds - $outgoingFunds); ?></td>
            </tr>
            <tr>
                
            </tr>
        </tbody>
    </table>
</div>
<div class="col-lg-8">
    <table class="table table-light table-bordered">
        <thead>
        <tr>
            <th scope="col" class="text-xl-center bg-danger">مصروف شخصي</th>
            <th scope="col" class="text-xl-center bg-danger">مصروف مؤسسة</th>
            <th scope="col" class="text-xl-center bg-success">دخل شخصي</th>
            <th scope="col" class="text-xl-center bg-success">دخل مؤسسة</th>
            <th class="text-xl-center bg-danger">اجمالي مصروفات</th>
            <th class="text-xl-center bg-success">اجمالي دخل</th>
            <th class="text-xl-center bg-warning text-dark">الفرق</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-xl-center bg-primary"><?php echo e($outgoingPersonal); ?></td>
                <td class="text-xl-center"><?php echo e($outgoingCompany); ?></td>
                <td class="text-xl-center bg-primary"><?php echo e($incomingPersonal); ?></td>
                <td class="text-xl-center "><?php echo e($incomingCompany); ?></td>
                <td class="text-xl-center bg-danger"><?php echo e($outgoingFunds); ?></td>
                <td class="text-xl-center bg-success"><?php echo e($incomingFunds); ?></td>
                <td class="text-xl-center bg-warning text-dark"><?php echo e($incomingFunds - $outgoingFunds); ?></td>
            </tr>
            <tr>
                
            </tr>
        </tbody>
    </table>
</div><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/manager/managerFundsTable.blade.php ENDPATH**/ ?>
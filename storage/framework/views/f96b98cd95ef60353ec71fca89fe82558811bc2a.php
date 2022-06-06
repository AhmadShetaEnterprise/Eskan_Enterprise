<div class="col-lg-12">
    <a href="addPaymentKind" class="btn btn-warning mb-2 text-dark text-bold myText-button" href="">دفعة جديدة  </a>


    <table class="table table-light table-bordered">
        <thead>

        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">اسم الدفعة </th>

            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
<?php $__currentLoopData = $paymentKinds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <th scope="row" class="text-xl-center"><?php echo e($item->id); ?></th>
            <td class="text-xl-center"><a href=""><?php echo e($item->name); ?></a></td>

            <td class="text-xl-center">
                <a class="btn btn-info btn-sm" href="<?php echo e(url('editCustomer/'.$item->id)); ?>">تعديل الدفعة</ac>
            </td>

        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/payments/paymentKindsTable.blade.php ENDPATH**/ ?>
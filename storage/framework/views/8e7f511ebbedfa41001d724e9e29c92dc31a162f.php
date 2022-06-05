<div class="col-lg-12">
    <a href="addPayment" class="btn btn-warning mb-2 text-dark text-bold myText-button" href="">دفعة جديدة  </a>
    <a href="<?php echo e(url('financesIndex')); ?>" class="mb-2 btn btn-secondary text-dark text-bold myText-button">طرق الدفع</a>
    <a href="<?php echo e(url('installmentsIndex')); ?>" class="mb-2 btn btn-secondary text-dark text-bold myText-button">الاقساط</a>

    <table class="table table-light table-bordered">
        <thead>

        <tr>
            <th scope="col" class="text-xl-center">id</th>
            <th scope="col" class="text-xl-center">قيمة الوحدة</th>
            <th scope="col" class="text-xl-center"> العميل </th>
            <th scope="col" class="text-xl-center"> الوحدة </th>
            <th scope="col" class="text-xl-center">نظام الدفع</th>
            <th scope="col" class="text-xl-center">دفعة </th>
            <th scope="col" class="text-xl-center"> ما تم دفعه</th>
            <th scope="col" class="text-xl-center"> المتبقى </th>
            <th scope="col" class="text-xl-center"> خصم النقدي </th>
            <th scope="col" class="text-xl-center"> قيمة النقدي </th>
            <th scope="col" class="text-xl-center">عدد الاقساط</th>
            <th scope="col" class="text-xl-center">قيمة القسط </th>
            
            <th scope="col" class="text-xl-center">امر</th>
        </tr>
        </thead>
        <tbody>
<?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <th scope="row" class="text-xl-center"><?php echo e($item->id); ?></th>
            <td class="text-xl-center"><a href=""><?php echo e($item->unit_price); ?></a></td>
            <td class="text-xl-center"><a href="<?php echo e(url('customerShow/'.$item->customer_id)); ?>"> <?php echo e($item->customer->name); ?> </a></td>
            <td class="text-xl-center"><a href="<?php echo e(url('unitShow/'.$item->unit_id)); ?>"> <?php echo e($item->unit->name); ?> </a></td>
        <?php if(is_null($item->finance) || empty($item->finance)): ?>
            <td class="text-xl-center"><a href=""> <?php echo e($item->finance_id); ?> </a></td>
        <?php else: ?>
            <td class="text-xl-center"><a href=""> <?php echo e($item->finance->name); ?> </a></td>
        <?php endif; ?>
            <td class="text-xl-center"><?php echo e($item->paymentKind_id); ?></td>
            <td class="text-xl-center"><a href=""><?php echo e($item->unit_price - $item->residual); ?></a></td>
            <td class="text-xl-center"><a href=""><?php echo e($item->residual); ?></a></td>
            <td class="text-xl-center"><a href=""><?php echo e($item->discount); ?></a></td>
            <td class="text-xl-center"><a href=""><?php echo e($item->cash_discount); ?></a></td>
            <td class="text-xl-center"><a href=""><?php echo e($item->installments); ?></a></td>
            <td class="text-xl-center"><a href=""><?php echo e($item->installment_value); ?></a></td>
            
            <td class="text-xl-center">
                <a class="btn btn-info btn-sm" href="<?php echo e(url('editCustomer/'.$item->id)); ?>">تعديل الدفعة</ac>
            </td>

        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/payments/paymentsTable.blade.php ENDPATH**/ ?>
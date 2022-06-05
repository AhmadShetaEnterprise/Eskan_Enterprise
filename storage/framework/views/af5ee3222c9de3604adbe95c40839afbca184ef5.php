

<?php $__env->startSection('content'); ?>

    <div class="card" style="width: ;">
        <div class="card-header text-lg-center text-danger row">
            <div class="col-lg-4">
                <img src="..." class="card-img-top" alt="...">
            </div>

            <div class="col-lg-4">
                <h1 class=" bg-primary">
                    <?php echo e($unit->name); ?>

                </h1>
            </div>

            <div class="col-lg-4">
                <a href="<?php echo e(url('searchConstruction/'.$unit->constructions->id.'/?status='.$unit->status)); ?> "
                <?php if($unit->status == 'خالية'): ?> class="btn btn-success m-2" style="width: 125px;height: 40px"
                <?php elseif($unit->status == 'تعاقد'): ?> class="btn btn-danger m-2" style="width: 125px;height: 40px"
                <?php elseif($unit->status == 'محجوزة'): ?> class="btn btn-warning m-2" style="width: 125px;height: 40px"
                <?php else: ?> class="btn btn-outline-danger m-2" style="width: 125px;height: 40px"
                <?php endif; ?>
                    class="btn btn-outline-info m-2" style="width: 125px;height: 40px"><?php echo e($unit->status); ?>

                </a>
            </div>
        </div>
        <div class="">
            <div class="card-body col-lg-12"  style="width: 20rem;">
                <div class="col-lg-8">
                    <table>
                        <thead>
                            <tr>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">
                                    
                                <?php if(!empty($unit)): ?>

                                    <?php if($unit->status == 'خالية'): ?> حجز

                                    <?php elseif($unit->status == 'تعاقد'): ?> العميل

                                    <?php elseif($unit->status == 'محجوزة'): ?> العميل

                                    <?php elseif($unit->status == 'محجوزة'): ?> العميل

                                    <?php else: ?> حجز

                                    <?php endif; ?>

                                <?php else: ?> العميل

                                <?php endif; ?>

                                </h6>
                                </th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">النشروع الرئيسي </h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">المنشأة  </h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">الموقع</h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">المساحة</h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">سعر المتر</h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">سعر الوحدة</h6></th>
                                <th><h6 class="m-2 p-2 bg-dark text-lg-center">الدور</h6></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                            <?php if($unit->status == 'خالية'): ?>
                                <td>
                                    <a href="<?php echo e(url('editUnitStatus/'.$unit->id)); ?>" class="btn btn-outline-success m-2" style="width: 125px">
                                        حجز
                                    </a>
                                </td>
                                <?php elseif($unit->status == 'تعاقد'): ?>
                                <td>
                                    <a href="<?php echo e(url('customerShow/'.$unit->customers->id)); ?>" class="btn btn-outline-danger m-2 d-inline-block" style="font-size:1vw;">
                                        <?php echo e($unit->customers->name); ?>

                                    </a>
                                </td>
                                <?php elseif($unit->status == 'محجوزة'): ?>
                                <td>
                                    <a href="<?php echo e(url('customerShow/'.$unit->customers->id)); ?>" class="btn btn-outline-warning m-2" style="width: 125px">
                                        <?php echo e($unit->customers->name); ?>

                                    </a>
                                </td>
                                <?php else: ?>
                                <td>
                                    <a href="<?php echo e(url('editUnitStatus/'.$unit->id)); ?>" class="btn btn-outline-danger m-2" style="width: 125px">
                                        حجز
                                    </a>
                                </td>
                            <?php endif; ?>
                                <td><a href="<?php echo e(url('show_main_project/'.$unit->main_projects->id)); ?>" class="btn btn-outline-success m-2" style="width: 125px"><?php echo e($unit->main_projects->name); ?></a></td>
                                <td><a href="<?php echo e(url('show_main_project/'.$unit->constructions->id)); ?>" class="btn btn-outline-success m-2" style="width: 125px"><?php echo e($unit->constructions->name); ?></a></td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($unit->site); ?></a></td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($unit->space); ?></a></td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($unit->price_m); ?></a></td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($unit->unit_price); ?></a></td>
                                <td><a href="<?php echo e(route('showLevel', ['id'=>$unit->level_id-1, 'constructions'=>$unit->constructions->id])); ?>" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($unit->levels->name); ?></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>المدفوعات</h3>
                <td><a href="#" class="btn btn-info m-2" style="width: 125px">قيمة الوحدة</a> </td>--------->
                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($unit->unit_price); ?></a> </td>

                <table>
                    <thead>
                        <tr>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">المدفوع</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">اسم الدفعة</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">اجمالي الدفعات</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">المتبقي</h6></th>
                            <th><h6 class="m-2 p-2 bg-dark text-lg-center">نظام الدفع</h6></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($payments)  && $payments->isNotEmpty()): ?>
                        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                            <tr>
                                <?php if(is_null($payment->finance) || $payments->isEmpty()): ?>
                                <td><a href="#" class="btn btn-outline-info m-2 d-inline-block" style="font-size: 1vw">لا يوجد  </a> </td>

                                <?php else: ?>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($payment->payment_value); ?></a></td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($payment->paymentKind->name); ?></a> </td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($payment->unit->unit_price - $payment->residual); ?></a> </td>
                                <td><a href="#" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($payment->residual); ?></a> </td>
                                <?php if(is_null($payment->finance)): ?>

                                <td><a href="" class="btn btn-outline-info m-2 d-inline-block" style="font-size: 1vw">لا يوجد  </a></td>
                                <?php else: ?>
    
                                <td><a href="<?php echo e(url('financeShow/'.$payment->finance_id)); ?>" class="btn btn-outline-info m-2" style="width: 125px"><?php echo e($payment->finance->name); ?></a></td>
                                <?php endif; ?>
                            </tr>
                            <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        <?php for($i = 0; $i < $count=  $payment->installments; $i++): ?>
                        <?php endfor; ?>



                        <?php if(isset($installments) && !empty($installments)): ?>
                            <?php $__currentLoopData = $installments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $installment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $months_array = [];
                                    $months_array[] = $installment->installment_month;
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if(!empty($months_array)): ?>
                        <tr>
                            <td>
                                <div class="d-inline-flex">
                                    <?php $__currentLoopData = $payment->customer->installments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $installment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <input type="text" name="" class="form-control btn btn-success m-1 text-dark" style="width: 125px" value="<?php echo e($installment->installment_value); ?>">
                                        <input type="hidden" name="" class="form-control" value="<?php echo e($payment->customer_id); ?>">
                                        <input type="hidden" name="" class="form-control" value="<?php echo e($payment->unit_id); ?>">
                                        <input type="hidden" name="" class="form-control" value="<?php echo e($payment->property_id); ?>">
                                        <input type="hidden" name="" class="form-control" value="<?php echo e($payment->main_project_id); ?>">
                                        <input type="hidden" name="" class="form-control" value="<?php echo e($payment->construction_id); ?>">
                                        <input type="hidden" name="" class="form-control" value="<?php echo e($payment->level_id); ?>">
                                    <a type="" class="btn btn-success m-1 text-dark" style="width: 200px;height:40px">تم دفع شهر<?php echo e(date('m-Y')); ?></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                        <tr>
                            <td>
                                <form action="<?php echo e(url('insertInstallment')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="d-inline-flex">
                                            <input type="text" name="installment_value" class="form-control m-1" style="width: 125px" value="<?php echo e($payment->installment_value); ?>">
                                            
                                            <div class="d-inline-flex m-1">
                                                <select class="folm-select " name="month" id="" style="width: 50px;height:40px">
                                                    <option value="">شهر</option>
                                                    <?php
                                                        $months = ['01','02','03','04','05','06','07','08','09','10','11','12']
                                                    ?>
                                                    <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($month); ?>"><?php echo e($month); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <select class="folm-select ml-1" name="year" id="" style="width: 100px;height:40px">
                                                    <option value="<?php echo e(date('Y')); ?>"><?php echo e(date('Y')); ?></option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="customer_id" class="form-control" value="<?php echo e($payment->customer_id); ?>">
                                            <input type="hidden" name="unit_id" class="form-control" value="<?php echo e($payment->unit_id); ?>">
                                            <input type="hidden" name="property_id" class="form-control" value="<?php echo e($payment->property_id); ?>">
                                            <input type="hidden" name="main_project_id" class="form-control" value="<?php echo e($payment->main_project_id); ?>">
                                            <input type="hidden" name="construction_id" class="form-control" value="<?php echo e($payment->construction_id); ?>">
                                            <input type="hidden" name="level_id" class="form-control" value="<?php echo e($payment->level_id); ?>">
                                        <button type="submit" class="btn btn-warning mt-1" style="width: 200px;height:40px">دفع شهر اخر</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                            <?php else: ?>

                        <tr>
                            <td>
                                <form action="<?php echo e(url('insertInstallment')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="d-inline-flex">
                                            <input type="text" name="installment_value" class="form-control m-1" style="width: 125px" value="<?php echo e($payment->installment_value); ?>">
                                            <input type="text" name="installment_month" class="form-control m-1" style="width: 125px" value="<?php echo e(date('m-Y')); ?>">
                                            <input type="hidden" name="customer_id" class="form-control" value="<?php echo e($payment->customer_id); ?>">
                                            <input type="hidden" name="unit_id" class="form-control" value="<?php echo e($payment->unit_id); ?>">
                                            <input type="hidden" name="property_id" class="form-control" value="<?php echo e($payment->property_id); ?>">
                                            <input type="hidden" name="main_project_id" class="form-control" value="<?php echo e($payment->main_project_id); ?>">
                                            <input type="hidden" name="construction_id" class="form-control" value="<?php echo e($payment->construction_id); ?>">
                                            <input type="hidden" name="level_id" class="form-control" value="<?php echo e($payment->level_id); ?>">
                                        <button type="submit" class="btn btn-warning mt-1" style="width: 100px;height:40px">دفع</button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <a href="<?php echo e(url('addUnitPayment/'.$unit->id)); ?>" class="btn btn-success d-inline-block" >
                                    دفعة جديدة
                                </a>
                            </td>
                        </tr>
                            <?php endif; ?>

                        <?php endif; ?>

                    <?php else: ?>
                    <tr>
                        <td>
                            <a href="<?php echo e(url('addUnitPayment/'.$unit->id)); ?>" class="btn btn-success d-inline-block" >
                                دفعة جديدة
                            </a>
                        </td>
                    </tr>
                    <?php endif; ?>


            </div>
        </div>
        <div class="d-inline-flex">
            <div class="col-lg-8 m-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th><h6 class="m-1 p-1 bg-danger text-lg-center" style="font-size: 20px">نظام الدفع</h6></th>
                            <th><h6 class="m-1 p-1 bg-primary text-lg-center" style="font-size: 20px">مقدم</h6></th>
                            <th><h6 class="m-1 p-1 bg-secondary text-lg-center" style="font-size: 20px">دفعة تراخيص</h6></th>
                            <th><h6 class="m-1 p-1 bg-warning text-lg-center" style="font-size: 20px">دفعة بدأ اعمال</h6></th>
                            <th><h6 class="m-1 p-1 bg-success text-lg-center" style="font-size: 20px">دفعة تسليم</h6></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $finances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><a class="m-1 p-1 text-lg-center btn btn-outline-danger" style="width: 10rem" href=""><?php echo e($item->name); ?></a></td>
                            <td><a class="m-1 p-1 text-lg-center btn btn-outline-primary" style="width: 10rem" href=""><?php echo e($item->space_payment); ?></a></td>
                            <td><a class="m-1 p-1 text-lg-center btn btn-outline-secondary" style="width: 10rem" href=""><?php echo e($item->licences_payment); ?></a></td>
                            <td><a class="m-1 p-1 text-lg-center btn btn-outline-warning" style="width: 10rem" href=""><?php echo e($item->start_payment); ?></a></td>
                            <td><a class="m-1 p-1 text-lg-center btn btn-outline-success" style="width: 10rem" href=""><?php echo e($item->recieving_payment); ?></a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPanelApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eskan enterprise\resources\views/admins/units/unitShow.blade.php ENDPATH**/ ?>
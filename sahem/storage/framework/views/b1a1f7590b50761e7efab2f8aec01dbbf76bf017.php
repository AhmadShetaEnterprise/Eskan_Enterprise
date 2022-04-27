<?php $__env->startSection('content'); ?>

    <div class="container">

        <form class="d-flex flex-column align-items-center my-5">
            <img class="mb-3" src="assets/images/login-avater.png" width="200" alt="" srcset="">

            <div class="form-group mb-3">
                <input type="text" class="form-control" id="name" placeholder="الاسم: .......">
            </div>

            <div class="form-group mb-3">
                <input type="text" class="form-control" id="phone" placeholder="رقم الهاتف: .......">
            </div>


            <div class="form-group mb-3">
                <input type="text" class="form-control" id="address" placeholder="العنوان : .......">
            </div>

            <div class="form-group mb-3">
                <input type="text" class="form-control" id="id" placeholder="الرقم القومى : .......">
            </div>

            <div class="form-group mb-3">
                <input type="text" class="form-control" id="email" placeholder="البريد الالكترونى: ....">
            </div>

            <div class="form-group mb-3">
                <input type="password" class="form-control" id="pass" placeholder="الرقم السرى: .......">
            </div>

            <div class="form-group mb-3">
                <input type="password" class="form-control" id="confirm" placeholder="تأكيد الرقم السرى: ........">
            </div>

            <button class="btn btn-primary btn-rounded btn-xlarge mt-3">
                <span class="font-25">
                    تسجبل
                </span>
            </button>


            <a href="./login.html" class="mt-3">
                <span class="text-primary font-40 font-bold cursor-pointer">
                    تملك حساب تسجيل الدخول؟
                </span>
            </a>

        </form>

    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.appUsers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\sahem\resources\views/users/myRegister.blade.php ENDPATH**/ ?>
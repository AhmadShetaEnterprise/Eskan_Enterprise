<?php $__env->startSection('content'); ?>


    <div class="container">

        <form class="d-flex flex-column align-items-center my-5">
            <img src="assets/images/login-avater.png" width="200" alt="" srcset="">
            <div class="form-group">
                <label for="email" class="form-label mt-4">البريد الالكترونى:</label>
                <input type="text" class="form-control" id="email" placeholder="username@email.com">
            </div>
            <div class="form-group">
                <label for="pass" class="form-label mt-4">الرقم السرى:</label>
                <input type="password" class="form-control" id="pass" placeholder="Password">
            </div>

            <button class="btn btn-primary btn-rounded btn-large mt-3">
                <span class="font-25 mx-3">
                    تسجبل الدخول
                </span>
            </button>

            <a href="/myRegister">
                <span class="text-primary mt-3 font-40 font-bold cursor-pointer">
                    تسجبل حساب جديد
                </span>
            </a>
        </form>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appUsers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\sahem\resources\views/users/myLogin.blade.php ENDPATH**/ ?>
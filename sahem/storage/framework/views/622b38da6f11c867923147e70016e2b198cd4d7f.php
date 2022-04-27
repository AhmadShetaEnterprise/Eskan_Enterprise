<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahem</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
</head>

<body dir="rtl">

<?php echo $__env->make('layouts.includes.usersNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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

            <a href="/register">
                <span class="text-primary mt-3 font-40 font-bold cursor-pointer">
                    تسجبل حساب جديد
                </span>
            </a>
        </form>

    </div>


    <?php echo $__env->make('layouts.includes.usersFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script src="assets/js/bootstrap.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\GitHub\sahem\resources\views/users/login.blade.php ENDPATH**/ ?>
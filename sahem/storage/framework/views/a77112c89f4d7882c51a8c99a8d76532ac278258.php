<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          e-shop
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php echo e(Request::is('dashboard') ? 'active' : ''); ?> ">
            <a class="nav-link" href="<?php echo e(url('dashboard')); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php echo e(Request::is('dashboard#') ? 'active' : ''); ?> ">
            <a class="nav-link" href="dashboard#">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item <?php echo e(Request::is('categories') ? 'active' : ''); ?> ">
            <a class="nav-link" href="<?php echo e(url('categories')); ?>">
              <i class="material-icons">content_paste</i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item <?php echo e(Request::is('products') ? 'active' : ''); ?> ">
            <a class="nav-link" href="<?php echo e(url('products')); ?>">
              <i class="material-icons">content_paste</i>
              <p>Products</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
<?php /**PATH C:\xampp\htdocs\GitHub\sahem\resources\views/layouts/includes/adminSidebar.blade.php ENDPATH**/ ?>
<!-- Header -->
/*<style media="screen">
  .nav-item .fa{
    font-size: 20px;
  }
</style>
<div class="site-header">
  <nav class="navbar navbar-dark">
    <div class="navbar-left">
      <div class="toggle-button dark sidebar-toggle-first float-xs-left hidden-md-up">
        <span class="hamburger"></span>
      </div>
      <div class="toggle-button-second dark float-xs-right hidden-md-up">
        <i class="ti-arrow-right"></i>
      </div>
      <div class="toggle-button dark float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
        <span class="more"></span>
      </div>
    </div>
   <div class="col-md-1"></div>
    <div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">

      <ul class="nav navbar-nav  float-md-left" >
        <li class="nav-item dropdown hidden-sm-down">
          <a href="#" data-toggle="dropdown" aria-expanded="false">
            <span class="avatar box-32">
             <img src="/UploadedImages/users/<?php echo e(Auth::user()->profileImage); ?>" style="width: 40px; height: 40px;">
            </span>&nbsp;&nbsp;&nbsp;
            <!-- <span style="color: white"><?php echo e(Auth::user()->name); ?> </span> -->
          </a>
          <div class="dropdown-menu dropdown-menu-right animated fadeInUp">
            <a class="dropdown-item" href="<?php echo e(route('profile')); ?>">
                <i class="ti-user mr-0-5"></i> پروفایل
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  <i class="ti-power-off mr-0-5"> خروج</i>
              </a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
              </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"> <i class="ti-help mr-0-5"> راهنمایی </i></a>
          </div>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-flag"></i>
            <span class="hidden-md-up ml-1">اطلاعیه ها</span>
            <span class="tag tag-success top">3</span>
          </a>
          <?php echo $__env->make('notification.notificationList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-envelope"></i>
            <span class="hidden-md-up ml-1">پیامک ها</span>
            <span class="tag tag-danger top">0</span>
          </a>
          <?php echo $__env->make('chat.chatList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user-plus"></i>
            <span class="hidden-md-up ml-1">درخواست ها</span>
            <?php if($freindRequestList->count() != 0): ?>
            <span class="tag tag-info top"><?php echo e($freindRequestList->count()); ?></span>
            <?php endif; ?>
          </a>
          <?php echo $__env->make('friends.friendRequestList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link"  href="#friendList" data-toggle="modal">
            <i class="fa fa-users"></i>
            <span class="hidden-md-up ml-1">کاربران</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#favorites" data-toggle="modal">
            <i class="fa fa-heart"></i>
            <span class="hidden-md-up ml-1">رابطه ها</span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#adsList" data-toggle="modal">
            <i class="fa fa-shopping-bag"></i>
            <span class="hidden-md-up ml-1">نیازمندی ها</span>
          </a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link" href="#addNewAds" data-toggle="modal">
            <i class="fa fa-bullhorn"></i>
            <span class="hidden-md-up ml-1">ثبت آگاهی</span>
          </a>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link" href="<?php echo e(route('home')); ?>" >
            <i class="fa fa-home"></i>
            <span class="hidden-md-up ml-1">خانه</span>
          </a>
        </li>


      </ul>

      <div class="col-lg-2"></div>
      <div class="header-form  float-md-left ml-lg-4">
        <form method="POST" action="<?php echo e(route('search')); ?>">
          <?php echo e(csrf_field()); ?>

          <button type="submit" class="btn bg-white b-a-0" style="border-radius: 50%; height: 35px">
            <i class="ti-search" ></i>
          </button>
          <input type="text" name="keyword" class="form-control" placeholder="جستجو..." required style="border-radius: 20px 20px 20px 20px; height: 40px">
        </form>
      </div>

    </div>
  </nav>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/layouts/header.blade.php ENDPATH**/ ?>
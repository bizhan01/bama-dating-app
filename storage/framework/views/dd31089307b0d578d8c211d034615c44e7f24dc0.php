
<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
			<div class="col-lg-4 col-md-4 col-sm-4"></div>
      <div class="col-md-4">
        <div class="box bg-white user-1">
          <div class="u-img img-cover" style="background-image: url(img/photos-1/4.jpg);"></div>
          <div class="u-content">
            <div class="avatar box-64">
                <img class="b-a-radius-circle shadow-white" src="/UploadedImages/<?php echo e(Auth::user()->profileImage); ?>" alt="">
              <i class="status bg-success bottom right"></i>
            </div>
            <h5><a class="text-black" href="#"><?php echo e(Auth::user()->name); ?></a></h5>
            <p class="text-muted pb-0-5">Admin</p>
            <div class="text-xs-center pb-0-5">
              <button type="submit" class="btn btn-primary btn-rounded mr-0-5">Profile</button>
              <!-- <button type="submit" class="btn btn-danger btn-rounded">خروج از سیستم</button> -->
              <a  href="<?php echo e(route('logout')); ?>"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  <button type="submit" class="btn btn-danger btn-rounded">Log Out</button>
              </a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
              </form>
            </div>
          </div>
          <div class="u-counters">
            <div class="row no-gutter">
              <div class="col-xs-12 uc-item">
                <a class="text-black" href="#">
                  <strong>Date</strong> <br>
                  <strong><?php echo date('Y-m-d') ?></strong>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row row-md">
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-info mb-2">
          <div class="t-icon right"><i class="fa fa-users"></i></div>
          <div class="t-content">
            <h1 class="mb-1"><?php echo e($uncompletedOrders); ?></h1>
            <h6 class="text-uppercase">All Orders</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-success mb-2">
          <div class="t-icon right"><i class="fa fa-file"></i></div>
          <div class="t-content">
            <h1 class="mb-1"><?php echo e($completedOrders); ?></h1>
            <h6 class="text-uppercase">Completed Orders</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-primary  mb-2">
          <div class="t-icon right"><i class="fa fa-diamond"></i></div>
          <div class="t-content">
            <h1 class="mb-1"><?php echo e($allApplications); ?></h1>
            <h6 class="text-uppercase">All Applications</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-info mb-2">
          <div class="t-icon right"><i class="fa  fa-pie-chart"></i></div>
          <div class="t-content">
            <h1 class="mb-1"><?php echo e($qualifiedApplications); ?></h1>
            <h6 class="text-uppercase">Qualified</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/adminDashborad.blade.php ENDPATH**/ ?>
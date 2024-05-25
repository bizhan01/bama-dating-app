<div class="col-md-12">
  <div class="card" style="border-radius: 8px !important;">
    <div class="card-header text-uppercase" style="border-radius: 8px !important;"><b>دوستان من</b></div>
    <div class="items-list">
    <?php $__currentLoopData = $myFreindsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myFreind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="il-item">
        <a class="text-black" href="#">
          <div class="media">
            <div class="media-left">
              <div class="avatar box-48">
                <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$myFreind->profileImage); ?>" alt="">
                <i class="status bg-success bottom right"></i>
              </div>
            </div>
            <div class="media-body">
              <h6 class="media-heading"><?php echo e($myFreind->name); ?> <?php echo e($myFreind->lastName); ?></h6>
              <span class="text-muted"><?php echo e($myFreind->bio); ?></span>
            </div>
          </div>
          </a>
        <div class="il-icon">
          <form method="POST" action="/favorite/<?php echo e($myFreind->id); ?>" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <button type="submit" style="border: 0px solid white; background: #f5f5f5"><i class="fa fa-heart ml-0-5 text-danger"></i></button>
          </form>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="card-block">
      <button type="submit" class="btn btn-primary btn-block">نمایش همه</button>
    </div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/friends/whoToFollow.blade.php ENDPATH**/ ?>
<div class="dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
  <div class="items-list">
      <?php $__currentLoopData = $freindRequestList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $freind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="il-item">
          <a class="text-black" href="#">
            <div class="media">
              <div class="media-left">
                <div class="avatar box-48">
                  <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$freind->profileImage); ?>" alt="">
                  <i class="status bg-success bottom right"></i>
                </div>
              </div>
              <div class="media-body">
                <h6 class="media-heading"><?php echo e($freind->name); ?> <?php echo e($freind->lastName); ?></h6>
                <span class="text-muted">میخواهد با شما دوست شود</span>
              </div>
            </div>
            </a>
          <div class="il-icon">
            <form method="POST" action="/acceptRequest/<?php echo e($freind->id); ?>" enctype="multipart/form-data">
              <input type="hidden" name ="_token" value = "<?php echo csrf_token(); ?>">
              <button type="submit" class="btn btn-outline-success btn-rounded">تایید <i class="ti-check ml-0-5"></i></button>
            </form>
          </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <a class="dropdown-more" href="#">
    <strong>نمایش همه</strong>
  </a>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/friends/friendRequestList.blade.php ENDPATH**/ ?>
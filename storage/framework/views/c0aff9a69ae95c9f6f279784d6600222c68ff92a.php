
<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-1"></div>
      <div class="col-md-2">
        <?php echo $__env->make('search.advanced_search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="col-md-4">
        <?php echo $__env->make('search.searchBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="box box-block bg-white">
          <div class="items-list">
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('friends.userProfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="il-item">
                <a href="#userProfile_<?php echo e($user->id); ?>"  title="Info" data-toggle='modal'>
                  <div class="media">
                    <div class="media-left">
                      <div class="avatar box-48">
                        <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$user->profileImage); ?>" alt="">
                        <i class="status bg-success bottom right"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading"><?php echo e($user->name); ?> <?php echo e($user->lastName); ?></h6>
                      <span class="text-muted"><?php echo e($user->bio); ?></span>
                    </div>
                    <div class="media-body" dir="ltr">
                      <button type="button" class="btn bg-facebook btn-circle mx-0-5" data-toggle="tooltip" data-placement="bottom" data-title="Facebook">
                        <i class="fa fa-user-plus"></i>
                      </button>
                      <button type="button" class="btn bg-twitter btn-circle mx-0-5" data-toggle="tooltip" data-placement="bottom" data-title="Twitter">
                        <i class="fa fa-paper-plane"></i>
                      </button>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/search/people_search_result.blade.php ENDPATH**/ ?>
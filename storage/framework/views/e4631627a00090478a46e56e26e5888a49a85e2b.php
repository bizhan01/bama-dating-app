<div class="col-md-12">
  <div class="card" style="border-radius: 8px !important;">
    <div class="card-header text-uppercase" style="border-radius: 8px !important;"><b>دوستان من</b></div>
    <div class="items-list">
      <table class="table mb-md-0 ">
        <?php $__currentLoopData = $myFreindsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myFreind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr style="padding: 5px">
            <td>
              <div class="media-left">
                <div class="avatar box-48">
                  <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$myFreind->profileImage); ?>" alt="">
                  <i class="status bg-success bottom right"></i>
                </div>
              </div>
            </td>
            <td colspan="3">
              <div class="media-body">
                <h6 class="media-heading"><?php echo e($myFreind->name); ?> <?php echo e($myFreind->lastName); ?></h6>
                <!-- <span class="text-muted"><?php echo e($myFreind->bio); ?></span> -->
              </div>
            </td>
            <td>
              <form method="POST" action="/favorite/<?php echo e($myFreind->user_id); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <?php if($myFreind->favorite == 0): ?>
                    <button type="submit" style="border: 1px solid transparent; background-color: transparent; color: black"><i class="fa fa-heart-o ml-0-5"></i></button>
                  <?php else: ?>
                    <button type="submit" style="border: 1px solid transparent; background-color: transparent; color: red"><i class="fa fa-heart ml-0-5"></i></button>
                  <?php endif; ?>
              </form>
            </td>
            <td>
              <form action="<?php echo e(route('startConversation')); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

                <input type="hidden" name="user2_id" value="<?php echo e($myFreind->id); ?>">
                <button type="submit" style="border: 1px solid transparent; background-color: transparent; color: #00ffeafc">
                  <i class="fa fa-paper-plane"></i>
                </button>
              </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
    <div class="card-block">
      <button type="submit" class="btn btn-primary btn-block">نمایش همه</button>
    </div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/friends/myFreindsList.blade.php ENDPATH**/ ?>
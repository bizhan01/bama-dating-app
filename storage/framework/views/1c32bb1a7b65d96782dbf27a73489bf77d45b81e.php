<div class="card">
  <div class="card-block">
    <div class="avatars ">
      <?php $__currentLoopData = $usersList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('friends.userProfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <a href="#userProfile_<?php echo e($user->id); ?>"  title="Info" data-toggle='modal'>
          <div class="avatar box-48 mr-0-75">
            <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$user->profileImage); ?>" alt="">
            <span class="status bg-success top right"></span>
          </div>
        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/friends/people.blade.php ENDPATH**/ ?>
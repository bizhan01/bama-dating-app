<div class="dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
  <div class="items-list">
      <?php $__currentLoopData = $conversationSender; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($conversation->user1_id == Auth::user()->id): ?>
            <div class="il-item">
              <a href="#messages_<?php echo e($conversation->id); ?>"  title="Info" data-toggle='modal'>
                <div class="media">
                  <div class="media-left">
                    <div class="avatar box-48">
                      <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$conversation->profileImage); ?>" alt="">
                      <i class="status bg-success bottom right"></i>
                    </div>
                  </div>
                  <div class="media-body">
                    <h6 class="media-heading"><?php echo e($conversation->name); ?> <?php echo e($conversation->lastName); ?></h6>
                    <span class="text-muted">سلام</span>
                  </div>
                </div>
              </a>
            </div>
          <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php $__currentLoopData = $conversationReciever; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($conversation->user2_id == Auth::user()->id): ?>
          <div class="il-item">
            <a href="#messages_<?php echo e($conversation->id); ?>"  title="Info" data-toggle='modal'>
              <div class="media">
                <div class="media-left">
                  <div class="avatar box-48">
                    <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$conversation->profileImage); ?>" alt="">
                    <i class="status bg-success bottom right"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h6 class="media-heading"><?php echo e($conversation->name); ?> <?php echo e($conversation->lastName); ?></h6>
                  <span class="text-muted">سلام</span>
                </div>
              </div>
            </a>
          </div>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <a class="dropdown-more" href="#">
    <strong>نمایش همه</strong>
  </a>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/chat/chatList.blade.php ENDPATH**/ ?>
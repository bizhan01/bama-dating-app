<!-- Messages -->
<div class="modal fade" id="messages_<?php echo e($conversation->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="box bg-white messenger">
        <div class="row no-gutter">
          <div class="col-xs-12">
            <div class="m-chat">
              <div class="m-header">
                <div class="media">
                  <div class="media-body">
                    <h6 class="media-heading mb-0"><?php echo e($conversation->name); ?> <?php echo e($conversation->lastName); ?></h6>
                    <!-- <span class="font-90 text-muted">Last seen 2 hours ago</span> -->
                  </div>
                  <div class="media-right">
                    <div class="mh-links">
                      <a class="text-grey" href="#"><i class="fa fa-phone"></i></a>
                      <a class="text-grey" href="#"><i class="fa fa-video-camera"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <?php $__currentLoopData = $messages->where('conversation_id', $conversation->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($message->user_id == Auth::user()->id): ?>
                <div class="mc-item left clearfix">
                  <div class="avatar box-48">
                    <img class="b-a-radius-circle" src="/UploadedImages/users/<?php echo e(Auth::user()->profileImage); ?>" alt="">
                  </div>
                  <div class="mc-content">
                    <?php echo e($message->content); ?>

                    <!-- <div class="font-90 text-xs-right text-muted">14:20</div> -->
                  </div>
                </div>
                <?php else: ?>
                <div class="mc-item right clearfix">
                  <div class="avatar box-48">
                    <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$conversation->profileImage); ?>" alt="">
                  </div>
                  <div class="mc-content">
                    <?php echo e($message->content); ?>

                    <!-- <div class="font-90 text-xs-right text-muted">14:23</div> -->
                  </div>
                </div>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
            <div class="m-form">
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <form class="mf-compose" action="<?php echo e(route('sendMessage')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                    <input type="hidden" name="conversation_id" value="<?php echo e($conversation->id); ?>">
                    <input name="content" class="form-control" type="text" placeholder="پیام شما...">
                    <button class="btn btn-success btn-rounded" type="submit">ارسال</button>
                  </form>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/chat/messagesBox.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
		 	<?php echo $__env->make('ads.addAds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="col-md-3">
        <?php echo $__env->make('friends.myProfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('friends.myFreindsList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>

      <div class="col-md-4">
        <!--Post Section-->
        <div class="box box-block bg-white">
          <div class="box bg-white post post-1">
            <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="p-content">
             <div class="input-group input-rounded input-group-lg">
               <div class="input-group-btn">
                 <span class="avatar box-32">
                   <img src="/UploadedImages/users/<?php echo e(Auth::user()->profileImage); ?>" style="width: 40px; height: 40px; margin-left: 5px">
                 </span>
              </div>
              <?php echo $__env->make('post.addPost', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <a href="#addNewPost" data-toggle="modal">
               <input type="text" readonly class="form-control" placeholder="دل نوشته ها تو شریک بساز..." style="border-radius: 20px 20px 20px 20px; height: 40px">
              </a>
            </div>
            </div>
          </div>
        </div>
        <!--Post Section-->
        <?php $__currentLoopData = $conversationSender; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo $__env->make('chat.messagesBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $conversationReciever; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo $__env->make('chat.messagesBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php echo $__env->make('ads.adsList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('friends.friendsList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('friends.favorites', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('friends.people', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('post.postList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="col-md-3" >
        <?php echo $__env->make('ads.advertisements', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/normalUser.blade.php ENDPATH**/ ?>
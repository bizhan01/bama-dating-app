<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('post.postInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="box box-block bg-white">
  <div class="box bg-white post post-1">
    <div class="p-content">

      <div class="il-item">
        <a class="text-black" href="#">
          <div class="media">
            <div class="media-left">
              <div class="avatar box-48">
                <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$post->profileImage); ?>" alt="">
                <i class="status bg-success bottom right"></i>
              </div>
            </div>
            <div class="media-body">
              <h6 class="media-heading"><?php echo e($post->name); ?> <?php echo e($post->lastName); ?></h6>
              <span class="text-muted"><?php echo e($post->bio); ?></span>
            </div>
          </div>
        </a>
      </div>

      <h5><a class="text-black" href="#"></a></h5>
      <p class="mb-0">
        <?php
           $limitedDescription = substr($post->post_description, 0, 300);
           echo $limitedDescription;
        ?>
        <a class="text-primary" href="#postInfo_<?php echo e($post->id); ?>" title="Info" data-toggle='modal'>
        <span class="underline">بیشتر بخوانید</span>
      </a></p>
    </div>
    <div class="p-img img-cover" style="background-image: url(/UploadedImages/posts/<?php echo e($post->post_img); ?>);">
      <!-- <div class="p-info clearfix">
        <div class="float-xs-left">
          <span class="small text-uppercase"><?php echo e($post->created_at); ?></span>
        </div>
        <div class="float-xs-right">
          <span class="mr-1"><i class="fa fa-heart"></i>57</span>
          <span><i class="fa fa-comment"></i>14</span>
        </div>
      </div> -->
    </div>

  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/post/postList.blade.php ENDPATH**/ ?>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="box box-block bg-white">
  <div class="box bg-white post post-1">
    <div class="p-content">
      <a href="#"  aria-expanded="false">
        <span class="avatar box-32">
         <img src="UploadedImages/<?php echo e($post->profileImage); ?>" style="width: 40px; height: 40px;">
        </span>&nbsp;&nbsp;&nbsp;
        <?php echo e($post->name); ?>

      </a> <br></br>
      <h5><a class="text-black" href="#"></a></h5>
      <p class="mb-0"><?php echo e($post->post_description); ?><a class="text-primary" href="#">
        <span class="underline">بیشتر بخوانید</span></a></p>
    </div>
    <div class="p-img img-cover" style="background-image: url(/UploadedImages/posts/<?php echo e($post->post_img); ?>);">
      <span class="tag tag-danger">Lifestyle</span>
      <div class="p-info clearfix">
        <div class="float-xs-left">
          <span class="small text-uppercase"><?php echo e($post->created_at); ?></span>
        </div>
        <div class="float-xs-right">
          <span class="mr-1"><i class="fa fa-heart"></i>57</span>
          <span><i class="fa fa-comment"></i>14</span>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/post2/postList.blade.php ENDPATH**/ ?>
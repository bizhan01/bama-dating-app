<?php $__currentLoopData = $advertisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="box  post post-5 img-cover" style="background-image: url(/UploadedImages/adv/<?php echo e($adv->image); ?>);">
  <div class="p-content">
    <a href="/UploadedImages/adv/<?php echo e($adv->image); ?>"><span class="tag tag-purple">نمایش آگاهی</span></a>
    <div class="p-info clearfix">
      <div class="float-xs-left">
        <a class="text-white" href="#"><i class="fa  fa-thumbs-up"></i>57</a>
      </div>
      <div class="float-xs-right">
        <a class="text-white" href="#"><i class="fa fa-thumbs-down"></i>8</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/advertisement/advertisements.blade.php ENDPATH**/ ?>
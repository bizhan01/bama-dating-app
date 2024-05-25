<?php $__currentLoopData = $advertisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('ads.adsInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="card" style="border-radius: 10px !important; border: 2px solid linear-gradient(to right, red, yellow, green);">
  <a href="#info_<?php echo e($ads->id); ?>" title="Info" data-toggle='modal'>
    <img class="card-img-top " src="UploadedImages/ads/<?php echo e($ads->ads_img); ?>" height="250px" width="100%" alt="Card image cap" style="border-radius: 10px !important;">
  </a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/ads/advertisements.blade.php ENDPATH**/ ?>
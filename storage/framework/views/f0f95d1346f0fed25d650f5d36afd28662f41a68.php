<?php $__currentLoopData = $advertisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('ads.adsInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="col-md-4">
  <div class="box bg-white product product-4">
    <a class="p-img img-cover" style="background-image: url(UploadedImages/ads/<?php echo e($ads->ads_img); ?>);" href="#info_<?php echo e($ads->id); ?>" title="Info" data-toggle='modal'></a>
    <div class="p-content" >
      <h5><a class="text-black" href="#">
        <?php
           $limitedDescription = substr($ads->ads_title, 0, 30);
           echo $limitedDescription;
        ?>
      </a></h5>
      <!-- <div class="p-price">
        <span class="old">$126.5</span>
        <span class="text-danger">$99.99</span>
      </div> -->
    </div>
    <div class="p-links">
      <div class="row no-gutter">
        <div class="col-xs-4 pl-item">
          <a href="#edit_<?php echo e($ads->id); ?>" title="ویرایش" data-toggle='modal'>
            <i class="fa fa-edit text-success"></i>
          </a>
          <?php echo $__env->make('ads.editAds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-xs-4 pl-item">
          <a  href="#delete_<?php echo e($ads->id); ?>" title="حذف" data-toggle='modal'>
            <i class="ti ti-trash text-danger"></i>
          </a>
        </div>
        <?php echo $__env->make('ads.deleteAds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-xs-4 pl-item">
          <a href="#"><i class="ti-more"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/profile/my-ads.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-3"></div>
      <div class="col-md-4">
        <?php echo $__env->make('search.searchBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="modal-content">
            <div class="modal-body">
	      		<div class="container-fluid">
              <?php $__currentLoopData = $ads_results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php echo $__env->make('ads.adsInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="col-md-6">
                <div class="box bg-white product product-4">
                  <a class="p-img img-cover" style="background-image: url(UploadedImages/ads/<?php echo e($ads->ads_img); ?>);" href="#info_<?php echo e($ads->id); ?>" title="Info" data-toggle='modal'></a>
                  <div class="p-content" >
                    <h5><a class="text-black" href="#">
                      <?php
                         $limitedDescription = substr($ads->ads_title, 0, 30);
                         echo $limitedDescription;
                      ?>
                    </a></h5>
                  </div>
                  <div class="p-links">
                    <div class="row no-gutter">
                      <div class="col-xs-4 pl-item">
                        <a href="#"><i class="ti-shopping-cart"></i></a>
                      </div>
                      <div class="col-xs-4 pl-item">
                        <a href="#"><i class="ti-star"></i></a>
                      </div>
                      <div class="col-xs-4 pl-item">
                        <a href="#"><i class="ti-more"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
			    </div>
        </div>


      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/search/ads_search_result.blade.php ENDPATH**/ ?>
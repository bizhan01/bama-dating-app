<!-- Add New -->
<div class="modal fade" id="adsList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">نیازمندی ها</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <?php $__currentLoopData = $advertisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/ads/adsList.blade.php ENDPATH**/ ?>
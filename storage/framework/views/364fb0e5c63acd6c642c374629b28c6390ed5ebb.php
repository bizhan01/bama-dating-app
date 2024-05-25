
<?php $__env->startSection('content'); ?>
<!-- Start Content -->

<!-- Start Banner Hero -->
<div id="services_banner" class="bg-light w-100">
    <div class="container-fluid text-light d-flex justify-content-center align-items-center border-0 rounded-0 p-0 py-5">
        <div class="banner-content col-lg-8 m-lg-auto text-center py-5 px-3">
            <br></br>
            <br></br>
            <br></br>
        </div>
    </div>
</div>
<!-- End Banner Hero -->

<!-- Start Team Member -->
<section class="container py-5">
    <center><strong><h1>What Can We Do For You?</h1></strong></center><br></br>
    <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">
        <!-- <div class="col-lg-1"></div> -->
        <div class="col-lg-12 row">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="team-member col-lg-3 ">
              <div class="offline-indicator"></div>
                <center><img class="team-member-img  img-responsive rounded-circle  " src="<?php echo e(asset('../UploadedImages/services/').'/'.$service->service_img); ?>" alt="Card image"  style="border: 5px solid #355863; height: 300px; width: 300px"></center>
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li style="font-size: 30px; color: black"><b><?php echo e($service->service_title); ?></b></li>
                    <li>
                      <?php
                         $limitedDescription = substr($service->service_description, 0, 150);
                         echo $limitedDescription;
                       ?>...
                       <a  href="#delete_<?php echo e($service->id); ?>" title="Delete" data-toggle='modal'>Read More</a>
                       <?php echo $__env->make('website.singleServices', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </li>
                </ul>
            </div> <div class="col-lg-1"></div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- End Team Member -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.masterLayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/website/services.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<!-- Start Banner Hero -->
<div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
  <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
      <div class="banner-content col-lg-4 col-12 m-lg-auto text-center">
          <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Our Portfolio</h1>
          <br></br>
          <br></br>
      </div>
  </div>
</div>
<!-- End Banner Hero -->

<!-- Start Our Work -->
<section class="container py-5">

  <div class="row projects gx-lg-5">
    <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div  class="col-sm-6 col-lg-4 text-decoration-none project marketing" >
          <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
              <img class="card-img-top" src="<?php echo e(asset('../UploadedImages/portfolios/').'/'.$portfolio->service_img); ?>" alt="...">
              <div class="card-body">
                  <h5 class="card-title light-300 text-dark"><?php echo e($portfolio->service_title); ?></h5>
                  <p class="card-text light-300 text-dark">
                    <?php
                       $limitedDescription = substr($portfolio->service_description, 0, 150);
                       echo $limitedDescription;
                     ?>...
                  </p>
                  <a  href="#delete_<?php echo e($portfolio->id); ?>" title="Delete" data-toggle='modal'>Read More</a>
                  <?php echo $__env->make('website.singlePortfolio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>
          </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<!-- End Our Work -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.masterLayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/website/portfolio.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<!-- Start Banner Hero -->
<?php $__currentLoopData = $companyInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companyInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <section class="bg-light w-100">
      <div class="container">
          <div class="row d-flex align-items-center py-5">
              <div class="col-lg-6 text-start">
                  <h1 class="h2 py-5 text-primary typo-space-line">About Us</h1>
                  <p class="light-300">
                    <?php echo e($companyInfo->company_about); ?>

                  </p>
              </div>
              <div class="col-lg-6">
                  <img src="./website/img/banner-img-02.svg">
              </div>
          </div>
      </div>
  </section>
  <!-- End Banner Hero -->

  <!-- Start Aim -->

  <section class="banner-bg bg-white py-5" style="background-color: #e7e4e4 !important">
      <div class="container my-4" >
          <div class="row text-center">

              <div class="objective col-lg-4">
                  <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                      <i class="display-4 bx bxs-bulb text-light"></i>
                  </div>
                  <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Vision</h2>
                  <p class="light-300">
                    <?php echo e($companyInfo->company_vision); ?>

                  </p>
              </div>

              <div class="objective col-lg-4 mt-sm-0 mt-4">
                  <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                      <i class='display-4 bx bx-revision text-light'></i>
                  </div>
                  <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Mission</h2>
                  <p class="light-300">
                    <?php echo e($companyInfo->company_mission); ?>

                  </p>
              </div>

              <div class="objective col-lg-4 mt-sm-0 mt-4">
                  <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                      <i class="display-4 bx bxs-select-multiple text-light"></i>
                  </div>
                  <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Goal</h2>
                  <p class="light-300">
                    <?php echo e($companyInfo->company_goal); ?>

                  </p>
              </div>

          </div>
      </div>
  </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- End Aim -->



<!-- Start Team Member -->
<section class="container py-5">
  <center><h2 class="h2 py-5 "><u>Our Team</u></h2></center>
  <p class="text-muted light-300">
      At <a href="#">Giti Translations</a>, our greatest strength lies in the exceptional individuals who make up our dedicated team. We are a diverse group of language experts, united by our passion for breaking language barriers and fostering global connections.
  </p>
    <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">
        <div class="col-lg-12 row">
            <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="team-member col-md-4">
                  <img class="team-member-img img-fluid rounded-circle p-4" src="<?php echo e(asset('../UploadedImages/members/').'/'.$member->profile); ?>" alt="Card image">
                  <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                      <li><?php echo e($member->name); ?></li>
                      <li><?php echo e($member->position); ?></li>
                  </ul>
              </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- End Team Member -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.masterLayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/website/aboutUs.blade.php ENDPATH**/ ?>
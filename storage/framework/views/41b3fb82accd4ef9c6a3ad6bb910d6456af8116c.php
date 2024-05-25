
<?php $__env->startSection('content'); ?>

    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="py-5  row d-flex align-items-center" >
                          <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <br></br>
                            <br></br>
                              <h1 class="banner-heading font-background h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                <strong style="color: red; text-shadow: 2px 4px 1px rgba(0, 0, 0, 115.5); padding-left: 20px"> Coming Soon... </strong>
                            </h1>
                              <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="<?php echo e(route('ourOrder')); ?>" role="button">Order Now</a>
                          </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                      <div class="py-5  row d-flex align-items-center" >
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                          <br></br>
                          <br></br>
                            <h1 class="banner-heading font-background h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                              <strong style="color: red; text-shadow: 2px 4px 1px rgba(0, 0, 0, 115.5); padding-left: 20px">Quality Driven, Customer Focused </strong>
                          </h1>
                            <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="<?php echo e(route('ourOrder')); ?>" role="button">Order Now</a>
                        </div>
                      </div>

                    </div>
                    <div class="carousel-item">

                      <div class="py-5 row d-flex align-items-center" >
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                          <br></br>
                          <br></br>
                            <h1 class="banner-heading font-background  h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                              <strong style="color: red; text-shadow: 2px 4px 1px rgba(0, 0, 0, 115.5); padding-left: 20px"> Creating Opportunities, Driving Success </strong>
                          </h1>
                            <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="<?php echo e(route('ourOrder')); ?>" role="button">Order Now</a>
                        </div>
                      </div>

                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div><br>
    <!-- End Banner Hero -->


    <!-- Start View Work -->
    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bx bxs-box bx-lg'></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300">Our Service</h3>
                    <p class="light-300">"Unlocking Global Potential, One Translation at a Time"</p>
                </div>
                <div class="col-lg-3 col-12 pt-4">
                    <a href="<?php echo e(route('ourServices')); ?>" class="btn rounded-pill px-4 btn-outline-primary light-300">View Our Service</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End View Work -->

    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

            <!-- Start Recent Work -->
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                  <a href="<?php echo e(route('ourServices')); ?>" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                      <img class="service card-img" src="<?php echo e(asset('../UploadedImages/services/').'/'.$service->service_img); ?>" alt="Card image" height="250px">
                      <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                          <div class="service-work-content text-left text-light">
                              <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"><?php echo e($service->service_title); ?></span>
                              <p class="card-text">Read More</p>
                          </div>
                      </div>
                  </a>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- End Recent Work -->


        </div>
    </section>
    <!-- End Service -->






    <!-- Start View Work -->
    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                    <i class='display-1 bx bxs-box bx-lg'></i>
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300">"Bridging Cultures, Connecting Worlds"</h3>
                    <p class="light-300">"Your Trusted Partner for Global Communication"</p>
                </div>
                <div class="col-lg-3 col-12 pt-4">
                    <a href="<?php echo e(route('ourPortfolio')); ?>" class="btn rounded-pill px-4 btn-outline-primary light-300">View Our Work</a>
                </div>

            </div>
        </div>
    </section>
    <!-- End View Work -->

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

    <?php $__currentLoopData = $companyInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companyInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="banner-bg bg-white py-5">
        <div class="container my-4">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.masterLayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/website/welcome.blade.php ENDPATH**/ ?>
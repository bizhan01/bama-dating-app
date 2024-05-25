
<?php $__env->startSection('content'); ?>
<!-- Start pricing -->
<div class=" container-lg py-5">
    <div class="col-md-12 m-auto text-center py-5">
        <h1 class="pricing-header h2 semi-bold-600">Pricing</h1>
        <p class="pricing-footer">
            Affordable Excellence, Transparent Pricing
        </p>
    </div>


    <div class="row px-lg-3">

       <?php $__currentLoopData = $silver; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $silver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
              <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                  <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                      <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                      <h2 class="pricing-table-heading h5 semi-bold-600"><?php echo e($silver->title); ?></h2>
                      <p>$<?php echo e($silver->price); ?></p>
                      <ul class="pricing-table-body text-start  px-4 list-unstyled light-300">
                          <li><i class="bx bxs-circle me-2"></i><?php echo e($silver->start); ?> words</li>
                          <li><i class="bx bxs-circle me-2"></i><?php echo e($silver->end); ?> words</li>
                          <li><i class="bx bxs-circle me-2"></i>Translation </li>
                          <li><i class="bx bxs-circle me-2"></i>Word Type </li>
                      </ul>
                      <div class="pricing-table-footer pt-5">
                          <a href="<?php echo e(route('ourOrder')); ?>" class="btn rounded-pill px-4 btn-outline-primary light-300">Order Now</a>
                      </div>
                  </div>
              </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $golden; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golden): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
            <div class="pricing-table card bg-secondary h-100 card-rounded shadow-sm border-0 py-5">
                <div class="pricing-table-body card-body text-center text-white align-self-center p-md-0">
                    <i class="pricing-table-icon display-3 bx bx-package text-white py-3"></i>
                    <h2 class="pricing-table-heading h5 semi-bold-600"><?php echo e($golden->title); ?></h2>
                    <p>$<?php echo e($golden->price); ?></p>
                    <ul class="pricing-table-body text-start  px-4 list-unstyled light-300">
                        <li><i class="bx bxs-circle me-2"></i><?php echo e($golden->start); ?> words</li>
                        <li><i class="bx bxs-circle me-2"></i><?php echo e($golden->end); ?> words</li>
                        <li><i class="bx bxs-circle me-2"></i>Translation </li>
                        <li><i class="bx bxs-circle me-2"></i>Word Type </li>
                    </ul>
                    <div class="pricing-table-footer pt-5 pb-2">
                        <a href="<?php echo e(route('ourOrder')); ?>" class="btn rounded-pill px-4 btn-outline-primary light-300">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $bronze; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bronze): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
               <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                   <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                       <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                       <h2 class="pricing-table-heading h5 semi-bold-600"><?php echo e($bronze->title); ?></h2>
                       <p>$<?php echo e($bronze->price); ?></p>
                       <ul class="pricing-table-body text-start  px-4 list-unstyled light-300">
                           <li><i class="bx bxs-circle me-2"></i><?php echo e($bronze->start); ?> words</li>
                           <li><i class="bx bxs-circle me-2"></i><?php echo e($bronze->end); ?> words</li>
                           <li><i class="bx bxs-circle me-2"></i>Translation </li>
                           <li><i class="bx bxs-circle me-2"></i>Word Type </li>
                       </ul>
                       <div class="pricing-table-footer pt-5">
                           <a href="<?php echo e(route('ourOrder')); ?>" class="btn rounded-pill px-4 btn-outline-primary light-300">Order Now</a>
                       </div>
                   </div>
               </div>
           </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<!-- End Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.masterLayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/website/pricing.blade.php ENDPATH**/ ?>
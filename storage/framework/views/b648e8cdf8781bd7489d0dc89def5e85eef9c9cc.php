
<?php $__env->startSection('content'); ?>
<!-- Start Banner Hero -->
<div id="work_single_banner" class="bg-light w-100">
    <div class="container-fluid text-light d-flex justify-content-center align-items-center border-0 rounded-0 p-0 py-5">
        <div class="banner-content col-lg-8 m-lg-auto text-center py-5 px-3">
          <br></br>
          <br></br>
        </div>
    </div>
</div>
<!-- End Banner Hero -->

<!-- Start Work Sigle -->
<section class="container py-5">
  <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row pt-5">
        <div class="worksingle-content col-lg-8 m-auto text-left justify-content-center">
            <h2 class="worksingle-heading h3 pb-3 light-300 typo-space-line"><?php echo e($blog->article_title); ?></h2>
            <p class="worksingle-footer py-3 text-muted light-300">
              <?php echo e($blog->article_description); ?>

            </p>
        </div>
    </div><!-- End Blog Cover -->

    <div class="row justify-content-center pb-4">
        <div class="col-lg-8">
            <div id="templatemo-slide-link-target" class="card mb-3">
                <img class="img-fluid border rounded" src="<?php echo e(asset('../UploadedImages/articles/').'/'.$blog->article_img); ?>" alt="Card image cap">
            </div>
            <div class="worksingle-slide-footer row">

            </div>
        </div>
    </div><!-- End Slider -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<!-- End Work Sigle -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.masterLayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/website/blog.blade.php ENDPATH**/ ?>
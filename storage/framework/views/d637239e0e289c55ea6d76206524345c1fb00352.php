
<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-3"></div>
      <div class="col-md-4">
        <?php echo $__env->make('search.searchBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php $__currentLoopData = $post_results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('post.postInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="box box-block bg-white">
          <div class="box bg-white post post-1">
            <div class="p-content">

              <div class="il-item">
                <a class="text-black" href="#">
                  <div class="media">
                    <div class="media-left">
                      <div class="avatar box-48">
                        <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$post->profileImage); ?>" alt="">
                        <i class="status bg-success bottom right"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading"><?php echo e($post->name); ?> <?php echo e($post->lastName); ?></h6>
                      <span class="text-muted"><?php echo e($post->bio); ?></span>
                    </div>
                  </div>
                </a>
              </div>

              <h5><a class="text-black" href="#"></a></h5>
              <p class="mb-0">
                <?php
                   $limitedDescription = substr($post->post_description, 0, 300);
                   echo $limitedDescription;
                ?>
                <a class="text-primary" href="#postInfo_<?php echo e($post->id); ?>" title="Info" data-toggle='modal'>
                <span class="underline">بیشتر بخوانید</span>
              </a></p>
            </div>
            <div class="p-img img-cover" style="background-image: url(/UploadedImages/posts/<?php echo e($post->post_img); ?>);">
            </div>

          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/search/posts_search_result.blade.php ENDPATH**/ ?>
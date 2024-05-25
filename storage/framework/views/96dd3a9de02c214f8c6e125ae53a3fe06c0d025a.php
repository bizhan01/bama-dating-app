
<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-3"></div>
      <div class="col-md-4">


        <div style="">
  <ul class="  nav nav-tabs" role="tablist" style="background-color: #d9dee6; padding: 5px">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">اشخاص</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">دلنوشته ها</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">آگاهی ها</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab"></a>
    </li>
  </ul>
  <div class="tab-content ">
    <div class="tab-pane active" id="tab-1" role="tabpanel">
      <?php echo $__env->make('search.people', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    </div>
    <div class="tab-pane" id="tab-2" role="tabpanel">
      <?php echo $__env->make('search.posts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    </div>
    <div class="tab-pane" id="tab-3" role="tabpanel">
      <?php echo $__env->make('search.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    </div>
    <div class="tab-pane" id="tab-4" role="tabpanel">
    </div>
  </div>
</div>



        <div class="box box-block bg-white">
          <div class="items-list">
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="il-item">
                <a href="#messages_<?php echo e($user->id); ?>"  title="Info" data-toggle='modal'>
                  <div class="media">
                    <div class="media-left">
                      <div class="avatar box-48">
                        <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$user->profileImage); ?>" alt="">
                        <i class="status bg-success bottom right"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading"><?php echo e($user->name); ?> <?php echo e($user->lastName); ?></h6>
                      <span class="text-muted"><?php echo e($user->bio); ?></span>
                    </div>
                    <div class="media-body" dir="ltr">
                      <button type="button" class="btn bg-facebook btn-circle mx-0-5" data-toggle="tooltip" data-placement="bottom" data-title="Facebook">
                        <i class="fa fa-user-plus"></i>
                      </button>
                      <button type="button" class="btn bg-twitter btn-circle mx-0-5" data-toggle="tooltip" data-placement="bottom" data-title="Twitter">
                        <i class="fa fa-paper-plane"></i>
                      </button>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>



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


        <div class="modal-content">
            <div class="modal-body">
	      		<div class="container-fluid">
              <?php $__currentLoopData = $advertisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/search/searchResult.blade.php ENDPATH**/ ?>
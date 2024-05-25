
<?php $__env->startSection('content'); ?>
<div class="content-area pb-1">
	<div class="profile-header mb-1">
		<div class="profile-header-cover img-cover" style="background-image: url(img/photos-1/4.jpg);"></div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-md-3">
				<div class="card profile-card">
					<div class="profile-avatar">
						<img src="<?php echo e(asset('UploadedImages/users/').'/'.Auth::user()->profileImage); ?>" alt="">
					</div>
					<div class="card-block">
						<h4 class="mb-0-25"><?php echo e(Auth::user()->name); ?></h4>
					</div>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>
								<?php echo e(Auth::user()->bio); ?>

							</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#" >
							<i class="ti-worlds mr-0-5"></i>
							<span>شماره تماس:</span>
							<span style="direction: ltr; text-align: left"><?php echo e(Auth::user()->phone); ?></span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>نام کاربری:</span>
							<span><?php echo e(Auth::user()->email); ?></span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>آدرس:</span>
							<span><?php echo e(Auth::user()->country); ?></span>
						</a>
					</ul>
				</div>
				<!-- Who to follow Start-->
				<?php echo $__env->make('profile.test', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<!-- Who to follow End-->
			</div>

			<div class="col-sm-2 col-md-9" style="padding-left: 32px; padding-right: 0px">
				<div class="card mb-0 col-sm-9"></br>
					<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<ul class="nav nav-tabs nav-tabs-2 profile-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#personalInfo" role="tab">ویرایش اطلاعات</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#change-profile-picture" role="tab">تغییر عکس</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#change-password" role="tab">تغییر گذرواژه</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#my-posts" role="tab">دلنوشته ها</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#my-ads" role="tab">آگاهی ها</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="personalInfo" role="tabpanel">
							<?php echo $__env->make('profile.personalInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
						<div class="tab-pane card-block" id="change-profile-picture" role="tabpanel">
							<?php echo $__env->make('profile.change-profile-picture', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
						<div class="tab-pane card-block" id="change-password" role="tabpanel">
							<?php echo $__env->make('profile.change-password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
						<div class="tab-pane card-block" id="my-posts" role="tabpanel">
							<?php echo $__env->make('profile.my-posts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
						<div class="tab-pane card-block" id="my-ads" role="tabpanel">
							<?php echo $__env->make('profile.my-ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
					</div>
				</div>
				</div>
			</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/profile/profile.blade.php ENDPATH**/ ?>
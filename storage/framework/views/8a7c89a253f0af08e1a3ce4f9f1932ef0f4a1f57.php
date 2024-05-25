
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
				<div class="card">
					<div class="card-header text-uppercase"><b>Who to follow</b></div>


					<div class="items-list">
						<div class="il-item">
							<a class="text-black" href="#">
								<div class="media">
									<div class="media-left">
										<div class="avatar box-48">
											<img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
											<i class="status bg-success bottom right"></i>
										</div>
									</div>
									<div class="media-body">
										<h6 class="media-heading">John Doe</h6>
										<span class="text-muted">Software Engineer</span>
									</div>
								</div>
								<div class="il-icon"><i class="fa fa-angle-right"></i></div>
							</a>
						</div>
						<div class="il-item">
							<a class="text-black" href="#">
								<div class="media">
									<div class="media-left">
										<div class="avatar box-48">
											<img class="b-a-radius-circle" src="img/avatars/2.jpg" alt="">
											<i class="status bg-danger bottom right"></i>
										</div>
									</div>
									<div class="media-body">
										<h6 class="media-heading">John Doe</h6>
										<span class="text-muted">Software Engineer</span>
									</div>
								</div>
								<div class="il-icon"><i class="fa fa-angle-right"></i></div>
							</a>
						</div>
						<div class="il-item">
							<a class="text-black" href="#">
								<div class="media">
									<div class="media-left">
										<div class="avatar box-48">
											<img class="b-a-radius-circle" src="img/avatars/3.jpg" alt="">
											<i class="status bg-secondary bottom right"></i>
										</div>
									</div>
									<div class="media-body">
										<h6 class="media-heading">John Doe</h6>
										<span class="text-muted">Software Engineer</span>
									</div>
								</div>
								<div class="il-icon"><i class="fa fa-angle-right"></i></div>
							</a>
						</div>
					</div>
					<div class="card-block">
						<button type="submit" class="btn btn-primary btn-block">Show more</button>
					</div>
				</div>
				<!-- Who to follow End-->
			</div>

			<div class="col-sm-2 col-md-9" style="padding-left: 32px; padding-right: 0px">
				<div>
  					<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
				<div class="card mb-0 col-sm-9">
					<ul class="nav nav-tabs nav-tabs-2 profile-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#stream" role="tab">ویرایش اطلاعات</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#photos" role="tab">تغییر عکس</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#change-password" role="tab">تغییر گذرواژه</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#post" role="tab">دلنوشته ها</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#ads" role="tab">آگاهی ها</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="stream" role="tabpanel">
							<form method="post" action="<?php echo e(route('updateUserInfo')); ?>">
								<?php echo csrf_field(); ?>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="name">نام</label>
										<input type="name" name="name" class="form-control" value="<?php echo e(Auth::user()->name); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="lastName">نام خانوادگی</label>
										<input type="text" name="lastName" class="form-control" value="<?php echo e(Auth::user()->lastName); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="bio">معرفی خلاصه</label>
										<input type="text" name="bio" class="form-control" value="<?php echo e(Auth::user()->bio); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="phone_number">شماره تماس</label>
										<input type="text" name="phone" placeholder="0799999999" data-mask="0799999999" class="form-control" style="direction: ltr" value="<?php echo e(Auth::user()->phone); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="country">کشور</label>
										<input type="text" name="country" class="form-control" value="<?php echo e(Auth::user()->country); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="city">شهر</label>
										<input type="text" name="city" class="form-control" value="<?php echo e(Auth::user()->city); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="dob">تاریخ تولد</label>
										<input type="date" name="dob" class="form-control" value="<?php echo e(Auth::user()->dob); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="job">شغل</label>
										<input type="text" name="job" class="form-control" value="<?php echo e(Auth::user()->job); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="degree">مدرک/درجه تحصیل</label>
										<select name="degree" class="form-control">
											<option><?php echo e(Auth::user()->degree); ?></option>
											<option>دیپلوم</option>
											<option>کارشناسی/لیسانس</option>
											<option>ارشد/ماستر</option>
											<option>دکتر</option>
											<option>سایر</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="field_of_study">رشته تحصیلی</label>
										<input type="text" name="field_of_study" class="form-control" value="<?php echo e(Auth::user()->field_of_study); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="height">قد</label>
										<input type="number" name="height" class="form-control" value="<?php echo e(Auth::user()->height); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="weight">وزن</label>
										<input type="number" name="weight" class="form-control" value="<?php echo e(Auth::user()->weight); ?>">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="gender">جنسیت</label>
										<select name="gender" class="form-control">
											<option><?php echo e(Auth::user()->gender); ?></option>
											<option>آقا</option>
											<option>خانم</option>
											<option>ترانس</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="sexual_desire">تمایل جنسی</label>
										<select name="sexual_desire" class="form-control">
											<option><?php echo e(Auth::user()->sexual_desire); ?></option>
											<option>جنس مخالف</option>
											<option>همجنس</option>
											<option>سایر</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="marital_status">حالت مدنی</label>
										<select name="marital_status" class="form-control">
											<option><?php echo e(Auth::user()->marital_status); ?></option>
											<option>مجرد</option>
											<option>متاهل</option>
											<option>جدا شده</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>

								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label for="my_plan">پلان من</label>
										<select name="my_plan" class="form-control">
											<option><?php echo e(Auth::user()->my_plan); ?></option>
											<option>دوست یابی</option>
											<option>ازدواج موقت</option>
											<option>ازدواج دايم</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>

								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>&nbsp;</label>
										<input type="submit" class="btn btn-success form-control" value="ذخیره">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<br>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
							</form>
						</div>
						<div class="tab-pane card-block" id="photos" role="tabpanel">
							<div class="gallery-2 row">
								<form method="post" action="<?php echo e(route('updateUserImage')); ?>" enctype="multipart/form-data">
									<?php echo csrf_field(); ?>
									<div class="col-md-3 col-sm-3"></div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="g-item">
											<div>
                    		<input type="file" name="image" accept="image/*" id="input-file-now" class="dropify" required/>
                    		<input type="submit" class="btn btn-success form-control" value="ذخیره">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>


						<div class="tab-pane card-block" id="change-password" role="tabpanel">
							<form method="post" action="<?php echo e(route('updateUserPass')); ?>">
								<?php echo csrf_field(); ?>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>گذروارژه قبلی</label>
										<input type="password" name="current-password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>گذرواژه جدید</label>
										<input type="password" name="new-password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>تکرار گذرواژه ی جدید</label>
										<input type="password" name="confirm_password" class="form-control">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
										<label>&nbsp;</label>
										<input type="submit" class="btn btn-success form-control" value="ذخیره">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
								</div>
							</form>
						</div>
						<div class="tab-pane card-block" id="post" role="tabpanel">
							<h1>Posts</h1>
						</div>

						<div class="tab-pane card-block" id="ads" role="tabpanel">
							<h1>Ads</h1>
						</div>


					</div>
				</div><br>
				</div>
			</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/user/profile.blade.php ENDPATH**/ ?>
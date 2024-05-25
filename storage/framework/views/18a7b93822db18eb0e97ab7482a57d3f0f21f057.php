<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>لیست کاربران</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">افزودن کاربر جدید</a></li>
			<li class="breadcrumb-item"><a href="">لیست کاربران</a></li>
			<li class="breadcrumb-item active">کاربران مسدود شده</li>
		</ol>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-3">
					<thead>
						<tr>
							<td style="width: 50px !important; ">عکس</td>
							<th>نام</th>
							<th>نام خانوادگی</th>
							<th>کشور</th>
							<th>شهر</th>
							<th>تاریخ تولد</th>
							<th>شغل</th>
							<th> مدرک</th>
							<th> رشته</th>
							<th> قد</th>
							<th>وزن</th>
							<th>جنسیت</th>
							<th>نمایل جنسی</th>
							<th>حالت مدنی</th>
							<th>هدف</th>
							<th>عملیات</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="<?php echo e(asset('UploadedImages/users/').'/'.$user->profileImage); ?>"  style="width: 100% !important; ">
								</td>
								<td><?php echo e($user->name); ?></td>
								<td><?php echo e($user->lastName); ?></td>
								<td><?php echo e($user->country); ?></td>
								<td><?php echo e($user->city); ?></td>
								<td><?php echo e($user->dob); ?></td>
								<td><?php echo e($user->job); ?></td>
								<td><?php echo e($user->degree); ?></td>
								<td><?php echo e($user->field_of_study); ?></td>
								<td><?php echo e($user->height); ?></td>
								<td><?php echo e($user->weight); ?></td>
								<td><?php echo e($user->gender); ?></td>
								<td><?php echo e($user->sexual_desire); ?></td>
								<td><?php echo e($user->marital_status); ?></td>
								<td><?php echo e($user->my_plan); ?></td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href = 'blockUser/<?php echo e($user->id); ?>'> <i class="fa fa-ban text-warning"></i></a>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/user/usersList.blade.php ENDPATH**/ ?>
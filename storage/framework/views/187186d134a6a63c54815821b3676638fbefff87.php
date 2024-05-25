
<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>All Applicants</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">All Applicants</a></li>
			<li class="breadcrumb-item"><a href="">Qualified Applicants </a></li>
		</ol>
    <?php echo $__env->make('career.addCareer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="box box-block bg-white">
			<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </br>
      	<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="fa fa-plus"></span> Create</a>
				<br></br>

				<div class="box box-block bg-white">
					<div class="overflow-x-auto">
						<table  class="table table-striped table-bordered dataTable" id="table-2">
							<thead>
								<tr>
									<th>#</th>
									<th>Full Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Location</th>
									<th>URL</th>
									<th>Services</th>
									<th>Specializations</th>
									<th>Experience</th>
									<th>Task</th>
									<th>Communication</th>
									<th>About Us</th>
									<th>Resume</th>
									<th>Operation</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $careers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $career): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($row+1); ?></td>
										<td><?php echo e($career->fullName); ?></td>
										<td><?php echo e($career->email); ?></td>
										<td><?php echo e($career->phone); ?></td>
										<td><?php echo e($career->location); ?></td>
										<td><?php echo e($career->url); ?></td>
										<td><?php echo e($career->services); ?></td>
										<td><?php echo e($career->specializations); ?></td>
										<td><?php echo e($career->experience); ?></td>
										<td><?php echo e($career->task); ?></td>
										<td><?php echo e($career->communication); ?></td>
										<td><?php echo e($career->aboutUs); ?></td>
										<td>
											<a href="<?php echo e(asset('../UploadedImages/careers/').'/'.$career->resume); ?>"><?php echo e($career->resume); ?></a>
										</td>
										<td>
											<a href="#status_<?php echo e($career->id); ?>" title="تغییر وضعیت" data-toggle='modal'>
												<i class="fa  fa-hourglass-half text-info"></i>
											</a>
											<?php echo $__env->make('career.changeStatus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
											&nbsp;&nbsp;&nbsp;
											<a  href="#delete_<?php echo e($career->id); ?>" title="حذف" data-toggle='modal'>
												<i class="ti ti-trash text-danger"></i>
											</a>
											<?php echo $__env->make('career.deleteCareer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
										</td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
				</div>


		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/career/careers.blade.php ENDPATH**/ ?>
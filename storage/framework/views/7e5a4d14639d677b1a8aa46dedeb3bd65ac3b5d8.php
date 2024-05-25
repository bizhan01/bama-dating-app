
<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>Services</h4>
    <?php echo $__env->make('service.addService', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="box box-block bg-white">
			<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </br>
      	<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="fa fa-plus"></span> Add New Service</a>
				<br></br>
		 	<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="box bg-white product-view mb-2">
					<div class="box-block">
						<div class="row">
							<div class="col-md-4 col-sm-5">
								<div class="pv-images mb-1 mb-sm-0">
									<div class="mb-1">
										<img  src="<?php echo e(asset('../UploadedImages/services/').'/'.$service->service_img); ?>" height="200px" alt="">
									</div>
								</div>
							</div>
							<div class="col-md-8 col-sm-7">
								<div class="pv-content">
									<div class="pv-title">
										<?php echo e($service->service_title); ?>

										<a class="text-danger" href="#"><i class="fa fa-star"></i></a>
									</div>
									<table class="table mb-md-0">
										<tr class="table-success">
											<th colspan="2"><?php echo e($service->service_description); ?></th>
										</tr>
										<tr class="table-success">
											<th colspan="2">
												<a href="#edit_<?php echo e($service->id); ?>" title="Edit" data-toggle='modal'>
													<i class="fa fa-edit text-success"></i>
												</a>
												<?php echo $__env->make('service.editService', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
												&nbsp;&nbsp;&nbsp;
												<a  href="#delete_<?php echo e($service->id); ?>" title="Delete" data-toggle='modal'>
													<i class="ti ti-trash text-danger"></i>
												</a>
												<?php echo $__env->make('service.deleteService', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
											</th>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/service/services.blade.php ENDPATH**/ ?>
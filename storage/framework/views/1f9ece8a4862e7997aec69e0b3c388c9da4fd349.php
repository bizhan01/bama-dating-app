
<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>Pricings</h4>
    <?php echo $__env->make('pricing.addPricing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="box box-block bg-white">
			<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </br>
      	<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="fa fa-plus"></span> Add New Pricing  </a>
				<br></br>
				<div class="box box-block bg-white">
					<div class="overflow-x-auto">
						<table  class="table table-striped table-bordered dataTable" id="table-2">
							<thead>
								<tr>
									<th>Price Title </th>
									<th>Word Count Start</th>
									<th>Word Count End</th>
									<th>Price Per Word </th>
									<th>Operations</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $pricings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $pricing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($pricing->title); ?></td>
										<td><?php echo e($pricing->start); ?></td>
										<td><?php echo e($pricing->end); ?></td>
										<td><?php echo e($pricing->price); ?></td>
										<td>
											<a href="#edit_<?php echo e($pricing->id); ?>" title="ویرایش" data-toggle='modal'>
												<i class="fa fa-edit text-success"></i>
											</a>
											&nbsp;&nbsp;&nbsp;
											<a  href="#delete_<?php echo e($pricing->id); ?>" title="حذف" data-toggle='modal'>
												<i class="ti ti-trash text-danger"></i>
											</a>						
										</td>
											<?php echo $__env->make('pricing.editPricing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									  	<?php echo $__env->make('pricing.deletePricing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/pricing/pricings.blade.php ENDPATH**/ ?>
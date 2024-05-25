
<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>New Orders</h4>
    <?php echo $__env->make('order.addOrder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="box box-block bg-white">
				<?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </br>
      	<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="fa fa-plus"></span> Add New Order</a>
				<br></br>

				<div class="box box-block bg-white">
					<div class="overflow-x-auto">
						<table  class="table table-striped table-bordered dataTable" id="table-2">
							<thead>
								<tr>
									<th>#</th>
									<th>Full Name</th>
									<th>Email Address</th>
									<th>Phone</th>
									<th>Location</th>
									<th>Service Type</th>
									<th>Length</th>
									<th>File</th>
									<th>Operation</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($row+1); ?></td>
										<td><?php echo e($order->name); ?></td>
										<td><?php echo e($order->email); ?></td>
										<td><?php echo e($order->phone); ?></td>
										<td><?php echo e($order->location); ?></td>
										<td><?php echo e($order->serviceType); ?></td>
										<td><?php echo e($order->length); ?></td>
										<td>
											<a href="<?php echo e(asset('../UploadedImages/files/').'/'.$order->file); ?>"><?php echo e($order->file); ?></a>
										</td>
										<td>
											<a href="#status_<?php echo e($order->id); ?>" title="تغییر وضعیت" data-toggle='modal'>
												<i class="fa  fa-hourglass-half text-info"></i>
											</a>
											<?php echo $__env->make('order.changeStatus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
											&nbsp;&nbsp;&nbsp;
											<a  href="#delete_<?php echo e($order->id); ?>" title="حذف" data-toggle='modal'>
												<i class="ti ti-trash text-danger"></i>
											</a>
											<?php echo $__env->make('order.deleteOrder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/order/orders.blade.php ENDPATH**/ ?>
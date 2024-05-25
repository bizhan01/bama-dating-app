<?php if(count($errors)): ?>
	<div class="alert alert-danger-outline alert-dismissible fade in mb-0" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<strong>Something Went Wrong!</strong>
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        <li><?php echo e($error); ?></li>
	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	     </ul>
	</div>
<?php endif; ?>

<?php if(session('success')): ?>
	<div class="alert alert-success-outline alert-dismissible fade in mb-0" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<strong>Successfully Done! </strong>
		<span><?php echo e(session('success')); ?></span>
	</div>
<?php endif; ?>


<?php if(session('successApp')): ?>
	<div class="alert alert-success-outline alert-dismissible fade in mb-0  bg-white" role="alert" >
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<center>
			<h1>Successfully Done! </h1>
			<h3><?php echo e(session('successApp')); ?></h3>
		</center>
	</div>
	<br>
<?php endif; ?>


<?php if(session('failed')): ?>
	<div class="alert alert-danger-outline alert-dismissible fade in mb-0" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<strong>Something Went Wrong!</strong>
		<span><?php echo e(session('failed')); ?></span>
	</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\giti\resources\views/layouts/errors.blade.php ENDPATH**/ ?>
<?php if(auth()->user()->type == 1 && auth()->user()->status == 1): ?>
	<?php echo $__env->make('adminDashborad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(auth()->user()->type == 2 && auth()->user()->status == 1): ?>
	<?php echo $__env->make('adminDashborad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
	  <?php echo $__env->make('blocked', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\giti\resources\views/home.blade.php ENDPATH**/ ?>
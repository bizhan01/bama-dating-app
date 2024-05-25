<?php if(auth()->user()->userType == 1 && auth()->user()->status == 1): ?>
	<?php echo $__env->make('adminDashborad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(auth()->user()->userType == 2 && auth()->user()->status == 1): ?>
	<?php echo $__env->make('normalUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
	  <?php echo $__env->make('blocked', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/home.blade.php ENDPATH**/ ?>
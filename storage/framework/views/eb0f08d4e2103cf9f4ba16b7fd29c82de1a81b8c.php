<div class="box box-block bg-white" >
    <form method="POST" action="<?php echo e(route('search')); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <div class="input-group">
      <input type="text" name="q" value=""  class="form-control "  placeholder="جستجوی عمومی..." required >
      <span class="input-group-btn">
        <button type="submit" id="check-minutes" class="btn btn-rounded bg-flickr ">جستجو</button>
      </span>
    </div>
    <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </form>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/search/generalSearch.blade.php ENDPATH**/ ?>
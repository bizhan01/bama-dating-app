<div class="box box-block bg-white" >
    <form method="POST" action="<?php echo e(route('search_ads')); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <div class="input-group">
      <input type="text" name="q" value=""  class="form-control "  placeholder="جستجوی آگاهی..." required >
      <span class="input-group-btn">
        <button type="submit" id="check-minutes" class="btn btn-rounded bg-flickr "><span class="fa fa-search"></span> جستجو</button>
      </span>
    </div>
  </form>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/search/ads.blade.php ENDPATH**/ ?>
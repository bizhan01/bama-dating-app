
<?php $__env->startSection('content'); ?>
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
			<div class="col-lg-12 box box-block bg-white">
        <!-- Content -->
        <center><h3>افزودن تبلیغات</h3></center>
				<form method="POST" action="<?php echo e(route('addAdvertisement')); ?>" enctype="multipart/form-data">
			   <?php echo e(csrf_field()); ?>

			   <div class="content-area py-1">
			     <div class="container-fluid">
			       <div class="box box-block bg-white">
			         <h5>افزودن محصول</h5>
			         <div class="form-material material-primary">
			           <div class="form-group row">
			             <label for="inputEmail3" class="col-sm-2 col-form-label">اسم محصول</label>
			             <div class="col-sm-10">
			               <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="اسم محصول">
			             </div>
			           </div>
			         </div>
			         <div class="form-material material-info">
			           <div class="form-group row">
			             <label for="inputEmail3" class="col-sm-2 col-form-label">کد محصول</label>
			             <div class="col-sm-10">
			               <textarea name="content" placeholder="به چی فکر میکند؟"></textarea>
			             </div>
			           </div>
			         </div>

			         <div class="form-material material-danger">
			           <div class="form-group row">
			             <label for="inputEmail3" class="col-sm-2 col-form-label">تصویر محصول</label>
			             <div class="col-sm-10">
			               <input type="file"  name="image" id="input-file-now" class="dropify" />
			             </div>
			           </div>
			         </div>
			         <div class="row form-group">
			           <div class="col-md-6">
			             <input type="submit" name="submit" value="ذخیره" class="btn btn-rounded bg-flickr ">
			             <input type="reset" name="reset" value="لغو" class="btn btn-rounded bg-warning ">
			           </div>
			        </div>
			       </div>
			     </div>
			   </div>
			   <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			 </form>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/advertisement/addAdv.blade.php ENDPATH**/ ?>
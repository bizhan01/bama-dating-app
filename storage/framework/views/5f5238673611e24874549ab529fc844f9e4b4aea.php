
<?php $__env->startSection('content'); ?>
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
			<div class="col-lg-12 box box-block bg-white">
        <!-- Content -->
        <div class="content-area py-1">
          <div class="container-fluid">
            <div class="box box-block bg-white">
              <center><h4>لیست محصولات</h4> </center>
              <h6 class="mb-1">نمایش اطلاعات</h6>
              <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                  <tr>
                    <th>عکس</th>
                    <th>اسم کامل</th>
                    <th>آدرس</th>
                    <th>شماره</th>
                    <th>ایمیل</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><a href="/UploadedImages/products/<?php echo e($product->image); ?>"><img style="height: 30px" src="UploadedImages/products/<?php echo e($product->image); ?>" alt="" /> </a></td>
                    <td><a href="#"><?php echo e($product->productName); ?></a></td>
                    <td><?php echo e($product->productCode); ?></td>
                    <td><?php echo e($product->company); ?></td>
                    <td><?php echo e($product->price); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BAMA\resources\views/product/productGeneralList.blade.php ENDPATH**/ ?>
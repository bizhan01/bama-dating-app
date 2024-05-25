<!-- Add New -->
<div class="modal fade" id="favorites" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">موارد دلخواه من</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <div class="card">
                <div class="card-block">
                  <div class="gallery">
                    <div class="row row-sm">
                      <?php $__currentLoopData = $myFavoriteFreindsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myFavorite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-xs-4">
                        <a href="#">
                          <div class="g-icon"><i class="ti-search"></i></div>
                          <img class="img-fluid" src="<?php echo e(asset('UploadedImages/users/').'/'.$myFavorite->profileImage); ?>" alt="">
                        </a>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-outline-primary btn-block">نمایش همه</button>
                </div>
              </div>

            </div>
			    </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/friends/favorites.blade.php ENDPATH**/ ?>
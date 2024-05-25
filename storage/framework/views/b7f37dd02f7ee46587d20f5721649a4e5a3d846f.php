<!-- Edit -->
<div class="modal fade" id="edit_<?php echo e($ads->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ویرایش آگاهی</h4></center>
            </div>
            <div class="modal-body">
        			<div class="container">
          			<form method="POST" action="/updateAds/<?php echo e($ads->id); ?>" enctype="multipart/form-data">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                  <div class="row form-group">
                    <div class="col-sm-2">
                      <label class="control-label modal-label">اسم محصول: </label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="ads_title"  class="form-control" value="<?php echo e($ads->ads_title); ?>"  required>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-sm-2">
                      <label class="control-label modal-label">توضیحات محصول: </label>
                    </div>
                    <div class="col-sm-10">
                      <textarea name="ads_description" rows="8" class="form-control"  required> <?php echo e($ads->ads_description); ?></textarea>
                    </div>
                  </div>


                  <div class="row form-group">
                    <div class="col-sm-2">
                      <label class="control-label modal-label">تصویر: </label>
                    </div>
                    <div class="col-sm-10">
                      <input type="hidden" name="ads_img" value="<?php echo e($ads->ads_img); ?>">
                      <input type="file" name="ads_img" id="input-file-now-custom-1" class="dropify" data-default-file="../UploadedImages/ads/<?php echo e($ads->ads_img); ?>" />
                    </div>
                  </div>

                </div>
          			</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> لغو</button>
                    <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> ذخیره تغییرات</button>
                </div>
          	</form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/ads/editAds.blade.php ENDPATH**/ ?>
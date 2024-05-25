<!-- Edit -->
<div class="modal fade" id="edit_<?php echo e($post->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="color: black">ویرایش</h4></center>
            </div>
            <div class="modal-body">
        			<div class="container">
          			<form method="POST" action="/updatePost/<?php echo e($post->id); ?>" enctype="multipart/form-data">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                  <div class="row form-group">
                    <div class="col-sm-12">
                      <textarea name="post_description" rows="8" class="form-control"  required> <?php echo e($post->post_description); ?></textarea>
                    </div>
                  </div>


                  <div class="row form-group">
                    <div class="col-sm-12">
                      <input type="hidden" name="post_img" value="<?php echo e($post->post_img); ?>">
                      <input type="file" name="post_img" id="input-file-now-custom-1" class="dropify" data-default-file="../UploadedImages/posts/<?php echo e($post->post_img); ?>" />
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
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/post/editPost.blade.php ENDPATH**/ ?>
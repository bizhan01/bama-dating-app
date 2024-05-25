<!-- Delete -->
<div class="modal fade" id="delete_<?php echo e($ads->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="color: black">حذف آگاهی</h4></center>
            </div>
            <center class="modal-body">
            	<p class="text-center" style="color: black">آیا از حذف این مورد مطمین هستید؟</p>
      				<!-- <h2 class="text-center" style="color: black"><?php echo e($ads->id); ?></h2> -->
      			</center>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> لغو</button>
                <a href="<?php echo e(url('deleteAds').'/' .$ads->id); ?>" class="btn btn-danger"><span class="fa fa-trash"></span> حذف</a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/ads/deleteAds.blade.php ENDPATH**/ ?>
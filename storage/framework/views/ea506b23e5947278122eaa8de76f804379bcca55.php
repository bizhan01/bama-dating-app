<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $career['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Record </h4></center>
            </div>
            <center class="modal-body">
            	<p class="text-center">Are You Sure, You Want To Delete This Record? </p>
      				<h2 class="text-center"><?php echo $career['fullName']; ?></h2>
      			</center>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                <a href="<?php echo e(url('deleteCareer').'/' .$career->id); ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Delete</a>              
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\giti\resources\views/career/deleteCareer.blade.php ENDPATH**/ ?>
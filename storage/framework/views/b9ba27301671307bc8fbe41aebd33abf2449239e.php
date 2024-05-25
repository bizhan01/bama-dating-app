<!-- Change Status -->
<div class="modal fade" id="finalStatus_<?php echo $order['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Change Final Status</h4></center>
            </div>
            <div class="modal-body">
        			<div class="container">
          			<form method="POST" action="/changeFinalStatus/<?php echo $order['id']; ?>">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <center class="modal-body">
                  	<p class="text-center">Are you sure you want to mark this order competed?  </p>
            				<h2 class="text-center"><?php echo $order['name']; ?></h2>
            			</center>
                  <input type="hidden" name="status" value="2">
                </div>
          			</div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                  <button type="submit" name="edit" class="btn btn-info"><span class="fa fa-check"></span> Change Status</button>
                </div>
          	</form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/order/changeFinalStatus.blade.php ENDPATH**/ ?>
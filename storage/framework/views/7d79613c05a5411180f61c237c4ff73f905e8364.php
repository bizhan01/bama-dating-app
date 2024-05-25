<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $service['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel"><?php echo $service['service_title']; ?></h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
      			<p style="text-align: left; padding: 15px"><?php echo $service['service_description']; ?></p>    	
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\giti\resources\views/website/singleServices.blade.php ENDPATH**/ ?>
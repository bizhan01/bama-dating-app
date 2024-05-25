<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Service</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <form method="POST" action="/saveService" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Service Title:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="service_title"  class="form-control"  required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Service Description:</label>
                  </div>
                  <div class="col-sm-10">
                    <textarea name="service_description" rows="8" class="form-control"  required></textarea>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Service Image:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="file"  name="service_img" accept="image/*"  id="input-file-now" class="dropify" />
                  </div>
                </div>

                <div class="modal-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <button type="reset" class="btn btn-outline-danger mb-0-25 waves-effect waves-light">
                        <i class="ti-loop"></i>
                        <span>Clear</span>
                      </button>
                      <button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
                        <i class="ti-save"></i>
                        <span>Save</span>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
			    </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/service/addService.blade.php ENDPATH**/ ?>
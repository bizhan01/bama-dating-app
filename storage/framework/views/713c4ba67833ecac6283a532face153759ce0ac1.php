<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Pricing</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <form method="POST" action="<?php echo e(route('savePricing')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>



                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Title:</label>
                  </div>
                  <div class="col-sm-10">
                    <select name="title"  class="form-control"  required>
                        <option value=" ">------</option>
                        <option>Golden</option>
                        <option>Silver</option>
                        <option>Bronze</option>
                    </select>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Start:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="start"  class="form-control"  required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">End:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="end"  class="form-control"  required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Price:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="price"  class="form-control"  required>
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
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/pricing/addPricing.blade.php ENDPATH**/ ?>
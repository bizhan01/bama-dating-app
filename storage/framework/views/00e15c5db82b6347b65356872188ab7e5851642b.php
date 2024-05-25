<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"> Add New Order</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <form method="POST" action="<?php echo e(route('saveOrder')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>



                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Full Name:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="name"  class="form-control"  required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Email Address:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="email" name="email"  class="form-control"  required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Phone:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="phone"  class="form-control"  required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Location:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="location"  class="form-control"  required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Service Type:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="serviceType"  class="form-control"  required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">Length:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="length"  class="form-control"  required>
                  </div>
                </div>



                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">File:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="file"  name="file"   id="input-file-now" class="dropify" />
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
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/order/addOrder.blade.php ENDPATH**/ ?>
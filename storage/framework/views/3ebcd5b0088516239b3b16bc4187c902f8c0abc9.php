<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Create New Record</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <form method="POST" action="<?php echo e(route('saveCareer')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">fullName:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="fullName"  class="form-control"  required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">email:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="email" name="email"  class="form-control"  required>
                  </div>
                </div>



                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">phone:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="phone"  class="form-control"  required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">location:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="location"  class="form-control"  required>
                  </div>
                </div>



                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">url:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="url"  class="form-control"  required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">services:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="services"  class="form-control"  required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">specializations:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="specializations"  class="form-control"  required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">experience:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="experience"  class="form-control"  required>
                  </div>
                </div>



                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">task:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="task"  class="form-control"  required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">communication:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="communication"  class="form-control"  required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">aboutUs:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="aboutUs"  class="form-control"  required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">resume:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="file"  name="resume"   id="input-file-now" class="dropify" />
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
<?php /**PATH C:\xampp\htdocs\giti\resources\views/career/addCareer.blade.php ENDPATH**/ ?>
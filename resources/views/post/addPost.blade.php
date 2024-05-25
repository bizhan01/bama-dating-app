<!-- Add New -->
<div class="modal fade" id="addNewPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">دل نوشته ها</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <form method="POST" action="{{route('savePost')}}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <textarea name="post_description" placeholder="به چی فکر میکند؟" style="width: 100%"></textarea>
                <input type="file"  name="post_img" accept="image/*"  id="input-file-now" class="dropify" />

                <div class="modal-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
                        <i class="ti-save"></i>
                        <span>ذخیره</span>
                      </button>
                      <button type="reset" class="btn btn-outline-danger mb-0-25 waves-effect waves-light">
                        <i class="ti-loop"></i>
                        <span>تمیز کردن</span>
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

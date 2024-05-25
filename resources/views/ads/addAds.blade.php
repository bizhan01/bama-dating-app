<!-- Add New -->
<div class="modal fade" id="addNewAds" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ثبت آگاهی</h4></center>
            </div>
            <div class="modal-body">
              <br></br>
	      		<div class="container-fluid">
              <form class="card write-something" method="post" action="/saveAds" enctype="multipart/form-data" style="margin-top: -35px">
                  {{ csrf_field() }}
                <div class="form-material material-primary">
                  <div class="form-group row">
                    <div class="col-sm-10" style="margin-right: 20px">
                      <input type="text" name="ads_title" class="form-control" id="inputEmail3" placeholder="اسم محصول">
                    </div>
                  </div>
                </div>
                <textarea name="ads_description" placeholder="توضیحات محصول"></textarea>
                <input type="file"  name="ads_img" accept="image/*"   id="input-file-now" class="dropify" />
                <div class="card-footer">
                  <div class="clearfix">
                    <div class="float-xs-right">
                      <button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
                        <i class="ti-save"></i>
                        <span>ذخیره</span>
                      </button>
                      <button type="reset" class="btn btn-outline-danger mb-0-25 waves-effect waves-light">
                        <i class="ti-loop"></i>
                        <span>لغو</span>
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

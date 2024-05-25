<!-- Add New -->
<div class="modal fade" id="favorites" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">موارد دلخواه من</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <div class="card">
                <div class="card-block">
                  <div class="gallery">
                    <div class="row row-sm">
                      @foreach($myFavoriteFreindsList as $myFavorite)
                      <div class="col-xs-4">
                        <a href="#">
                          <div class="g-icon"><i class="ti-search"></i></div>
                          <img class="img-fluid" src="{{ asset('UploadedImages/users/').'/'.$myFavorite->profileImage}}" alt="">
                        </a>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <button type="submit" class="btn btn-outline-primary btn-block">نمایش همه</button>
                </div>
              </div>

            </div>
			    </div>
        </div>
    </div>
</div>

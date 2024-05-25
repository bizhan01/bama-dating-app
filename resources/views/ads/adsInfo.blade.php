<!-- Edit -->
<div class="modal fade" id="info_{{$ads->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">جزییات آگاهی</h4></center>
            </div>
            <div class="modal-body">
        		<div class="container">
              <div class="box box-block bg-white">
                <div class=" bg-white post post-1">
                  <div class="p-content">
                    <a href="#"  aria-expanded="false">
                      <div class="media">
                        <div class="media-left">
                          <div class="avatar box-48">
                            <img class="b-a-radius-circle" src="{{ asset('UploadedImages/users/').'/'.$ads->profileImage}}" alt="">
                            <i class="status bg-success bottom right"></i>
                          </div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">{{$ads->name}} {{$ads->lastName}}</h6>
                          <span class="text-muted">{{$ads->bio}}</span>
                        </div>
                      </div><br>
                    </a>
                    <h5><a class="text-black" href="#">{{$ads->ads_title}}</a></h5>
                    <p class="mb-0">{{$ads->ads_description}}></p>
                    <center>
                      <img src="/UploadedImages/ads/{{$ads->ads_img}}" alt="" height="300px" width="400px"/>
                    </center>
                  </div>
                </div>
              </div>
          </div>
      </div>
   </div>
 </div>
</div>

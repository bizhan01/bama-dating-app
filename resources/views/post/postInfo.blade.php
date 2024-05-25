<!-- Edit -->
<div class="modal fade" id="postInfo_{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">جزییات آگاهی</h4></center>
            </div>
            <div class="modal-body">
        		<div class="container">
                <div class="box bg-white post post-1">
                  <div class="p-content">
                    <a href="#"  aria-expanded="false">
                      <div class="media">
                        <div class="media-left">
                          <div class="avatar box-48">
                            <img class="b-a-radius-circle" src="{{ asset('UploadedImages/users/').'/'.$post->profileImage}}" alt="">
                            <i class="status bg-success bottom right"></i>
                          </div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">{{$post->name}} {{$post->lastName}}</h6>
                          <span class="text-muted">{{$post->bio}}</span>
                        </div>
                      </div>
                    </a>
                    <h5><a class="text-black" href="#"></a></h5>
                    <p class="mb-0">{{$post->post_description}}</p>
                  </div>
                  <div class="p-img img-cover" style="background-image: url(/UploadedImages/posts/{{$post->post_img}});">
                    <span class="tag tag-danger">Lifestyle</span>
                    <div class="p-info clearfix">
                      <div class="float-xs-left">
                        <span class="small text-uppercase"></span>
                      </div>
                      <div class="float-xs-right">
                        <span class="mr-1"><i class="fa fa-heart"></i>57</span>
                        <span><i class="fa fa-comment"></i>14</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
   </div>
 </div>
</div>

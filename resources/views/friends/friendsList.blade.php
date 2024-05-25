<!-- Add New -->
<div class="modal fade" id="friendList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">افراد که میتواند با آنها در ارتباط باشید</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <div class="row mb-1">
                @foreach($users as $user)
                <div class="col-md-4">
                  <div class="box bg-white user-1">
                    <div class="u-img img-cover" style="background-image: url({{ asset('UploadedImages/users/').'/'.$user->profileImage}});" ></div>
                    <div class="u-content">
                      <div class="avatar box-64">
                        <img class="b-a-radius-circle shadow-white" src="{{ asset('UploadedImages/users/').'/'.$user->profileImage}}" alt="">
                        <i class="status bg-success bottom right"></i>
                      </div>
                      <h5><a class="text-black" href="#">{{$user->name}} {{$user->lastName}}</a></h5>
                      <p class="text-muted">
                        @php
                          $limitedDescription = substr($user->bio, 0, 40);
                          echo mb_convert_encoding($limitedDescription, 'UTF-8', 'UTF-8');
                        @endphp
                      </p>
                      <div class="text-xs-center">
                        <form method="POST" action="{{route('sendRequest')}}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <input type="hidden" name="friend_id" value="{{$user->id}}">
                          <button type="submit" class="btn btn-outline-primary btn-rounded">درخواست <i class="ti-plus ml-0-5"></i></button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
			    </div>
        </div>
    </div>
</div>

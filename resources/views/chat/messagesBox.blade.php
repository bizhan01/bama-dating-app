<!-- Messages -->
<div class="modal fade" id="messages_{{$conversation->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="box bg-white messenger">
        <div class="row no-gutter">
          <div class="col-xs-12">
            <div class="m-chat">
              <div class="m-header">
                <div class="media">
                  <div class="media-body">
                    <h6 class="media-heading mb-0">{{$conversation->name}} {{$conversation->lastName}}</h6>
                    <!-- <span class="font-90 text-muted">Last seen 2 hours ago</span> -->
                  </div>
                  <div class="media-right">
                    <div class="mh-links">
                      <a class="text-grey" href="#"><i class="fa fa-phone"></i></a>
                      <a class="text-grey" href="#"><i class="fa fa-video-camera"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              @foreach ($messages->where('conversation_id', $conversation->id) as $message)
                @if ($message->user_id == Auth::user()->id)
                <div class="mc-item left clearfix">
                  <div class="avatar box-48">
                    <img class="b-a-radius-circle" src="/UploadedImages/users/{{Auth::user()->profileImage}}" alt="">
                  </div>
                  <div class="mc-content">
                    {{ $message->content }}
                    <!-- <div class="font-90 text-xs-right text-muted">14:20</div> -->
                  </div>
                </div>
                @else
                <div class="mc-item right clearfix">
                  <div class="avatar box-48">
                    <img class="b-a-radius-circle" src="{{ asset('UploadedImages/users/').'/'.$conversation->profileImage}}" alt="">
                  </div>
                  <div class="mc-content">
                    {{ $message->content }}
                    <!-- <div class="font-90 text-xs-right text-muted">14:23</div> -->
                  </div>
                </div>
                @endif
              @endforeach


            </div>
            <div class="m-form">
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <form class="mf-compose" action="{{route('sendMessage')}}" method="POST">
                        @csrf
                    <input type="hidden" name="conversation_id" value="{{$conversation->id}}">
                    <input name="content" class="form-control" type="text" placeholder="پیام شما...">
                    <button class="btn btn-success btn-rounded" type="submit">ارسال</button>
                  </form>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
</div>

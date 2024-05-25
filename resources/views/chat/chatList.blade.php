<div class="dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
  <div class="items-list">
      @foreach ($conversationSender as $conversation)
          @if ($conversation->user1_id == Auth::user()->id)
            <div class="il-item">
              <a href="#messages_{{$conversation->id}}"  title="Info" data-toggle='modal'>
                <div class="media">
                  <div class="media-left">
                    <div class="avatar box-48">
                      <img class="b-a-radius-circle" src="{{ asset('UploadedImages/users/').'/'.$conversation->profileImage}}" alt="">
                      <i class="status bg-success bottom right"></i>
                    </div>
                  </div>
                  <div class="media-body">
                    <h6 class="media-heading">{{$conversation->name}} {{$conversation->lastName}}</h6>
                    <span class="text-muted">سلام</span>
                  </div>
                </div>
              </a>
            </div>
          @endif
      @endforeach
      @foreach ($conversationReciever as $conversation)
        @if ($conversation->user2_id == Auth::user()->id)
          <div class="il-item">
            <a href="#messages_{{$conversation->id}}"  title="Info" data-toggle='modal'>
              <div class="media">
                <div class="media-left">
                  <div class="avatar box-48">
                    <img class="b-a-radius-circle" src="{{ asset('UploadedImages/users/').'/'.$conversation->profileImage}}" alt="">
                    <i class="status bg-success bottom right"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h6 class="media-heading">{{$conversation->name}} {{$conversation->lastName}}</h6>
                  <span class="text-muted">سلام</span>
                </div>
              </div>
            </a>
          </div>
        @endif
      @endforeach
  </div>
  <a class="dropdown-more" href="#">
    <strong>نمایش همه</strong>
  </a>
</div>

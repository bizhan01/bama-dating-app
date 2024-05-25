<div class="col-md-12">
  <div class="card" style="border-radius: 8px !important;">
    <div class="card-header text-uppercase" style="border-radius: 8px !important;"><b>دوستان من</b></div>
    <div class="items-list">
      <table class="table mb-md-0 ">
        @foreach($myFreindsList as $myFreind)
        <tr style="padding: 5px">
            <td>
              <div class="media-left">
                <div class="avatar box-48">
                  <img class="b-a-radius-circle" src="{{ asset('UploadedImages/users/').'/'.$myFreind->profileImage}}" alt="">
                  <i class="status bg-success bottom right"></i>
                </div>
              </div>
            </td>
            <td colspan="3">
              <div class="media-body">
                <h6 class="media-heading">{{$myFreind->name}} {{$myFreind->lastName}}</h6>
                <!-- <span class="text-muted">{{$myFreind->bio}}</span> -->
              </div>
            </td>
            <td>
              <form method="POST" action="/favorite/{{$myFreind->user_id}}" enctype="multipart/form-data">
                  @csrf
                  @if($myFreind->favorite == 0)
                    <button type="submit" style="border: 1px solid transparent; background-color: transparent; color: black"><i class="fa fa-heart-o ml-0-5"></i></button>
                  @else
                    <button type="submit" style="border: 1px solid transparent; background-color: transparent; color: red"><i class="fa fa-heart ml-0-5"></i></button>
                  @endif
              </form>
            </td>
            <td>
              <form action="{{route('startConversation')}}" method="POST">
                  {{ csrf_field() }}
                <input type="hidden" name="user2_id" value="{{$myFreind->id}}">
                <button type="submit" style="border: 1px solid transparent; background-color: transparent; color: #00ffeafc">
                  <i class="fa fa-paper-plane"></i>
                </button>
              </form>
            </td>
        </tr>
        @endforeach
      </table>
    </div>
    <div class="card-block">
      <button type="submit" class="btn btn-primary btn-block">نمایش همه</button>
    </div>
  </div>
</div>

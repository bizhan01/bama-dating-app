<div class="card">
  <div class="card-block">
    <div class="avatars ">
      @foreach($usersList as $user)
        @include('friends.userProfile')
        <a href="#userProfile_{{$user->id}}"  title="Info" data-toggle='modal'>
          <div class="avatar box-48 mr-0-75">
            <img class="b-a-radius-circle" src="{{ asset('UploadedImages/users/').'/'.$user->profileImage}}" alt="">
            <span class="status bg-success top right"></span>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</div>

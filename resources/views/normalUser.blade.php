@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
		 	@include('ads.addAds')
      <div class="col-md-3">
        @include('friends.myProfile')
        @include('friends.myFreindsList')
      </div>

      <div class="col-md-4">
        <!--Post Section-->
        <div class="box box-block bg-white">
          <div class="box bg-white post post-1">
            @include('layouts.errors')
            <div class="p-content">
             <div class="input-group input-rounded input-group-lg">
               <div class="input-group-btn">
                 <span class="avatar box-32">
                   <img src="/UploadedImages/users/{{Auth::user()->profileImage}}" style="width: 40px; height: 40px; margin-left: 5px">
                 </span>
              </div>
              @include('post.addPost')
              <a href="#addNewPost" data-toggle="modal">
               <input type="text" readonly class="form-control" placeholder="دل نوشته ها تو شریک بساز..." style="border-radius: 20px 20px 20px 20px; height: 40px">
              </a>
            </div>
            </div>
          </div>
        </div>
        <!--Post Section-->
        @foreach ($conversationSender as $conversation)
          @include('chat.messagesBox')
        @endforeach
        @foreach ($conversationReciever as $conversation)
          @include('chat.messagesBox')
        @endforeach

        @include('ads.adsList')
        @include('friends.friendsList')
        @include('friends.favorites')
        @include('friends.people')
        @include('post.postList')
      </div>
      <div class="col-md-3" >
        @include('ads.advertisements')
      </div>

    </div>
  </div>
</div>
@endsection

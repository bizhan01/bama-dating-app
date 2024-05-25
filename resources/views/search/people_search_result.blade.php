@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-1"></div>
      <div class="col-md-2">
        @include('search.advanced_search')
      </div>
      <div class="col-md-4">
        @include('search.searchBox')
        <div class="box box-block bg-white">
          <div class="items-list">
            @foreach ($results as $user)
            @include('friends.userProfile')
              <div class="il-item">
                <a href="#userProfile_{{$user->id}}"  title="Info" data-toggle='modal'>
                  <div class="media">
                    <div class="media-left">
                      <div class="avatar box-48">
                        <img class="b-a-radius-circle" src="{{ asset('UploadedImages/users/').'/'.$user->profileImage}}" alt="">
                        <i class="status bg-success bottom right"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">{{$user->name}} {{$user->lastName}}</h6>
                      <span class="text-muted">{{$user->bio}}</span>
                    </div>
                    <div class="media-body" dir="ltr">
                      <button type="button" class="btn bg-facebook btn-circle mx-0-5" data-toggle="tooltip" data-placement="bottom" data-title="Facebook">
                        <i class="fa fa-user-plus"></i>
                      </button>
                      <button type="button" class="btn bg-twitter btn-circle mx-0-5" data-toggle="tooltip" data-placement="bottom" data-title="Twitter">
                        <i class="fa fa-paper-plane"></i>
                      </button>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</div>
@endsection

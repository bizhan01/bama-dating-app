@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-3"></div>
      <div class="col-md-4">
        @include('search.searchBox')

        @foreach($post_results as $post)
        @include('post.postInfo')
        <div class="box box-block bg-white">
          <div class="box bg-white post post-1">
            <div class="p-content">

              <div class="il-item">
                <a class="text-black" href="#">
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
              </div>

              <h5><a class="text-black" href="#"></a></h5>
              <p class="mb-0">
                @php
                   $limitedDescription = substr($post->post_description, 0, 300);
                   echo $limitedDescription;
                @endphp
                <a class="text-primary" href="#postInfo_{{$post->id}}" title="Info" data-toggle='modal'>
                <span class="underline">بیشتر بخوانید</span>
              </a></p>
            </div>
            <div class="p-img img-cover" style="background-image: url(/UploadedImages/posts/{{$post->post_img}});">
            </div>

          </div>
        </div>
        @endforeach





      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</div>
@endsection

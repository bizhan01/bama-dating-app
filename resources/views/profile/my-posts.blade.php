@foreach($posts as $post)
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
      <div class="p-info clearfix">
        <div class="float-xs-left">

          <a href="#edit_{{$post->id}}" title="ویرایش" data-toggle='modal'>
            <i class="fa fa-edit text-success"></i>
          </a>
          @include('post.editPost')

          <a href="#delete_{{$post->id}}" title="حذف" data-toggle='modal'>
            <i class="ti ti-trash text-danger"></i>
          </a>
          @include('post.deletePost')
        </div>
        <div class="float-xs-right">
          <span class="mr-1"><i class="fa fa-heart"></i>57</span>
          <span><i class="fa fa-comment"></i>14</span>
        </div>
      </div>
    </div>

  </div>
</div>
@endforeach

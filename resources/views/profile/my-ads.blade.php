@foreach($advertisements as $ads)
@include('ads.adsInfo')
<div class="col-md-4">
  <div class="box bg-white product product-4">
    <a class="p-img img-cover" style="background-image: url(UploadedImages/ads/{{$ads->ads_img}});" href="#info_{{$ads->id}}" title="Info" data-toggle='modal'></a>
    <div class="p-content" >
      <h5><a class="text-black" href="#">
        @php
           $limitedDescription = substr($ads->ads_title, 0, 30);
           echo $limitedDescription;
        @endphp
      </a></h5>
      <!-- <div class="p-price">
        <span class="old">$126.5</span>
        <span class="text-danger">$99.99</span>
      </div> -->
    </div>
    <div class="p-links">
      <div class="row no-gutter">
        <div class="col-xs-4 pl-item">
          <a href="#edit_{{$ads->id}}" title="ویرایش" data-toggle='modal'>
            <i class="fa fa-edit text-success"></i>
          </a>
          @include('ads.editAds')
        </div>
        <div class="col-xs-4 pl-item">
          <a  href="#delete_{{$ads->id}}" title="حذف" data-toggle='modal'>
            <i class="ti ti-trash text-danger"></i>
          </a>
        </div>
        @include('ads.deleteAds')
        <div class="col-xs-4 pl-item">
          <a href="#"><i class="ti-more"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

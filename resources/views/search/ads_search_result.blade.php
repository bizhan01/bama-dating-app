@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-3"></div>
      <div class="col-md-4">
        @include('search.searchBox')
        <div class="modal-content">
            <div class="modal-body">
	      		<div class="container-fluid">
              @foreach($ads_results as $ads)
              @include('ads.adsInfo')
              <div class="col-md-6">
                <div class="box bg-white product product-4">
                  <a class="p-img img-cover" style="background-image: url(UploadedImages/ads/{{$ads->ads_img}});" href="#info_{{$ads->id}}" title="Info" data-toggle='modal'></a>
                  <div class="p-content" >
                    <h5><a class="text-black" href="#">
                      @php
                         $limitedDescription = substr($ads->ads_title, 0, 30);
                         echo $limitedDescription;
                      @endphp
                    </a></h5>
                  </div>
                  <div class="p-links">
                    <div class="row no-gutter">
                      <div class="col-xs-4 pl-item">
                        <a href="#"><i class="ti-shopping-cart"></i></a>
                      </div>
                      <div class="col-xs-4 pl-item">
                        <a href="#"><i class="ti-star"></i></a>
                      </div>
                      <div class="col-xs-4 pl-item">
                        <a href="#"><i class="ti-more"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
			    </div>
        </div>


      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</div>
@endsection

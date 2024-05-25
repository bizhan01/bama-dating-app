@foreach($advertisements as $ads)
@include('ads.adsInfo')
<div class="card" style="border-radius: 10px !important; border: 2px solid linear-gradient(to right, red, yellow, green);">
  <a href="#info_{{$ads->id}}" title="Info" data-toggle='modal'>
    <img class="card-img-top " src="UploadedImages/ads/{{$ads->ads_img}}" height="250px" width="100%" alt="Card image cap" style="border-radius: 10px !important;">
  </a>
</div>
@endforeach

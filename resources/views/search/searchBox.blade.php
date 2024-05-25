<div style="">
  <ul class="  nav nav-tabs" role="tablist" style="background-color: #d9dee6; padding: 5px">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">اشخاص</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">دلنوشته ها</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">آگاهی ها</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab"></a>
    </li>
  </ul>
  <div class="tab-content ">
    <div class="tab-pane active" id="tab-1" role="tabpanel">
      <div class="box box-block bg-white" >
          <form method="POST" action="{{ route('search') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="input-group">
            <input type="text" name="keyword" value=""  class="form-control "  placeholder="جستجوی اشخاص..." required >
            <span class="input-group-btn">
              <button type="submit" id="check-minutes" class="btn btn-rounded bg-flickr "><span class="fa fa-search"></span> جستجو</button>
            </span>
          </div>
        </form>
      </div>
    </div>
    <div class="tab-pane" id="tab-2" role="tabpanel">
      <div class="box box-block bg-white" >
          <form method="POST" action="{{ route('search_posts') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="input-group">
            <input type="text" name="keyword" value=""  class="form-control "  placeholder="جستجوی دلنوشته ها..." required >
            <span class="input-group-btn">
              <button type="submit" id="check-minutes" class="btn btn-rounded bg-flickr "><span class="fa fa-search"></span> جستجو</button>
            </span>
          </div>
        </form>
      </div>
    </div>
    <div class="tab-pane" id="tab-3" role="tabpanel">
      <div class="box box-block bg-white" >
          <form method="POST" action="{{ route('search_ads') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="input-group">
            <input type="text" name="keyword" value=""  class="form-control "  placeholder="جستجوی آگاهی..." required >
            <span class="input-group-btn">
              <button type="submit" id="check-minutes" class="btn btn-rounded bg-flickr "><span class="fa fa-search"></span> جستجو</button>
            </span>
          </div>
        </form>
      </div>
    </div>
    <div class="tab-pane" id="tab-4" role="tabpanel">
    </div>
  </div>
</div>

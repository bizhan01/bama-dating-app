<div class="gallery-2 row">
  <form method="post" action="{{ route('updateUserImage') }}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-3 col-sm-3"></div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="g-item">
        <div>
          <input type="file" name="image" accept="image/*" id="input-file-now" class="dropify" required/>
          <input type="submit" class="btn btn-success form-control" value="ذخیره">
        </div>
      </div>
    </div>
  </form>
</div>

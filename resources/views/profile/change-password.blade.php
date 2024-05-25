<form method="post" action="{{ route('updateUserPass') }}">
  @csrf
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label>گذروارژه قبلی</label>
      <input type="password" name="current-password" class="form-control">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label>گذرواژه جدید</label>
      <input type="password" name="new-password" class="form-control">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label>تکرار گذرواژه ی جدید</label>
      <input type="password" name="confirm_password" class="form-control">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label>&nbsp;</label>
      <input type="submit" class="btn btn-success form-control" value="ذخیره">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
</form>

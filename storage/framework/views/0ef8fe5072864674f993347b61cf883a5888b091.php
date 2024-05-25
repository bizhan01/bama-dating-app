<form method="post" action="<?php echo e(route('updateUserInfo')); ?>">
  <?php echo csrf_field(); ?>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="name">نام</label>
      <input type="text" name="name" class="form-control" value="<?php echo e(Auth::user()->name); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="lastName">نام خانوادگی</label>
      <input type="text" name="lastName" class="form-control" value="<?php echo e(Auth::user()->lastName); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="bio">معرفی خلاصه</label>
      <input type="text" name="bio" class="form-control" value="<?php echo e(Auth::user()->bio); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="phone_number">شماره تماس</label>
      <input type="text" name="phone" placeholder="0799999999" data-mask="0799999999" class="form-control" style="direction: ltr" value="<?php echo e(Auth::user()->phone); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="country">کشور</label>
      <input type="text" name="country" class="form-control" value="<?php echo e(Auth::user()->country); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="city">شهر</label>
      <input type="text" name="city" class="form-control" value="<?php echo e(Auth::user()->city); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="dob">تاریخ تولد</label>
      <input type="date" name="dob" class="form-control" value="<?php echo e(Auth::user()->dob); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="job">شغل</label>
      <input type="text" name="job" class="form-control" value="<?php echo e(Auth::user()->job); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="degree">مدرک/درجه تحصیل</label>
      <select name="degree" class="form-control">
        <option><?php echo e(Auth::user()->degree); ?></option>
        <option>دیپلوم</option>
        <option>کارشناسی/لیسانس</option>
        <option>ارشد/ماستر</option>
        <option>دکتر</option>
        <option>سایر</option>
      </select>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="field_of_study">رشته تحصیلی</label>
      <input type="text" name="field_of_study" class="form-control" value="<?php echo e(Auth::user()->field_of_study); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="height">قد</label>
      <input type="number" name="height" class="form-control" value="<?php echo e(Auth::user()->height); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="weight">وزن</label>
      <input type="number" name="weight" class="form-control" value="<?php echo e(Auth::user()->weight); ?>">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="gender">جنسیت</label>
      <select name="gender" class="form-control">
        <option><?php echo e(Auth::user()->gender); ?></option>
        <option>آقا</option>
        <option>خانم</option>
        <option>ترانس</option>
      </select>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="sexual_desire">تمایل جنسی</label>
      <select name="sexual_desire" class="form-control">
        <option><?php echo e(Auth::user()->sexual_desire); ?></option>
        <option>جنس مخالف</option>
        <option>همجنس</option>
        <option>سایر</option>
      </select>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="marital_status">حالت مدنی</label>
      <select name="marital_status" class="form-control">
        <option><?php echo e(Auth::user()->marital_status); ?></option>
        <option>مجرد</option>
        <option>متاهل</option>
        <option>جدا شده</option>
      </select>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label for="my_plan">پلان من</label>
      <select name="my_plan" class="form-control">
        <option><?php echo e(Auth::user()->my_plan); ?></option>
        <option>دوست یابی</option>
        <option>ازدواج موقت</option>
        <option>ازدواج دايم</option>
      </select>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <label>&nbsp;</label>
      <input type="submit" class="btn btn-success form-control" value="ذخیره">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <br>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
  </div>
</form>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/profile/personalInfo.blade.php ENDPATH**/ ?>
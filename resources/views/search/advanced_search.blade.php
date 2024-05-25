<div class="col-md-12">
  <div class="card" style="border-radius: 8px !important;">
    <div class="card-header text-uppercase" style="border-radius: 8px !important;"><b><center>جستجوی پیشرفته</center></b></div>
    <div class="card-block">
      <form method="POST" action="{{ route('advanceSearch') }}">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">نام</label>
          <div class="input-group">
            <span class="input-group-addon bg-primary text-white"><i class="fa fa-user"></i></span>
            <input type="text" name="name" class="form-control"  placeholder="همتا بیاتی">
          </div>
        </div>

        <div class="form-group">
          <label for="name">موقعیت</label>
          <div class="input-group">
            <input type="text" name="country" class="form-control"  placeholder="کشور">
            <span class="input-group-addon bg-primary b-0 text-white"><i class="fa fa-map-marker"></i></span>
            <input type="text" name="city" class="form-control"  placeholder="شهر">
          </div>
        </div>

        <div class="form-group">
          <label for="name">سن</label>
          <div class="input-group">
            <input type="text" name="age_start" class="form-control" placeholder="حداقل">
            <span class="input-group-addon bg-primary b-0 text-white"><i class="fa fa-calendar-plus-o"></i></span>
            <input type="text" name="age_end" class="form-control" placeholder="حداکثر">
          </div>
        </div>

        <div class="form-group">
          <label for="name">جنسیت</label>
          <div class="input-group">
            <span class="input-group-addon bg-primary text-white"><i class="fa  fa-transgender-alt"></i></span>
            <select name="gender" class="form-control">
              <option>------------</option>
              <option>آقا</option>
              <option>خانم</option>
              <option>ترانس</option>
            </select>
          </div>
        </div>


        <div class="form-group">
          <label for="sexual_desire">تمایل جنسی</label>
          <div class="input-group">
            <span class="input-group-addon bg-primary text-white"><i class="fa fa-venus-mars"></i></span>
            <select name="sexual_desire" class="form-control">
              <option>------------</option>
              <option>جنس مخالف</option>
              <option>همجنس</option>
              <option>سایر</option>
            </select>
          </div>
        </div>


        <div class="form-group">
          <label for="marital_status">حالت مدنی</label>
          <div class="input-group">
            <span class="input-group-addon bg-primary text-white"><i class="fa fa-heart"></i></span>
            <select name="marital_status" class="form-control">
              <option>------------</option>
              <option>مجرد</option>
              <option>متاهل</option>
              <option>جدا شده</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="my_plan">هدف</label>
          <div class="input-group">
            <span class="input-group-addon bg-primary text-white"><i class="fa fa-plus-circle"></i></span>
            <select name="plan" class="form-control">
              <option>------------</option>
              <option>دوست یابی</option>
              <option>ازدواج موقت</option>
              <option>ازدواج دايم</option>
            </select>
          </div>
        </div>


        <div class="form-group">
          <label for="degree">مدرک/درجه تحصیل</label>
          <div class="input-group">
            <span class="input-group-addon bg-primary text-white"><i class="fa fa-mortar-board"></i></span>
            <select name="degree" class="form-control">
              <option>------------</option>
              <option>دیپلوم</option>
              <option>کارشناسی/لیسانس</option>
              <option>ارشد/ماستر</option>
              <option>دکتر</option>
              <option>سایر</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="name">قد</label>
          <div class="input-group">
            <input type="text" name="height_start" class="form-control" placeholder="حداقل">
            <span class="input-group-addon bg-primary b-0 text-white"><i class="fa fa-line-chart"></i></span>
            <input type="text" name="height_end" class="form-control" placeholder="حداکثر">
          </div>
        </div>

        <div class="form-group">
          <label for="name">وزن</label>
          <div class="input-group">
            <input type="text" name="weight_start" class="form-control" placeholder="حداقل">
            <span class="input-group-addon bg-primary b-0 text-white"><i class="fa fa-line-chart"></i></span>
            <input type="text" name="weight_end" class="form-control" placeholder="حداکثر">
          </div>
        </div>

        <div class="card-block">
          <button type="submit" class="btn btn-primary btn-block">جستجو</button>
        </div>

      </form>
    </div>

  </div>
</div>

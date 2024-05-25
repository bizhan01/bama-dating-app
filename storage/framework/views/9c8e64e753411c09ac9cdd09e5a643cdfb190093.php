<div class="col-md-12" >
  <div class="box bg-white user-1">
    <div class="u-img img-cover" style="background-image: url(<?php echo e(asset('UploadedImages/users/').'/'.Auth::user()->profileImage); ?>);" ></div>
    <div class="u-content">
      <div class="avatar box-64">
        <img class="b-a-radius-circle shadow-white" src="<?php echo e(asset('UploadedImages/users/').'/'.Auth::user()->profileImage); ?>" alt="">
        <i class="status bg-success bottom right"></i>
      </div>
      <h5><a class="text-black" href="#"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->lastName); ?></a></h5>
      <p class="text-muted">
        <?php echo e(Auth::user()->bio); ?>

      </p>
      <div class="text-xs-center">
        <table class="table mb-md-0 ">
          <tbody>
            <tr class="table-info">
              <td scope="row"><i class="fa fa-map-marker text-muted mr-0-25"></i> کشور:</td>
              <td><?php echo e(Auth::user()->country); ?></td>
            </tr>
            <tr>
              <td><i class="fa fa-map-pin text-muted mr-0-25"></i> شهر:</td>
              <td><?php echo e(Auth::user()->city); ?></td>
            </tr>
            <tr class="table-info">
              <td scope="row"><i class="fa fa-calendar text-muted mr-0-25"></i> تاریخ تولد: </td>
              <td><?php echo e(Auth::user()->dob); ?></td>
            </tr>
            <tr>
              <td><i class="fa fa-suitcase text-muted mr-0-25"></i> شغل:</td>
              <td><?php echo e(Auth::user()->job); ?></td>
            </tr>
            <tr class="table-info">
              <td scope="row"><i class="fa fa-mortar-board text-muted mr-0-25"></i> مدرک:</td>
              <td><?php echo e(Auth::user()->degree); ?></td>
            </tr>
            <tr>
              <td><i class="fa  fa-institution  text-muted mr-0-25"></i> رشته:</td>
              <td><?php echo e(Auth::user()->field_of_study); ?></td>
            </tr>
            <tr class="table-info">
              <td scope="row"><i class="fa fa-text-height text-muted mr-0-25"></i> قد:</td>
              <td><?php echo e(Auth::user()->height); ?></td>
            </tr>
            <tr>
              <td><i class="fa fa-balance-scale text-muted mr-0-25"></i> وزن:</td>
              <td><?php echo e(Auth::user()->weight); ?></td>
            </tr>
            <tr class="table-info">
              <td scope="row"><i class="fa fa-venus-mars text-muted mr-0-25"></i> جنسیت:</td>
              <td><?php echo e(Auth::user()->gender); ?></td>
            </tr>
            <tr>
              <td><i class="fa fa-flag text-muted mr-0-25"></i> تمایل جنسی:</td>
              <td><?php echo e(Auth::user()->sexual_desire); ?></td>
            </tr>
            <tr class="table-info">
              <td scope="row"><i class="fa fa-heartbeat text-muted mr-0-25"></i> حالت مدنی:</td>
              <td><?php echo e(Auth::user()->marital_status); ?></td>
            </tr>
            <tr>
              <td><i class="fa fa-hand-peace-o text-muted mr-0-25"></i> هدف:</td>
              <td><?php echo e(Auth::user()->my_plan); ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/friends/myProfile.blade.php ENDPATH**/ ?>
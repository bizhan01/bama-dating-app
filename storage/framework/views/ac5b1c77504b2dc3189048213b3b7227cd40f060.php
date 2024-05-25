<!-- Edit -->
<div class="modal fade" id="userProfile_<?php echo e($user->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="box bg-white user-5">
          <div class="u-content">
            <div class="avatar box-96 mb-2">
              <img class="b-a-radius-circle" src="<?php echo e(asset('UploadedImages/users/').'/'.$user->profileImage); ?>" alt="">
              <i class="status bg-success bottom right"></i>
            </div>
            <h5><a class="text-black" href="#"><?php echo e($user->name); ?> <?php echo e($user->lastName); ?></a></h5>
            <p class="text-muted mb-1"><?php echo e($user->bio); ?></p>

            <div class="col-md-12">
              <table class="table mb-md-0">
                <tbody>
                  <tr class="table-info">
                    <td scope="row"><i class="fa fa-map-marker text-muted mr-0-25"></i> کشور:</td>
                    <td><?php echo e($user->country); ?></td>
                    <td><i class="fa fa-map-pin text-muted mr-0-25"></i> شهر:</td>
                    <td><?php echo e($user->city); ?></td>
                  </tr>
                  <tr>
                    <td scope="row"><i class="fa fa-calendar text-muted mr-0-25"></i> تاریخ تولد: </td>
                    <td><?php echo e($user->dob); ?></td>
                    <td><i class="fa fa-suitcase text-muted mr-0-25"></i> شغل:</td>
                    <td><?php echo e($user->job); ?></td>
                  </tr>
                  <tr class="table-info">
                    <td scope="row"><i class="fa fa-mortar-board text-muted mr-0-25"></i> مدرک:</td>
                    <td><?php echo e($user->degree); ?></td>
                    <td><i class="fa  fa-institution  text-muted mr-0-25"></i> رشته:</td>
                    <td><?php echo e($user->field_of_study); ?></td>
                  </tr>
                  <tr>
                    <td scope="row"><i class="fa fa-text-height text-muted mr-0-25"></i> قد:</td>
                    <td><?php echo e($user->height); ?></td>
                    <td><i class="fa fa-balance-scale text-muted mr-0-25"></i> وزن:</td>
                    <td><?php echo e($user->weight); ?></td>
                  </tr>
                  <tr class="table-info">
                    <td scope="row"><i class="fa fa-venus-mars text-muted mr-0-25"></i> جنسیت:</td>
                    <td><?php echo e($user->gender); ?></td>
                    <td><i class="fa fa-flag text-muted mr-0-25"></i> تمایل جنسی:</td>
                    <td><?php echo e($user->sexual_desire); ?></td>
                  </tr>
                  <tr>
                    <td scope="row"><i class="fa fa-heartbeat text-muted mr-0-25"></i> حالت مدنی:</td>
                    <td><?php echo e($user->marital_status); ?></td>
                    <td><i class="fa fa-hand-peace-o text-muted mr-0-25"></i> هدف:</td>
                    <td><?php echo e($user->my_plan); ?></td>
                  </tr>
                </tbody>
              </table>
              <br>
            </div>
            <form action="<?php echo e(route('startConversation')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

              <input type="hidden" name="user2_id" value="<?php echo e($user->id); ?>">
              <button type="submit" class="btn btn-outline-info mb-0-25 waves-effect waves-light">
                <i class="fa fa-paper-plane"></i>
                <span>درخواست پیام</span>
              </button>
            </form>
          </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/friends/userProfile.blade.php ENDPATH**/ ?>
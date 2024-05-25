
<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Make Payment</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <form method="POST" action="<?php echo e(route('saveCareer')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                  <div class="container p-0">
                    <div class="card px-4">
                        <p class="h8 py-3">Payment Details</p>
                        <div class="row gx-3">
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Person Name</p>
                                    <input class="form-control mb-3" type="text" placeholder="Name" value="Barry Allen">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Card Number</p>
                                    <input class="form-control mb-3" type="text" placeholder="1234 5678 435678">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">Expiry</p>
                                    <input class="form-control mb-3" type="text" placeholder="MM/YYYY">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <p class="text mb-1">CVV/CVC</p>
                                    <input class="form-control mb-3 pt-2 " type="password" placeholder="***">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="btn btn-primary ">
                                    <span class="ps-3">Pay $243</span>
                                    <span class="fas fa-arrow-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br></br>
              </form>
            </div>
			    </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\giti\resources\views/website/makePayment.blade.php ENDPATH**/ ?>
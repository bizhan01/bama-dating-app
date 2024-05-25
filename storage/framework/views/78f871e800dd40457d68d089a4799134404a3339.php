
<?php $__env->startSection('content'); ?>
<!-- Start Contact -->
<section class="container py-5 ">
    <div class="row pb-6">
        <div class="col-lg-6">
          <?php if($success = session('success')): ?>
            <div class="alert alert-success alert-dismissible">
             <center style="font-size: 25px"><strong><?php echo e($success); ?></strong></center>
           </div>
          <?php endif; ?>
          <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Contact Us Today!</h1>
          <h2 class="col-12 col-xl-8 h4 text-left regular-400">We'd love to hear from you!</h2>
          <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
              If you have any questions, suggestions, or feedback, please don't hesitate to reach out to us. Our dedicated support team is here to assist you. <br></br>
              Feel free to get in touch with us at any time. We strive to provide prompt and helpful responses to all inquiries.

              Thank you for visiting our website and considering us for your needs. We value your input and look forward to hearing from you soon!
          </p>
            <div class="contact row mb-6">
                <div class="contact-icon col-lg-3 col-3">
                    <div class="py-3 mb-2 text-center border rounded text-secondary">
                        <a href="https://wa.me/93704830998"  style="color: green"><i class='display-6 bx bxl-whatsapp'></i></a>
                    </div>
                </div>
                <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                    <li class="h5 mb-0">WhatsApp Chat</li>
                    <li class="text-muted">Mahdi Forogh</li>
                    <a href="https://wa.me/93704830998"  style="color: green"><li class="text-muted">+93704830998</li></a>
                </ul>
            </div>

            <div class="contact row mb-4">
                <div class="contact-icon col-lg-3 col-3">
                    <div class="border py-3 mb-2 text-center border rounded text-secondary">
                        <i class='bx bx-envelope display-6' ></i>
                    </div>
                </div>
                <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                    <li class="h5 mb-0">E-mail Address</li>
                    <li class="text-muted"><a href="#">giti.translations@gmail.com</a></li>
                    <!-- <li class="text-muted">010-020-0340</li> -->
                </ul>
            </div>

            <div class="contact row mb-4">
                <div class="contact-icon col-lg-3 col-3">
                    <div class="border py-3 mb-2 text-center border rounded text-secondary">
                        <i class='bx bx-home display-6'></i>
                    </div>
                </div>
                <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                    <li class="h5 mb-0">Address</li>
                    <li class="text-muted">Jebel Ali, Dubai, United Arab Emirates</li>
                    <!-- <li class="text-muted">010-020-0340</li> -->
                </ul>
            </div>

        </div>


        <!-- Start Contact Form -->

        <div class="col-lg-5 card h-100 shadow-sm border-0 py-5" style="padding: 30px">
          <h1>Contact Us</h1>
          <h4>Have a question or need assistance?</h4><br></br>
            <form method="POST" action="<?php echo e(route('SendMessage')); ?>" class="contact-form row"  role="form">
              <?php echo e(csrf_field()); ?>

                <div class="col-lg-6 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-pill form-control-lg light-300" id="floatingname" name="name" placeholder="Name" required>
                    </div>
                </div><!-- End Input Name -->

                <div class="col-lg-6 mb-4">
                    <div class="form-floating">
                        <input type="email" class="form-control rounded-pill form-control-lg light-300" id="floatingemail" name="email" placeholder="Email" required>
                    </div>
                </div><!-- End Input Email -->


                <div class="col-12">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control rounded-pill form-control-lg light-300" id="floatingsubject" name="subject" placeholder="Subject" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating mb-3">
                        <textarea class="form-control  light-300" name="message"  cols="12"  placeholder="Message" id="floatingtextarea" required style="height: 200px"></textarea>
                    </div>
                </div> <!-- End Textarea Message -->

                <div class="col-md-12 col-12 m-auto text-end">
                    <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Send Message</button>
                </div>

            </form>
        </div>
        <!-- End Contact Form -->
    </div>
</section>
<!-- End Contact -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.masterLayouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\giti\resources\views/website/contactUs.blade.php ENDPATH**/ ?>
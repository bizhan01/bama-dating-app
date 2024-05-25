<!DOCTYPE html>
<html lang="en">

<head>
    <title>Giti Translations</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="<?php echo e(asset('../website/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('../website/css/bootstrap1.css')); ?>" rel="stylesheet">

    <!-- Font CSS -->
    <link href="<?php echo e(asset('../website/css/boxicon.min.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('../website/css/templatemo.css')); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('../website/css/custom.css')); ?>">
<!--

TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="#">
                <i ><img src="./assets/img/logo.png" alt="" height="40px" style="margin-top: -20px"/></i>
                <span class="text-dark h4" style="font-size: 50px"><strong> Giti </strong> </span> <span class="text-primary h4"> <strong> Translations </strong></span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-3" href="/giti">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-3" href="<?php echo e(route('ourServices')); ?>">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-3" href="<?php echo e(route('ourPricing')); ?>">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-3" href="<?php echo e(route('ourOrder')); ?>">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-success rounded-pill px-3" href="/welcome">My Giti</a>
                        </li>
                        <li class="nav-item" id="contactStyle">
                            <a class="nav-link btn-outline-success rounded-pill px-3" href="<?php echo e(route('contactWithUs')); ?>" style="color: white">Contact Us</a>
                        </li>
                        <li class="nav-item">
                          <div class="nav-link btn-outline-success rounded-pill px-3 dropdown">
                            <span><i class='bx bx-dots-vertical-rounded bx-sm bx-tada-hover  second_color'></i></span>
                            <div class="dropdown-content">
                              <a href="<?php echo e(route('ourPortfolio')); ?>">Portfolio</a>
                              <a href="<?php echo e(route('ourBlog')); ?>">Blog</a>
                              <a href="<?php echo e(route('aboutUs')); ?>">About Us</a>
                              <a href="<?php echo e(route('ourCareers')); ?>">Join Us</a>
                              <a href="<?php echo e(route('ourFAQs')); ?>">FAQ</a>
                            </div>
                          </div>
                        </li>
                          <box-icon name='dots-vertical-rounded'></box-icon>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex" >
                    <a class="nav-link" href="https://wa.me/93704830998"  style="color: green"><i class='bx bxl-whatsapp bx-sm bx-tada-hover  second_color'></i></a>
                    <a class="nav-link" href="https://www.facebook.com/profile.php?id=61551994955338&mibextid=ZbWKwL" style="color: blue"><i class='bx bxl-facebook-circle bx-sm  second_color'></i></a>
                    <a class="nav-link" href="/login" style="color: #cd3a39"><i class='bx bx-user-circle bx-sm  second_color'></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Section Start -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Section End -->

    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">Giti</span> <span class="text-light h5 semi-bold-600">Translations </span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        We are a leading translation agency dedicated to providing expert language solutions for businesses and individuals. With our team of skilled linguists and subject-matter specialists, we ensure accurate and culturally sensitive translations that bridge language barriers and facilitate seamless communication.
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.facebook.com/profile.php?id=61551994955338&mibextid=ZbWKwL">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://wa.me/93704830998">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.flickr.com/">
                                <i class='bx bxl-flickr-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.medium.com/">
                                <i class='bx bxl-medium-square bx-md' ></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="/welcome">Home</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="<?php echo e(route('ourServices')); ?>">Services</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="<?php echo e(route('ourPricing')); ?>">Pricing</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="<?php echo e(route('ourOrder')); ?>">Order</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="<?php echo e(route('ourPortfolio')); ?>">Portfolio</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="<?php echo e(route('ourBlog')); ?>">Blog</a>
                            </li>
                        </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">My Giti</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="<?php echo e(route('aboutUs')); ?>">About Us</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="<?php echo e(route('contactWithUs')); ?>">Contact Us</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="<?php echo e(route('ourCareers')); ?>">Join Us</a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">+93 70 483 0998</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">giti.translations@gmail.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100  bg-primary py-3 ">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021 Giti Translations. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://www.facebook.com/glidesoft20" target="_blank"><strong>GlideSoft</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="<?php echo e(asset('../website/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- Load jQuery require for isotope -->
    <script src="<?php echo e(asset('../website/js/jquery.min.js')); ?>"></script>
    <!-- Isotope -->
    <script src="<?php echo e(asset('../website/js/isotope.pkgd.js')); ?>"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="<?php echo e(asset('../website/js/templatemo.js')); ?>"></script>
    <script src="<?php echo e(asset('../website/js/bootstrap.min.js')); ?>"></script>
    <!-- Custom -->
    <script src="<?php echo e(asset('../website/js/custom.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\BAMA\resources\views/website/masterLayouts.blade.php ENDPATH**/ ?>
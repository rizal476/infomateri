<!DOCTYPE html>
<html lang="en">

<head>
    <title>Infomateri.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link href="assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
        </div>


        <div class="py-2 bg-light">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-9 d-none d-lg-block">
                <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
                <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 0852 476 82 476</a> 
                <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> admin@infomateri.com</a> 
            </div>
            <div class="col-lg-3 text-right">
                <a href="<?php base_url()?>welcome/view_login" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
                <!-- <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a> -->
            </div>
            </div>
        </div>
        </div>
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="<?php echo base_url()?>welcome" class="d-block">
                <img src="assets/images/logo.png" alt="Image" class="img-fluid" style="width: 50%">
                </a>
            </div>
            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li class="active">
                    <a href="<?php echo base_url()?>welcome" class="nav-link text-left">Beranda</a>
                    </li>
                    <li class="has-children">
                    <a href="about.html" class="nav-link text-left">Materi Kuliah</a>
                    <ul class="dropdown">
                        <li><a href="teachers.html">Our Teachers</a></li>
                        <li><a href="about.html">Our School</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="<?php base_url()?>welcome/view_nilai" class="nav-link text-left">Nilai</a>
                    </li>
                    <li>
                    <a href="courses.html" class="nav-link text-left">KP & TA</a>
                    </li>
                    <li>
                        <a href="contact.html" class="nav-link text-left">Kontak</a>
                    </li>

                    <?php if ($this->session->userdata("name") != "") { ?>
                    <li class="has-children">
                        <a href="" class="nav-link text-left">Profil</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url()?>admin/view_admin_page"><?php echo $this->session->userdata("name")?></a></li>
                            <li><a href=""><?php echo $this->session->userdata("nidn")?></a></li>
                            <li><a href="<?php echo base_url()?>admin/logout">Log out</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>                                                                                                                                                                                                                                                                                          </ul>
                </nav>

            </div>

            <?php if ($this->session->userdata("name") == "") { ?>
            <div class="ml-auto">
                <div class="social-wrap">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>

                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                    class="icon-menu h3"></span></a>
                </div>
            </div>
            <?php } ?>
            </div>
        </div>

        </header>

        
        <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('assets/images/hero_1.jpg');">
            <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                <h1>Academics University</h1>
                </div> -->
            </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('assets/images/hero_1.jpg');">
            <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                <h1>You Can Learn Anything</h1>
                </div> -->
            </div>
            </div>
        </div>
        </div>
        
        <div></div>

        <!-- // 05 - Block -->
        <div class="news-updates">
        <div class="container">
            
            <div class="row">
            <div class="col-lg-9">
                <div class="section-heading">
                <h2 class="text-black">News &amp; Updates</h2>
                <a href="#">Read All News</a>
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="post-entry-big">
                    <a href="news-single.html" class="img-link"><img src="assets/images/blog_large_1.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content">
                        <div class="post-meta"> 
                        <a href="#">June 6, 2019</a>
                        <span class="mx-1">/</span>
                        <a href="#">Admission</a>, <a href="#">Updates</a>
                        </div>
                        <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="post-entry-big horizontal d-flex mb-4">
                    <a href="news-single.html" class="img-link mr-4"><img src="assets/images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content">
                        <div class="post-meta">
                        <a href="#">June 6, 2019</a>
                        <span class="mx-1">/</span>
                        <a href="#">Admission</a>, <a href="#">Updates</a>
                        </div>
                        <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                    </div>
                    </div>

                    <div class="post-entry-big horizontal d-flex mb-4">
                    <a href="news-single.html" class="img-link mr-4"><img src="assets/images/blog_2.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content">
                        <div class="post-meta">
                        <a href="#">June 6, 2019</a>
                        <span class="mx-1">/</span>
                        <a href="#">Admission</a>, <a href="#">Updates</a>
                        </div>
                        <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                    </div>
                    </div>

                    <div class="post-entry-big horizontal d-flex mb-4">
                    <a href="news-single.html" class="img-link mr-4"><img src="assets/images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content">
                        <div class="post-meta">
                        <a href="#">June 6, 2019</a>
                        <span class="mx-1">/</span>
                        <a href="#">Admission</a>, <a href="#">Updates</a>
                        </div>
                        <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="footer">
        <div class="container">
            <div class="row">
            <div class="col-lg-3">
                <p class="mb-4"><img src="assets/images/logo.png" alt="Image" class="img-fluid"></p>
                <p>infomateri adalah pusat informasi untuk mata kuliah, nilai, dan panduan KP & TA.</p>  
                <!-- <p><a href="#">Learn More</a></p> -->
            </div>
            <div class="col-lg-3">
                <h3 class="footer-heading"><span>Our Campus</span></h3>
                <ul class="list-unstyled">
                    <li><a href="#">Acedemic</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Our Interns</a></li>
                    <li><a href="#">Our Leadership</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Human Resources</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h3 class="footer-heading"><span>Our Courses</span></h3>
                <ul class="list-unstyled">
                    <li><a href="#">Math</a></li>
                    <li><a href="#">Science &amp; Engineering</a></li>
                    <li><a href="#">Arts &amp; Humanities</a></li>
                    <li><a href="#">Economics &amp; Finance</a></li>
                    <li><a href="#">Business Administration</a></li>
                    <li><a href="#">Computer Science</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h3 class="footer-heading"><span>Contact</span></h3>
                <ul class="list-unstyled">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Support Community</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Share Your Story</a></li>
                    <li><a href="#">Our Supporters</a></li>
                </ul>
            </div>
            </div>

            <div class="row">
            <div class="col-12">
                <div class="copyright">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                </div>
            </div>
            </div>
        </div>
        </div>
        

    </div>
    <!-- .site-wrap -->


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
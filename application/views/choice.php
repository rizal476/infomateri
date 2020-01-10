<!DOCTYPE html>
<html lang="en">

<head>
    <title>Infomateri.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link href="../assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->

    <style>
        html, body{
            height:100%; margin:0;padding:0;
        }
        
        .container-fluid{
            height:100%;
            display:table;
            width: 100%;
            padding: 0;
        }
  
        .row-fluid{
            height: 100%; display:table-cell; vertical-align: middle;
        }

        .centering{
            float:none;
            margin:0 auto;
        }

        .nav-tabs > li > a:hover{
            background-color: #51be78 !important;
            color: white !important;
        }

        .pilihanBaru{
            color: #51be78;
        }

        .pilihanBaru:hover{
            background: #51be78;
            color: white;
        }
    </style>
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

        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container" >
            <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="<?php echo base_url()?>Welcome" class="d-block">
                <img src="../assets/images/logo.png" alt="Image" class="img-fluid" style="width: 50%">
                </a>
            </div>
            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li class="active">
                        <a href="<?php echo base_url()?>Welcome" class="nav-link text-left">Beranda</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Admin/view_materi" class="nav-link text-left">Materi Kuliah</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Welcome/view_nilai" class="nav-link text-left">Nilai</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Admin/view_info" class="nav-link text-left">KP & TA</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Admin/view_tugas" class="nav-link text-left">Tugas</a>
                    </li>
                    <li class="has-children">
                        <a href="" class="nav-link text-left">Profil</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url()?>Admin/view_admin_page"><?php echo $this->session->userdata("name")?></a></li>
                            <li><a href=""><?php echo $this->session->userdata("nidn")?></a></li>
                            <li><a href="<?php echo base_url()?>Admin/logout">Log out</a></li>
                        </ul>
                    </li>
                </ul>                                                                                                                                                                                                                                                                                          </ul>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="social-wrap">

                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                    class="icon-menu h3"></span></a>
                </div>
            </div>
            </div>
        </div>
        <div class="body" style="margin-top: 100px;"></div>
        <div class="container">
            <div class="row w-100 d-flex justify-content-center align-self-center">
                <div class="card text-center" style="width: 200px; font-size: 20px;">
                    <a style="line-height: 50px;" href="<?php echo base_url()?>Admin/view_dashboard_admin">
                        <div class="pilihanBaru">
                            Admin
                        </div>
                    </a>
                    <a style="line-height: 50px;" href="<?php echo base_url()?>Admin/view_admin_page2">
                        <div class="pilihanBaru">
                            Dosen
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </header>
    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>
    <script type="text/javascript">
        jQuery.noConflict()(function ($) {
            $(document).ready(function() { 
                $('#matkulModal').on('show.bs.modal', function(e) {
                    var bookId = $(e.relatedTarget).data('book-id');
                    $(e.currentTarget).find('a[name="delete"]').attr('href','<?php echo base_url()?>Admin/hapus_matkul/' + bookId);
                });
                $('#kelasModal').on('show.bs.modal', function(e) {
                    var bookId = $(e.relatedTarget).data('book-id');
                    $(e.currentTarget).find('a[name="delete"]').attr('href','<?php echo base_url()?>Admin/hapus_kelas/' + bookId);
                });
                $('#mhsModal').on('show.bs.modal', function(e) {
                    var bookId = $(e.relatedTarget).data('book-id');
                    $(e.currentTarget).find('a[name="delete"]').attr('href','<?php echo base_url()?>Admin/hapus_mhs/' + bookId);
                });
            });
        });
    </script>
    <!-- <script src="../assets/js/jquery-3.3.1.min.js"></script> -->
    <script src="../assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../assets/js/jquery-ui.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.stellar.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <script src="../assets/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    <script src="../assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/jqeury.js"></script>
    <script src="../assets/js/popper.js"></script>
    
</body>

</html>
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

        .sidenav {
            height: 100%;
            width: 0;
            position: absolute;
            z-index: 2000;
            top: 0;
            left: 0;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
            color: black;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #51be78;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="<?php echo base_url()?>Welcome" class="nav-link text-left">Beranda</a>
        <a href="<?php echo base_url()?>Admin/view_materi" class="nav-link text-left">Materi Kuliah</a>
        <a href="<?php base_url()?>Welcome/view_nilai" class="nav-link text-left">Nilai</a>
        <a href="<?php echo base_url()?>Admin/view_info" class="nav-link text-left">KP & TA</a>
        <a href="<?php echo base_url()?>Admin/view_tugas" class="nav-link text-left">Tugas</a>
    </div>
    <div class="site-wrap">

        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container" >
            <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="<?php echo base_url()?>Welcome" class="d-block">
                <img src="../assets/images/logo.png" alt="Image" class="img-fluid" style="width: 70%">
                </a>
            </div>
            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                <ul style="width: 740px;" class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
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
                    <li>
                        <a href="<?php echo base_url()?>Admin/view_prodi" class="nav-link text-left">Prodi</a>
                    </li>
                    <?php if ($this->session->userdata("name") != "") { ?>
                    <li class="has-children">
                        <a href="" class="nav-link text-left">Profil</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url()?>Admin/view_admin_page"><?php echo $this->session->userdata("name")?></a></li>
                            <li><a href=""><?php echo $this->session->userdata("nidn")?></a></li>
                            <li><a href="<?php echo base_url()?>Admin/logout">Log out</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>                                                                                                                                                                                                                                                                                          </ul>
                </nav>
            </div>
            <div class="ml-auto">
                <div style="width: 150px;" class="social-wrap">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                    <a onclick="openNav()" href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                    class="icon-menu h3"></span></a>
                </div>
            </div>
            </div>
        </div>
        <div class="body" style=""></div>
            <div class="site-section">
                <div class="container">
                    <h2 align="center">D3 Teknik Instrumentasi Elektronika Migas</h2>
                    <div class="row">
                        <div class="col text-center" style="margin: 20px 20px;"><img src="../assets/images/profilprodi.jpg">
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <h5>Visi Program Studi</h5>
                            <p><span style="visibility: hidden;">_____</span>Menjadi program studi unggulan pada bidang Instrumentasi Elektronika Migas dan Energi Baru Terbarukan di Kalimantan tahun 2025</p>
                            <br>
                            <h5>Misi Program Studi</h5>
                            <p><span style="visibility: hidden;">_____</span>Untuk mewujudkan visi dan sejaian dengan realisasi Tri Dharma Perguruan Tinggi, maka ditetapkan Misi Program Studi Teknik Instrumentasi</p>
                            <p><span style="visibility: hidden;">_____</span>elektronika migas, STT Migas Balikpapan sebagai berikut:</p><br>
                            <ol style="margin-left: 60px; list-style-type: decimal; color: #666666;">
                                <li style="list-style-type: decimal; font-family: Poppins-Regular; font-size: 1.1rem;">Menyelenggarakan manajemen pendidikan dan pengajaran di bidang Teknik Instrumentasi elektronika yang berlandaskan kompetensi secara efektif dan efisien.</li>
                                <li style="list-style-type: decimal; font-family: Poppins-Regular; font-size: 1.1rem;">Menyelenggarakan kurikulum yang relevan dengan keilmuan bidang teknik instrumentasi elektronika migas dan energi baru terbarukan yang didukung oleh substansi moral, jiwa keteknikan dan professional dibidangnya.</li>
                                <li style="list-style-type: decimal; font-family: Poppins-Regular; font-size: 1.1rem;">Menyelenggarakan ilmu pengetahuan dan teknologi instrumentasi elektronika migas dan energi baru terbarukan melaiui penelitian sesuai dengan kebutuhan perkembangan teknologi industri saat ini.</li>
                                <li style="list-style-type: decimal; font-family: Poppins-Regular; font-size: 1.1rem;">Memanfaatkan dan mengambangkan IPTEK yang relevan pada industri migas dan energi baru terbarukan.</li>
                            </ol> 
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <!-- <script src="../../assets/js/jquery-3.3.1.min.js"></script> -->
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
</body>

</html>
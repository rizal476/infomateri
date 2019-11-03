<!DOCTYPE html>
<html lang="en">

<head>
    <title>Infomateri.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../assets/css/aos.css">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <link href="../../assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css">

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
                <a href="<?php echo base_url()?>welcome" class="d-block">
                <img src="../../assets/images/logo.png" alt="Image" class="img-fluid" style="width: 50%">
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
                        <a href="<?php echo base_url()?>welcome/view_nilai" class="nav-link text-left">Nilai</a>
                    </li>
                    <li>
                        <a href="courses.html" class="nav-link text-left">KP & TA</a>
                    </li>
                    <li>
                        <a href="contact.html" class="nav-link text-left">Kontak</a>
                    </li>
                    <li class="has-children">
                        <a href="" class="nav-link text-left">Profil</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url()?>admin/view_admin_page"><?php echo $this->session->userdata("name")?></a></li>
                            <li><a href=""><?php echo $this->session->userdata("nidn")?></a></li>
                            <li><a href="<?php echo base_url()?>admin/logout">Log out</a></li>
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
                <div class="row mt-5">
                    <div class="col">
                        <h3 class="text-center">Daftar Kelas</h3>
                        <!-- <?php var_dump($id_matkul);?> -->
                        <a href="<?php echo base_url()?>admin/view_tambah_kelas/<?= $this->uri->segment(3);?>" style="color: white;"><div id="kelas" style="background-color: #51be78; width: 200px; height 30px; float: right; text-align: center; border-radius: 5px;">+ Tambah Kelas</div></a>
                        <?php if (empty($kelas)) : ?>
                            <div class="alert alert-danger" role="alert" style="margin-top: 40px;">
                                Data tidak ditemukan
                            </div>
                        <?php endif; ?>

                        <table class="table mt-5">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">ID</th>
                                    <th class="text-center" scope="col">NAMA KELAS</th>
                                    <th class="text-center" scope="col">JUMLAH MAHASISWA</th>
                                    <th class="text-center" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><?php foreach ($kelas as $kls) :  ?>
                                    <td class="text-center"><?= $kls['id']; ?></td>
                                    <td class="text-center"><?= $kls['kelas']; ?></td>
                                    <td class="text-center"><?= $kls['jumlah']; ?></td>
                                    <td class="text-center">
                                        
                                        <a href="<?php echo base_url(); ?>admin/hapus_kelas/<?= $id_matkul?>/<?= $kls['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                                        <a href="<?php echo base_url(); ?>admin/detail_kelas/<?= $id_matkul?>/<?= $kls['id'] ?>" class="badge badge-success float-center" ?>detail</a>
                                </td>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </header>
        
    </div>
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../../assets/js/jquery-ui.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/jquery.stellar.min.js"></script>
    <script src="../../assets/js/jquery.countdown.min.js"></script>
    <script src="../../assets/js/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/js/jquery.easing.1.3.js"></script>
    <script src="../../assets/js/aos.js"></script>
    <script src="../../assets/js/jquery.fancybox.min.js"></script>
    <script src="../../assets/js/jquery.sticky.js"></script>
    <script src="../../assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>
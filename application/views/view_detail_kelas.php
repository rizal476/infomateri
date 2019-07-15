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
    <link rel="stylesheet" href="../../../assets/css/owl.theme.default.min.css">
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

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="margin-left: -300px;">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar py-4 site-navbar-target" role="banner" style="width: 2000px;">

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
                        <h3 class="text-center">Daftar Mahasiswa</h3>
                        <h3 class="text-center"><?php echo $kelas[0]['kelas']?></h3>
                        <a href="<?php echo base_url()?>admin/view_tambah_mhs/<?= $kelas[0]['id']?>" style="color: white;"><div id="kelas" style="background-color: #51be78; width: 200px; height 30px; float: right; text-align: center; border-radius: 5px;">+ Tambah Mahasiswa</div></a>
                        
                        <table class="table table-bordered mt-5">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle" scope="col">NIM</th>
                                    <th class="text-center align-middle" scope="col" style="width: 400px;">NAMA</th>
                                    <th class="text-center align-middle" scope="col">TP</th>
                                    <th class="text-center align-middle" scope="col" colspan="10">TM</th>
                                    <th class="text-center align-middle" scope="col" colspan="10">Praktikum</th>
                                    <th class="text-center align-middle" scope="col">Kehadiran</th>
                                    <th class="text-center align-middle" scope="col">Presentasi</th>
                                    <th class="text-center align-middle" scope="col" colspan="2">Kuis</th>
                                    <th class="text-center align-middle" scope="col">UTS</th>
                                    <th class="text-center align-middle" scope="col">UAS</th>
                                    <th class="text-center align-middle" scope="col">Pembicara</th>
                                    <th class="text-center align-middle" scope="col">Diskusi</th>
                                    <th class="text-center align-middle" scope="col">Total</th>
                                    <th class="text-center align-middle" scope="col">Indeks Sementara</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><?php foreach ($mahasiswa as $kls) :  ?>
                                    <td class="text-center"><?= $kls['nim']; ?></td>
                                    <td class="text-center" style="min-width: 250px;"><?= $kls['nama']; ?></td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tp']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tm1']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tm2']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tm3']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tm4']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tm5']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tm6']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tm7']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tm8']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tm9']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['tm10']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['p1']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['p2']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['p3']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['p4']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['p5']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['p6']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['p7']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['p8']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['p9']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['p10']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['kehadiran']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['presentasi']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['kuis1']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['kuis2']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['uts']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['uas']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['pembicara']; ?>" class="input" name="nim">
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['diskusi']; ?>" class="input" name="nim">
                                    </td>
                                    <?php $kls['total'] = $kls['tp']+$kls['tm1']+$kls['tm2']+$kls['tm3']+$kls['tm4']+
                                        $kls['tm5']+$kls['tm6']+$kls['tm7']+$kls['tm8']+$kls['tm9']+$kls['tm10']+$kls['p1']+$kls['p2']+$kls['p3']+$kls['p4']+$kls['p5']+$kls['p6']+$kls['p7']+$kls['p8']+$kls['p9']+$kls['p10']+
                                        $kls['kehadiran']+$kls['presentasi']+$kls['kuis1']+$kls['kuis2']+$kls['uts']+$kls['uas']+$kls['pembicara']+$kls['diskusi']?>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?= $kls['total']; ?>" class="input" name="nim" readonly>
                                    </td>
                                    <td class="text-center">
                                        <input style="border: 1px solid; border-radius: 5px; width: 30px; text-align: center;" type="text" placeholder="<?php 
                                        if ($kls['total'] <= 40){
                                            echo "E";
                                        } else if ($kls['total'] <= 55 and $kls['total'] > 40){
                                            echo "D";
                                        } else if ($kls['total'] <= 65 and $kls['total'] > 55){
                                            echo "C";
                                        } else if ($kls['total'] <= 79 and $kls['total'] > 66){
                                            echo "B";
                                        } else if ($kls['total'] <= 150 and $kls['total'] > 80){
                                            echo "A";
                                        }
                                        ?>" class="input" name="nim" readonly>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>admin/hapus_kelas/<?= $kls['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                                        <a href="" class="badge badge-success float-center" ?>detail</a>
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
    <!-- .site-wrap -->
    <!-- <div class="container-fluid">
        <div class="row-fluid">
            <div class="centering text-center">
                <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100 p-t-85 p-b-20">
                            <form method="post" action="<?php echo base_url()?>admin/aksi_login" class="login100-form validate-form">
                                <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                                    <input class="input100" type="text" name="nidn">
                                    <span class="focus-input100" data-placeholder="NIDN"></span>
                                </div>

                                <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                                    <input class="input100" type="password" name="password">
                                    <span class="focus-input100" data-placeholder="Password"></span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn" style="margin-top: 30px;">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-4">test</div>
            <div class="col-4">test</div>
            <div class="col-4">test</div>
        </div>        
    </div> -->
    

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
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Infomateri.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../../../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../../assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../../assets/css/aos.css">
    <link rel="stylesheet" href="../../../assets/css/login.css">
    <link href="../../../assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
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
                <img src="../../../assets/images/logo.png" alt="Image" class="img-fluid" style="width: 50%">
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
                <div class="row">
                    <div class="col">
                        <h4 class="text-center" style="margin-top: -50px;">List Mahasiswa</h3>
                        <h4 class="text-center"><?php echo $kelas[0]['kelas']?></h3>
                        <a href="<?php echo base_url()?>admin/view_tambah_mhsKelas/<?= $kelas[0]['id']?>" style="color: white;"><div id="kelas" style="background-color: #51be78; width: 200px; height 30px; float: right; text-align: center; border-radius: 5px; margin-left: 5px;">+ Tambah Mahasiswa</div></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-tabs justify-content-center">
                            <li class="nav-item">
                                <a style="color: #51be78" class="nav-link active addressClick" data-toggle="tab" href="#tp">Tugas Pendahuluan</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #51be78" class="nav-link addressClick" data-toggle="tab" href="#tm">Tugas Mandiri</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #51be78" class="nav-link addressClick" data-toggle="tab" href="#p">Praktikum</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #51be78" class="nav-link addressClick" data-toggle="tab" href="#k">Kehadiran</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #51be78" class="nav-link addressClick" data-toggle="tab" href="#pre">Presentasi</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #51be78" class="nav-link addressClick" data-toggle="tab" href="#kuis">Kuis</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #51be78" class="nav-link addressClick" data-toggle="tab" href="#ujian">Ujian</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #51be78" class="nav-link addressClick" data-toggle="tab" href="#aktif">Keaktifan</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tp">
                                <form id="form_nilai" method="post" action="<?php echo base_url()?>admin/input_tp/<?= $id_matkul?>/<?= $kelas[0]['id']?>">
                                    <table class="table table-bordered mt-5">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle" scope="col">NIM</th>
                                                <th class="text-center align-middle" scope="col" style="width: 400px;">NAMA</th>
                                                <th class="text-center align-middle" scope="col">Tugas Pendahuluan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><?php foreach ($mahasiswa as $kls) :  ?>
                                                <td class="text-center">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nim']; ?>" class="input" name="nim[]">
                                                </td>
                                                <td class="text-center" style="min-width: 250px;">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nama']; ?>" class="input" name="nama">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['tp']; ?>" class="input" name="tp[]">
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <button type="submit" name="submit" value="submit"></button>
                                </form>
                            </div>
                            <div class="tab-pane" id="tm">
                                <form id="form_nilai" method="post" action="<?php echo base_url()?>admin/input_tm/<?= $id_matkul?>/<?= $kelas[0]['id']?>">
                                    <table class="table table-bordered mt-5">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle" scope="col">NIM</th>
                                                <th class="text-center align-middle" scope="col" style="width: 400px;">NAMA</th>
                                                <th class="text-center align-middle" scope="col" colspan="6">Tugas Mandiri</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><?php foreach ($mahasiswa as $kls) :  ?>
                                                <td class="text-center">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nim']; ?>" class="input" name="nim[]">
                                                </td>
                                                <td class="text-center" style="min-width: 250px;">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nama']; ?>" class="input" name="nama">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['tm1']; ?>" class="input" name="tm1[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['tm2']; ?>" class="input" name="tm2[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['tm3']; ?>" class="input" name="tm3[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['tm4']; ?>" class="input" name="tm4[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['tm5']; ?>" class="input" name="tm5[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['tm6']; ?>" class="input" name="tm6[]">
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                <button type="submit" name="submit" value="submit"></button>
                                </form>
                            </div>
                            <div class="tab-pane" id="p">
                                <form id="form_nilai" method="post" action="<?php echo base_url()?>admin/input_p/<?= $id_matkul?>/<?= $kelas[0]['id']?>">
                                    <table class="table table-bordered mt-5">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle" scope="col">NIM</th>
                                                <th class="text-center align-middle" scope="col" style="width: 400px;">NAMA</th>
                                                <th class="text-center align-middle" scope="col" colspan="10">Praktikum</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><?php foreach ($mahasiswa as $kls) :  ?>
                                                <td class="text-center">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nim']; ?>" class="input" name="nim[]">
                                                </td>
                                                <td class="text-center" style="min-width: 250px;">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nama']; ?>" class="input" name="nama">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['p1']; ?>" class="input" name="p1[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['p2']; ?>" class="input" name="p2[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['p3']; ?>" class="input" name="p3[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['p4']; ?>" class="input" name="p4[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['p5']; ?>" class="input" name="p5[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['p6']; ?>" class="input" name="p6[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['p7']; ?>" class="input" name="p7[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['p8']; ?>" class="input" name="p8[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['p9']; ?>" class="input" name="p9[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['p10']; ?>" class="input" name="p10[]">
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                <button type="submit" name="submit" value="submit"></button>
                                </form>
                            </div>
                            <div class="tab-pane" id="k">
                                <form id="form_nilai" method="post" action="<?php echo base_url()?>admin/input_k/<?= $id_matkul?>/<?= $kelas[0]['id']?>">
                                    <table class="table table-bordered mt-5">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle" scope="col">NIM</th>
                                                <th class="text-center align-middle" scope="col" style="width: 400px;">NAMA</th>
                                                <th class="text-center align-middle" scope="col">Kehadiran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><?php foreach ($mahasiswa as $kls) :  ?>
                                                <td class="text-center">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nim']; ?>" class="input" name="nim[]">
                                                </td>
                                                <td class="text-center" style="min-width: 250px;">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nama']; ?>" class="input" name="nama">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['kehadiran']; ?>" class="input" name="kehadiran[]">
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                <button type="submit" name="submit" value="submit"></button>
                                </form>
                            </div>
                            <div class="tab-pane" id="pre">
                                <form id="form_nilai" method="post" action="<?php echo base_url()?>admin/input_pre/<?= $id_matkul?>/<?= $kelas[0]['id']?>">
                                    <table class="table table-bordered mt-5">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle" scope="col">NIM</th>
                                                <th class="text-center align-middle" scope="col" style="width: 400px;">NAMA</th>
                                                <th class="text-center align-middle" scope="col">Presentasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><?php foreach ($mahasiswa as $kls) :  ?>
                                                <td class="text-center">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nim']; ?>" class="input" name="nim[]">
                                                </td>
                                                <td class="text-center" style="min-width: 250px;">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nama']; ?>" class="input" name="nama">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['presentasi']; ?>" class="input" name="presentasi[]">
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                <button type="submit" name="submit" value="submit"></button>
                                </form>
                            </div>
                            <div class="tab-pane" id="kuis">
                                <form id="form_nilai" method="post" action="<?php echo base_url()?>admin/input_kuis/<?= $id_matkul?>/<?= $kelas[0]['id']?>">
                                    <table class="table table-bordered mt-5">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle" scope="col">NIM</th>
                                                <th class="text-center align-middle" scope="col" style="width: 400px;">NAMA</th>
                                                <th class="text-center align-middle" scope="col" colspan="2">Kuis</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><?php foreach ($mahasiswa as $kls) :  ?>
                                                <td class="text-center">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nim']; ?>" class="input" name="nim[]">
                                                </td>
                                                <td class="text-center" style="min-width: 250px;">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nama']; ?>" class="input" name="nama">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['kuis1']; ?>" class="input" name="kuis1[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['kuis2']; ?>" class="input" name="kuis2[]">
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                <button type="submit" name="submit" value="submit"></button>
                                </form>
                            </div>
                            <div class="tab-pane" id="ujian">
                                <form id="form_nilai" method="post" action="<?php echo base_url()?>admin/input_ujian/<?= $id_matkul?>/<?= $kelas[0]['id']?>">
                                    <table class="table table-bordered mt-5">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle" scope="col">NIM</th>
                                                <th class="text-center align-middle" scope="col" style="width: 400px;">NAMA</th>
                                                <th class="text-center align-middle" scope="col">UTS</th>
                                                <th class="text-center align-middle" scope="col">UAS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><?php foreach ($mahasiswa as $kls) :  ?>
                                                <td class="text-center">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nim']; ?>" class="input" name="nim[]">
                                                </td>
                                                <td class="text-center" style="min-width: 250px;">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nama']; ?>" class="input" name="nama">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['uts']; ?>" class="input" name="uas[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['uts']; ?>" class="input" name="uas[]">
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                <button type="submit" name="submit" value="submit"></button>
                                </form>
                            </div>
                            <div class="tab-pane" id="aktif">
                                <form id="form_nilai" method="post" action="<?php echo base_url()?>admin/input_aktif/<?= $id_matkul?>/<?= $kelas[0]['id']?>">
                                    <table class="table table-bordered mt-5">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle" scope="col">NIM</th>
                                                <th class="text-center align-middle" scope="col" style="width: 400px;">NAMA</th>
                                                <th class="text-center align-middle" scope="col">Pembicara</th>
                                                <th class="text-center align-middle" scope="col">Diskusi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><?php foreach ($mahasiswa as $kls) :  ?>
                                                <td class="text-center">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nim']; ?>" class="input" name="nim[]">
                                                </td>
                                                <td class="text-center" style="min-width: 250px;">
                                                    <input style="text-align: center;" readonly type="text" value="<?= $kls['nama']; ?>" class="input" name="nama">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['pembicara']; ?>" class="input" name="pembicara[]">
                                                </td>
                                                <td class="text-center">
                                                    <input style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="<?= $kls['diskusi']; ?>" class="input" name="diskusi[]">
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                <button type="submit" name="submit" value="submit"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <button onclick="window.location.href='<?php echo base_url()?>admin/detail_matkul/<?php echo $this->uri->segment(3);?>'" type="text" name="tambah" class="btn btn-secondary" style="margin-left: 20px; float:right;">Kembali</button>
            </div>
        </header>
    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>
    <!-- <script src="../assets/js/jquery-3.3.1.min.js"></script> -->
    <script src="../../../assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../../../assets/js/jquery-ui.js"></script>
    <script src="../../../assets/js/popper.min.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/owl.carousel.min.js"></script>
    <script src="../../../assets/js/jquery.stellar.min.js"></script>
    <script src="../../../assets/js/jquery.countdown.min.js"></script>
    <script src="../../../assets/js/bootstrap-datepicker.min.js"></script>
    <script src="../../../assets/js/jquery.easing.1.3.js"></script>
    <script src="../../../assets/js/aos.js"></script>
    <script src="../../../assets/js/jquery.fancybox.min.js"></script>
    <script src="../../../assets/js/jquery.sticky.js"></script>
    <script src="../../../assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="../../../assets/js/main.js"></script>
    <script src="../../../assets/js/bootstrap.js"></script>
    <script src="../../../assets/js/jqeury.js"></script>
    <script src="../../../assets/js/popper.js"></script>
    
</body>

</html>
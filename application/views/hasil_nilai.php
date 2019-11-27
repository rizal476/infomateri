<!DOCTYPE html>
<html lang="en">

<head>
    <title>Academics &mdash; Website by Colorlib</title>
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

        <div class="container">
            <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="<?php echo base_url()?>welcome" class="d-block">
                <img src="../assets/images/logo.png" alt="Image" class="img-fluid" style="width: 50%">
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
                    <a href="<?php base_url()?>view_nilai" class="nav-link text-left">Nilai</a>
                    </li>
                    <li>
                    <a href="courses.html" class="nav-link text-left">KP & TA</a>
                    </li>
                    <li>
                        <a href="contact.html" class="nav-link text-left">Kontak</a>
                    </li>
                    <?php if ($this->session->userdata("name") != "") { ?>
                    <li class="has-children">
                    <a href="about.html" class="nav-link text-left">Profil</a>
                    <ul class="dropdown">
                        <li><a href=""><?php echo $this->session->userdata("name")?></a></li>
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
        
        <div style="margin-top: 80px;" class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">NIM</label>
                        <div class="col-sm-3">
                            <input readonly id="nim" type="text" class="form-control" name="judul" value="<?php echo $mhs[0]["nim"]?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Nama</label>
                        <div class="col-sm-3">
                            <input readonly id="nama" type="text" class="form-control" name="judul" value="<?php echo $mhs[0]["nama"]?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Index</label>
                        <div class="col-sm-3">
                            <input readonly id="index" type="text" class="form-control" name="judul" value="">
                        </div>
                    </div>
                    <div style="margin-bottom: 20px;" class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Matakuliah
                        </button>
                        <ul id="pilih" class="dropdown-menu" aria-labelledby="dropdownMenuButton" name="pp">
                        <!-- <?php var_dump($matkul)?> -->
                            <?php foreach($matkul as $row):?>
                                <li class="dropdown-item"><?php echo $row["nama_matkul"];?></li>
                            <?php endforeach;?>
                            <!-- <li class="dropdown-item">awsdasdasd</li> -->
                        </ul>
                    </div>
                </div>
                <div class="w-100"></div>
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
                            <form id="form_nilai" method="post" action="">
                                <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle" scope="col">Tugas Pendahuluan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input id="nilaitp" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tp[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane" id="tm">
                            <form id="form_nilai" method="post" action="">
                                <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle" scope="col">Tugas Mandiri 1</th>
                                            <th class="text-center align-middle" scope="col">Tugas Mandiri 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input id="nilaitm1" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm1[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaitm2" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm2[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane" id="p">
                            <form id="form_nilai" method="post" action="">
                                <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle" scope="col">Praktikum 1</th>
                                            <th class="text-center align-middle" scope="col">Praktikum 2</th>
                                            <th class="text-center align-middle" scope="col">Praktikum 3</th>
                                            <th class="text-center align-middle" scope="col">Praktikum 4</th>
                                            <th class="text-center align-middle" scope="col">Praktikum 5</th>
                                            <th class="text-center align-middle" scope="col">Praktikum 6</th>
                                            <th class="text-center align-middle" scope="col">Praktikum 7</th>
                                            <th class="text-center align-middle" scope="col">Praktikum 8</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input id="nilaip1" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm1[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaip2" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm2[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaip3" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm2[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaip4" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm2[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaip5" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm2[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaip6" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm2[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaip7" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm2[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaip8" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm2[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane" id="k">
                            <form id="form_nilai" method="post" action="">
                                <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle" scope="col">Kehadiran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input id="nilaikehadiran" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm1[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane" id="kuis">
                            <form id="form_nilai" method="post" action="">
                                <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle" scope="col">Kuis 1</th>
                                            <th class="text-center align-middle" scope="col">Kuis 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input id="nilaik1" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm1[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaik2" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm1[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane" id="ujian">
                            <form id="form_nilai" method="post" action="">
                                <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle" scope="col">UTS</th>
                                            <th class="text-center align-middle" scope="col">UAS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input id="nilaiuts" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm1[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaiuas" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm1[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane" id="aktif">
                            <form id="form_nilai" method="post" action="">
                                <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle" scope="col">Diskusi</th>
                                            <th class="text-center align-middle" scope="col">Pembicara</th>
                                            <th class="text-center align-middle" scope="col">Presentasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input id="nilaidiskusi" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm1[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaipembicara" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm1[]">
                                            </td>
                                            <td class="text-center">
                                                <input id="nilaipresentasi" style="border: 1px solid; border-radius: 5px; width: 40px; text-align: center;" type="text" value="" class="input" name="tm1[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </header>

    </div>
    <!-- .site-wrap -->

    

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>
    <script type="text/javascript">
        jQuery.noConflict()(function ($) { // this was missing for me
            $(document).ready(function() { 
                // alert('asdasd');
                $("#pilih").on('click','li',function (){
                    // alert($(this).text());
                    var selText = $(this).text();
                    var nim = $("#nim").val();
                    // alert(nim);
                    $.ajax({
                        url : '<?php echo base_url()?>welcome/ajax',
                        data : {matkul: selText, nim: nim},
                        success : function(data){
                            obj = JSON.parse(data);
                            console.log(data);
                            total = parseInt(obj.tp) + parseInt(obj.tm1) + parseInt(obj.tm2) + parseInt(obj.p1) + parseInt(obj.p2) + parseInt(obj.p3) + parseInt(obj.p4) + parseInt(obj.p5) + parseInt(obj.p6) + parseInt(obj.p7) + parseInt(obj.p8);
                            total2 = total + parseInt(obj.kuis1) + parseInt(obj.kuis2) + parseInt(obj.kehadiran) + parseInt(obj.presentasi) + parseInt(obj.uts) + parseInt(obj.uas) + parseInt(obj.pembicara) + parseInt(obj.diskusi);
                            console.log(total2);
                            if (total >= 80){
                                $("#index").val("A");
                            }
                            else if (total >=66 && total <= 79){
                                $("#index").val("B");
                            }
                            else if (total >=56 && total <= 65){
                                $("#index").val("C");
                            }
                            else if (total >=41 && total <= 55){
                                $("#index").val("D");
                            }
                            else if (total >=0 && total <= 40){
                                $("#index").val("E");
                            }
                            $("#nilaitp").val(obj.tp);
                            $("#nilaitm1").val(obj.tm1);
                            $("#nilaitm2").val(obj.tm2);
                            $("#nilaip1").val(obj.p1);
                            $("#nilaip2").val(obj.p2);
                            $("#nilaip3").val(obj.p3);
                            $("#nilaip4").val(obj.p4);
                            $("#nilaip5").val(obj.p5);
                            $("#nilaip6").val(obj.p6);
                            $("#nilaip7").val(obj.p7);
                            $("#nilaip8").val(obj.p8);
                            $("#nilaikehadiran").val(obj.kehadiran);
                            $("#nilaik1").val(obj.kuis1);
                            $("#nilaik2").val(obj.kuis2);
                            $("#nilaiuts").val(obj.uts);
                            $("#nilaiuas").val(obj.uas);
                            $("#nilaidiskusi").val(obj.diskusi);
                            $("#nilaipembicara").val(obj.pembicara);
                            $("#nilaipresentasi").val(obj.presentasi);
                        }
                    });
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
</body>

</html>
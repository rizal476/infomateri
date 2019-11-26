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
                            <input readonly id="judul" type="text" class="form-control" name="judul" value="<?php echo $mhs[0]["nim"]?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Nama</label>
                        <div class="col-sm-3">
                            <input readonly id="judul" type="text" class="form-control" name="judul" value="<?php echo $mhs[0]["nama"]?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Index</label>
                        <div class="col-sm-3">
                            <input readonly id="judul" type="text" class="form-control" name="judul" value="">
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
                            <form id="form_nilai" method="post" action="">
                                <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle" scope="col">Tugas Pendahuluan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><?php foreach ($mahasiswa as $kls) :  ?>
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
                    var nim = 0;
                    $.ajax({
                        url : '<?php echo base_url()?>welcome/ajax',
                        data : {matkul: selText, nim: nim},
                        success : function(data){
                            obj = JSON.parse(data);
                            console.log(obj);
                            var length = 0;
                            var tambah = '';
                            for(var k in obj) if(obj.hasOwnProperty(k)) length++;
                            // alert(length);
                            for (i = 0; i < length; i++) {
                                // alert(i);
                                tambah = tambah + '\
                                <div class="col-lg-4 col-md-6 mb-4">\
                                    <div class="course-1-item">\
                                        <figure class="thumnail">\
                                        <a href="course-single.html"><img src="../assets/images/modules.png" alt="Image" class="img-fluid"></a>\
                                        <div class="category"><h3>Materi ' + (i+1) + '</h3></div>\
                                        </figure>\
                                        <div class="course-1-content pb-4">\
                                        <h2>'+obj[i].judul+'</h2>\
                                        <p style="font-family: Muli;" class="desc mb-4">'+obj[i].detail+'</p>\
                                        <p style="font-family: Muli;" ><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Download</a></p>\
                                        </div>\
                                    </div>\
                                </div>';
                            }
                            $("#target").html(tambah);
                            $("#dropdownMenuButton").text(obj[0].matkul);
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
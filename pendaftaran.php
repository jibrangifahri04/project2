<?php
include("config.php");
?>
<html lang="en">
  <head>
    <!--=============================================== 
      Template Design By WpFreeware Team.
      Author URI : http://www.wpfreeware.com/
    ====================================================-->
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>SMKN 1 LB : PENDAFTARAN</title>

    <!-- Mobile Specific Metas 
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- LOGO -->
            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="index.html">SMKN <span>1 LINTAU BUO</span></a>           
            <!-- IMG BASED LOGO  -->
             <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->           
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li ><a href="index.html">Home</a></li><li><a href="blog-archive.html">Profil</a></li>
                <li><a href="gallery2.php">Gallery</a></li>                
                <li class="active"class="active"><a href="pendaftaran.php">pendaftaran</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jurusan<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                   <li><a href="TAV.html">Teknik Audio Video</a></li>
                    <li><a href="RPL.html">Rekayasa Perangkat Lunak</a></li>
                    <li><a href="TKJ.html">Teknik Komputer Jaringan</a></li>
                     <li><a href="TITL.html">Teknik Instalasi Tenaga Listrik</a></li>
                      <li><a href="TKR.html">Teknik Kendaraan Ringan</a></li>
                       <li><a href="TP.html">Teknik Permesinan</a></li>  
                        <li><a href="DPIB.html">Desain Pemodelan dan Informasi Bangunan </a></li>
                         <li><a href="BKP.html">Bisnis Konstruksi dan Properti</a></li>
                        <li><a href="KKBT.html">Kreya Kerajinan Batik dan Tekstil</a></li>

                  </ul>
                </li>               
                <li><a href="contact.php">Contact</a></li>
                 <li ><center><a class="slider_btn" href="admin2/index.php" style="height: 50px">LOG IN</a></center></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner" style="background-image: url('img/banner1.jpg');">
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive" style="width:65%; float: left;">
    <div>
    <center>
       <div class="col-lg-15 col-md-15 col-sm-15">
      <h2 class="blog_title"><a href="pendaftaran.php">PENDAFTARAN SISWA BARU</a></h2>

                    <div class="blog_commentbox">
                      <p><i class="fa fa-user"></i> SMKN 1 LINTAU BUO</p>
                      <p><i class="fa fa-calendar"></i>15 March 2015</p>
                      <a href="#"><i class="fa fa-comments"></i>20 Comments</a>
       <div class="col-lg-10 col-md-10 col-sm-10">
      
      <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
    <table class="blog_pendaftaran">

        <tr><td width="400px" height="50px"> NISN</td>
        <td><input type="number" class="form-control" name="nis" placeholder="NISN" /></td></tr>
        <tr><td height="50px"> NAMA LENGKAP</td>
        <td><input type="text" class="form-control" name="nama" placeholder="NAMA" /></td></tr>
        <tr><td height="50px"> ALAMAT</td>
        <td><input type="text" class="form-control" name="alamat_lengkap" placeholder="ALAMAT" /></td></tr>
        <tr><td height="50px"> TEMPAT LAHIR</td>
        <td><input type="text" class="form-control" name="tempat_lahir" placeholder="TEMPAT LAHIR" /></td></tr>
        <tr><td height="50px"> TANGGAL LAHIR</td>
        <td><input type="date"class="form-control" name="tanggal_lahir"  placeholder="tanggal_lahir" /></td></tr>
        <tr><td height="50px"> ASAL SEKOLAH</td>
        <td><input type="text"class="form-control" name="asal_sekolah" placeholder="ASAL SEKOLAH" /></td></tr>
        <tr><td height="50px"> JENIS KELAMIN</td>
        <td height="30px"><input type="radio" name="jenis_kelamin" value="L"> LAKI-LAKI <br>
         <input type="radio" name="jenis_kelamin" value="P"> PEREMPUAN </td></tr>
        <tr><td height="50px"> JURUSAN </td><td><select name="jurusan" placeholder="jurusan">
          <option value=""> --Pilihan-- </option>
          <option value="TAV"> TAV </option>
         <option value="RPL"> RPL </option>
          <option value="TKJ"> TKJ</option>
         <option value="TITL"> TITL </option>
         <option value="TKR"> TKR</option>
         <option value="TP"> TP </option>
         <option value="DPIB"> DPIB </option>
         <option value="BKP"> BKP </option>
         <option value="KKBT"> KKBT </option>
          </select></td></tr>
          <tr><td height="50px"> Agama </td><td>
            <select name="agama">
               <option> --Pilihan-- </option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>konghucu</option>
            </select>
        <tr><td height="50px"> NAMA AYAH</td>
        <td><input type="text" class="form-control"name="ayah"  placeholder="NAMA AYAH" /></td></tr>
        <tr><td height="50px"> NAMA IBU</td>
        <td><input type="text" class="form-control"name="ibu" placeholder="NAMA IBU" /></td></tr>
        <tr><td> FOTO </td>
        <td height="30px"><input type="file" name="gambar" id="gambar" />
        <tr> <td>batas</td>

        <td><input type="submit" name="pendaftaran" value="Simpan"></input>
          <input type="reset" value="Batal"></input></td></tr>
      </table>
  </form>

    </section>
    <!--=========== END COE BANNER SECTION ================-->
     <section >
          <div class="col-lg-4 col-md-4 col-sm-4" style="border: 1px solid; float: right;">
            <div class="courseArchive_sidebar">
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>PRESTASI SEKOLAH <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="img/news.jpg" class="media-object">
                        </a>
                      <div class="media-body">
                       <a >Juara 1 Guru/tutor Berprestasi kab.tanah datar2005</a>
                   
                      </div>
                    </div>                    
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Juara 1 Guru/tutor Berprestasi kab.tanah datar 2016</a>
                       <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Juara 1 Lomba penulisan esai antar SMA/MA/SMK KAB.TanahDatar</a>
                       <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>                  
                </ul>
              </div>

              <!-- End single sidebar -->
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>KAB.Tanah Datar <span class="fa fa-angle-double-right"></span></h2>
                <img src="img/side-add.jpg" alt="img"></a>
              </div>
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->

      
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>CONTACT</h3>
               <p>Taluak, Lintau Buo, Kabupaten Tanah Datar, Sumatera Barat 27292</p>
               <p>Phone: 662-807-9585</p>
               <p>Email:contact@wpfdegree.com</p>
               </div>
             </div>
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
            <h3>ekstrakulikuler</h3>
                <ul class="footer_widget_nav">
                  <li><a href="osis.html">Osis</a></li>
                  <li><a href="pramuka.html">Pramuka</a></li>
                  <li><a href="rohis.html">Rohis</a></li>
                  <li><a href="sistepala.html">Sistepala ALNINO</a></li>
                  <li><a href="paskibra.html">Paskibra</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/groups/135913876461987/"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="instagram" class="soc_tooltip"  href="https://www.instagram.com/smkn1lintau/"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="https://www.youtube.com/watch?v=E875yQ6-wzg&feature=youtu.be"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>


          </div>
        </div>
      </div>

      </section>
    </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
           <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed by <a href="https://www.instagram.com/jibran_gifahri/" rel="nofollow">Jibran Gifahri</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>
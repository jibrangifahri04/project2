<?php 
include ("config.php");
 ?>
 <!DOCTYPE html>
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
     <title>SMKN 1 LB: Contact</title>

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
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> <div class="container">
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
                <li ><a href="index.html">Home</a></li>
                <li><a href="blog-archive.html">Profil</a></li>
                <li><a href="gallery2.php">Gallery</a></li>                
                <li><a href="pendaftaran.php">pendaftaran</a></li>
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
                <li class="active"><a href="contact.php">Contact</a></li>
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
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h1 class="title_two">SMK NEGERI 1 LINTAU BUO</h1>
              <span></span> 
            </div>
          </div>
       </div>
       <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8">
         <h3 class="blog_title"><a href="contact.php">KOLOM KOMENTAR</a></h3>
           <div class="contact_form wow fadeInLeft">
             <form action="proses-komentar.php" method="post" enctype="multipart/form-data">
              <table  class="blog_pendaftaran" class="form-control">
                <tr>
        <td width="500px" height="50px"width="400px" height="50px"><input type="text" class="form-control" name="nama" placeholder="NAMA" /></td></tr>
        <tr>
        <td width="500px" height="50px"><input type="Email" class="form-control" name="email" placeholder="EMAIL" /></td></tr>
        <tr>
        <td width="500px" height="50px"><input type="text" class="form-control" name="alasan" placeholder="ALASAN" /></td></tr>
        <tr>
     <td width="500px"><textarea name="komentar" class="form-control" placeholder="KOMENTAR" rows="10"></textarea>
    </td>
    </tr>
    <tr>
    <td><input type="submit" name="komentar" value="Kirim"></input>
          <input type="reset" value="Batal"></input></td></tr>
              </table>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4">
           <div class="contact_address wow fadeInRight">
             <h3>Address</h3>
             <div class="address_group">
               <p>Taluak, Lintau Buo, Kabupaten Tanah Datar, Sumatera Barat 27292</p>
               <p>Phone: 0813-xxxx-xxxx</p>
               <p>Email: smkn1lintau@gmail.com</p>
             </div>
             <div class="address_group">
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
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGIN GOOGLE MAP SECTION ================-->
    <section id="googleMap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6638546730683!2d100.7765405273437!3d-0.5041716922544168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2ad0b890cc863f%3A0x60a2a67088b2e4a4!2sSMKN+01+Lintau+Buo!5e0!3m2!1sid!2sid!4v1561793957586!5m2!1sid!2sid" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!--=========== END GOOGLE MAP SECTION ================-->
    
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

      </section>
    </div>
      <!-- End footer top area -->

      
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
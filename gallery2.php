<?php 
 require "config.php";
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
    <title>SMKN 1 LB : Gallery</title>

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
                <li><a href="index.html">Home</a></li>
                <li><a href="blog-archive.html">Profil</a></li>
                <li class="active"><a href="gallery2.php">Gallery</a></li>                
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
    
    <!--=========== BEGIN GALLERY SECTION ================-->
      <section id="gallery">
      <div class="container">
        <div class="row">
          <div id="daftar_foto">
            <div class="col-xs-4">
               <form action="admin2/gallery1.php" method="post" enctype="multipart/form-data">
            <a href="img/gallery/img2.jpg" >
              <video width="350" height="250" controls>
              <source src="img/v1.mp4" type="video/mp4">
            </a>
            </div>
            <?php
              $sql = mysqli_query($db, "SELECT * FROM gallery");
              while($data = mysqli_fetch_assoc($sql))
              {
            ?>
            <div class="col-xs-4" style="padding: 10px;" id="<?=$data['foto']?>">
              <a href="admin2/img/gallery/<?=$data['foto']?>" title="This is Title" style="height: 250px; width: 300px; margin: 5px">
                <img class="gallery_img" src="admin2/img/gallery/<?=$data['foto']?>" alt="img" style="height: 250px; width: 300px; margin: 5px" />
                
              </a>
            </div>
            <?php
              }
            ?>
          </div>
          <div class="col-xs-4">
            <form class="text-center" method="POST" enctype="multipart/form-data" id="form_upload">

              <button type="button" name="btn_upload" class="btn btn-sm btn-warning btn-flat" style="display: none;" onclick="document.getElementsByName('foto')[0].click();">Ganti Foto</button>
              <input type="file" name="foto" style="display: none;" onchange="document.getElementById('submit_foto').click();" />
              <button type="submit" style="display: none;" id="submit_foto">Upload</button>
            </form>
          </div>

        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->
    
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
            <h3>Ekstrakulikuler</h3>
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
<?php
  require "config.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin : Gallery</title>
  <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- icons admin-->
     <link rel="shortcut icon" type="img/icons" href="img/wpf-favicon.png"/>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ADMIN</a>
            </div>

               <ul class="nav navbar-top-links navbar-right">
                
                        
                        <li class="divider"></li>
                        <li><a href="Logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
            
                  
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="gallery1.php" class="active-menu"><i class="fa fa-desktop"></i> Gallery</a>
                    </li>
                     <li>
                        <a href="komentar.php"><i class="fa fa-table"></i> Tabel komentar</a>
                    </li>
                    
                    <li>
                        <a  href="pendaftaran.php"><i class="fa fa-table"></i>Tabel Daftar</a>
                    </li>
                     <li>
                        <a  href="empty.html"><i class="fa fa-fw fa-file"></i> 404-ERROR</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
       <div class="row">
                    <div class="col-md-12">
                      <center>
                        <h1 class="page-header">
                            Gallery Sekolah
                        </h1>
                        </center>
                    </div>
                </div> 
                 <!-- /. ROW  -->
         
        
      <section id="gallery">
      <div class="container">
        <div class="row">
          <div id="daftar_foto">
            <div class="col-xs-4">
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
              <a href="img/gallery/img2.jpg" title="This is Title">
                <img class="gallery_img" src="img/gallery/<?=$data['foto']?>" alt="img" style="height: 250px; width: 300px; margin: 5px" />
                
              </a>
              <button class="btn btn-danger" type="button" onclick="hapusFoto(<?=$data['id']?>, '<?=$data['foto']?>')">Hapus</button>
            </div>
            <?php
              }
            ?>
          </div>
          <div class="col-xs-4">
            <form class="text-center" method="POST" enctype="multipart/form-data" id="form_upload">
              <!-- KO TOMBOL UPLOADNYO -->
              <img class="gallery_img" src="images/icons/p2.png" name="btn_upload" alt="img" style="height: 250px; width: 300px; margin: 5px" />

              <button type="button" name="btn_upload" class="btn btn-sm btn-warning btn-flat" style="display: none;" onclick="document.getElementsByName('foto')[0].click();">Ganti Foto</button>
              <input type="file" name="foto" style="display: none;" onchange="document.getElementById('submit_foto').click();" />
              <button type="submit" style="display: none;" id="submit_foto">Upload</button>
            </form>
          </div>

        </div>
      </div>
    </section>
                <!-- /. ROW  -->
        <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <script>
document.getElementById("form_upload").addEventListener("submit", function(e){
  e.preventDefault();
  var fileInput = document.getElementsByName('foto')[0];
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
  // Validasi ekstensi file
  if(!allowedExtensions.exec(filePath))
  {
      alert('Format gambar yang boleh diupload hanyalah .jpeg/.jpg/.png/.gif!');
      fileInput.value = '';
      return false;
  }
  else
  {
    // Validasi ukuran file
    if(fileInput.files[0].size/1024 > 5000)
    {
      alert('Foto profil maksimal berukuran 500Kb!');
    }
    else
    {
      var form_data = new FormData(this);
      form_data.append("foto", fileInput);
      $.ajax({
        url: 'proses_gallery.php',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(response){
              var res = JSON.parse(response);
              var html_sekarang = document.getElementById("daftar_foto").innerHTML;
              html_sekarang += "<div class='col-xs-4' style='padding: 10px;' id='" + res.foto + "'>" +
                                "<a href='img/gallery/img2.jpg' title='This is Title'>" +
                                "<img class='img-responsive img-thumbnail' src='img/gallery/" + res.foto + "' style='height: 250px; width: 300px; margin: 5px' />" +
                                "</a>"+
"<button class='btn btn-danger' type='button' onclick='hapusFoto(" + res.id + ", \"" + res.foto + "\")'>Hapus</button>" +
                                "</div>";
              document.getElementById("daftar_foto").innerHTML = html_sekarang;
            }
      });
    }
  }
});

function hapusFoto(id, foto)
{
  $.ajax({
    url: 'hapus_gallery.php?id=' + id,
    success: function(response){
         document.getElementById(foto).remove();
        }
  });
}

document.getElementsByName("btn_upload")[0].addEventListener("click", function(){
  document.getElementsByName("btn_upload")[1].click();
})
</script>

    </script>
 
</body>
</html>

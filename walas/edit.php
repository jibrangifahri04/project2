<?php 
include "config.php"
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
  <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.html">Dream</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                        
                        <li class="divider"></li>
                        <li><a href="Logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Forms Page <small>Best form elements.</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                     <form method="post" action="proses-update1.php" enctype="multipart/form-data">
            
            <table>
              <h1>-Edit Daftar Siswa-</h1>
              <?php
              $nis = $_GET['nis'];
              $query = mysqli_query($db,"SELECT * FROM pendaftaran WHERE nis='$nis'")or die(mysqli_error($db));
              $nomor = 1;
              while($data = mysqli_fetch_array($query)){
              ?>
              <tr><td height="50px"> NIS</td>
        <td><input type="number" class="form-control" name="nis" placeholder="NIS" value="<?php echo $nis; ?>" /></td></tr>
              <tr><td height="50px"> NAMA LENGKAP</td>
        <td><input type="text" class="form-control" name="nama" placeholder="NAMA" value="<?php echo $data['nama']; ?>" /></td></tr>
        <tr><td height="50px"> ALAMAT</td>
        <td><input type="text" class="form-control" name="alamat_lengkap" placeholder="ALAMAT" value="<?php echo $data['alamat_lengkap']; ?>" /></td></tr>
        <tr><td height="50px"> TEMPAT LAHIR</td>
        <td><input type="text" class="form-control" name="tempat_lahir" placeholder="TEMPAT LAHIR" value="<?php echo $data['tempat_lahir']; ?>" /></td></tr>
        <tr><td height="50px"> TANGGAL LAHIR</td>
        <td><input type="date"class="form-control" name="tanggal_lahir"  placeholder="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>"/></td></tr>
        <tr><td height="50px"> ASAL SEKOLAH</td>
        <td><input type="text"class="form-control" name="asal_sekolah" placeholder="ASAL SEKOLAH" value="<?php echo $data['asal_sekolah']; ?>" /></td></tr>
        <tr><td height="50px"> JENIS KELAMIN</td>
        <td height="30px"><input type="radio" name="jenis_kelamin" value="L" <?=$data['jenis_kelamin'] == "L" ? "checked" : "" ?>> LAKI-LAKI <br>
         <input type="radio" name="jenis_kelamin" value="P" <?=$data['jenis_kelamin'] == "P" ? "checked" : "" ?>> PEREMPUAN </td></tr>
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
        <td><input type="text" class="form-control"name="ayah"  placeholder="NAMA AYAH" value="<?php echo $data['ayah']; ?>" /></td></tr>
        <tr><td height="50px"> NAMA IBU</td>
        <td><input type="text" class="form-control"name="ibu" placeholder="NAMA IBU" value="<?php echo $data['ibu'] ?>" /></td></tr>
        <tr><td> FOTO </td>
        <td height="30px"><input type="file" id="gambar" name="gambar" />
        <tr> <td></td>

        <td><input type="submit" name="pendaftaran" value="Simpan"></input>
          <input type="reset" value="Batal"></input></td></tr>
            </table>
        </form>
        <script>
          document.getElementsByName("jurusan")[0].value = "<?php echo $data['jurusan']; ?>";
          document.getElementsByName("agama")[0].value = "<?php echo $data['agama']; ?>";
          document.getElementsByName("gambar")[0].value = "<?php echo $data['gambar']; ?>";
        </script>
       <?php
      } ?>                            
            </div>
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
    
   
</body>
</html>

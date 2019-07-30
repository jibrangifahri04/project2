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
                <a class="navbar-brand" href="index.html">WALI KELAS</a>
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
                                     <form method="post" action="edit_siswa.php" enctype="multipart/form-data">
            
            <table>
             <h1>-Edit Siswa-</h1>
              <?php
              $nis = $_GET['nis'];
              $query = mysqli_query( $db,"SELECT * FROM siswa WHERE nis='$nis'")or die(mysqli_error($db));
              $nomor = 1;
              while($data = mysqli_fetch_array($query)){
              ?>
  <tr><td width="400px" height="50px"> NISN</td>
        <td><input type="number" class="form-control" name="nis" placeholder="NISN" value="<?php echo $data['nis']?>"/></td></tr>
        <tr><td width="400px" height="50px"> NAMA</td>
        <td><input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $data['nama']?>" /></td></tr>
        <tr><td height="50px"> Alamat</td>
        <td><input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat']?>" /></td></tr>
         <tr><td width="400px" height="50px"> No.Telpon</td>
        <td><input type="text" class="form-control" name="no_telpon" placeholder="No.telpon" value="<?php echo $data['no_telpon']?>" /></td></tr>
        <tr><td> FOTO </td><td>
          <?php
          if($data['gambar'] == '')
          {
           echo "maka masukan foto baru";
          }
          {
            echo "<img src='../siswa/siswa".$data['gambar']."' width='100' height='100' />";
          }
          ?>
          </td >
        <td height="30px"><input type="file" id="gambar" name="gambar" />
        <tr> <td></td>
        <td><input type="submit" name="siswa" value="Simpan"></input>
          <input type="reset" value="Batal"></input></td></tr>
            </table>
        </form>
        <script>

        </script>
       <?php
      } ?>     
        </div>
             </div>
            </div>                       
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

<?php
include 'config.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
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
                <a class="navbar-brand" href="index.html">WALI KELAS</a>
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
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                     <li>
                        <a href="input_siswa.php"><i class="fa fa-table"></i> Input Siswa</a>
                    </li>
                    
                    <li>
                        <a href="input_peringkat.php"><i class="fa fa-table"></i>input peringakat</a>
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
                     <center>  <h1 class="page-header">
                            Tabel Pendaftaran
                        </h1></center> 
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>

        <form action="edit_peringkat.php" method="POST" enctype="multipart/form-data">
        <center>
        <table>
             <h1>-Edit Siswa-</h1>
              <?php
              $nis = $_GET['nis'];
              $query = mysqli_query( $db,"SELECT * FROM peringkat_siswa WHERE nis='$nis'")or die(mysqli_error($db));
              $nomor = 1;
              while($data = mysqli_fetch_array($query)){
              ?>
         <tr><td width="400px" height="50px"> Peringkat</td>
        <td><input type="number" class="form-control" name="peringkat" placeholder="peringkat" value="<?php echo $data['peringkat']?>" /></td></tr>
        <tr><td width="400px" height="50px"> NISN</td>
        <td><input type="number" class="form-control" name="nis" placeholder="nis" value="<?php echo $data['nis']?>"/></td></tr>
        <tr><td height="50px"> NAMA LENGKAP</td>
        <td><input type="text" class="form-control" name="nama" placeholder="nama" value="<?php echo  $data['nama']?>"/></td></tr>
         <tr><td width="400px" height="50px"> Rata-rata</td>
        <td><input type="number" class="form-control" name="nilai_rata2" placeholder="nilai" value="<?php echo $data['nilai_rata2']?>"/></td></tr>
        <td><input type="submit" name="peringkat_siswa" value="Simpan"></input>
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
                </div>
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
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>
<?php  
include "config.php"
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin : Tabel Pendaftaran</title>
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
                        <a  href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="gallery1.php" ><i class="fa fa-desktop"></i> Gallery</a>
                    </li>
                     <li>
                        <a href="komentar.php"><i class="fa fa-table"></i> Tabel komentar</a>
                    </li>
                    
                    <li>
                        <a class="active-menu" href="pendaftaran.php"><i class="fa fa-table"></i>Tabel Daftar</a>
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
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" align="center">
                                   <thead>
                                    <tbody>
                              <th>nis</th>
                              <th>nama</th>
                              <th>alamat lengkap</th>
                              <th>tempat lahir</th>
                              <th>tanggal lahir</th>
                              <th>jenis kelamin</th>
                              <th>agama</th>
                              <th>asal sekolah</th>
                              <th>jurusan</th>
                              <th>ibu</th>
                              <th>ayah</th>
                              <th>gambar</th>
                              <th>tools</th>
                              </thead>
                              <tbody>
                                <?php
                                $sql = "SELECT * FROM pendaftaran";
                                $query=mysqli_query($db,$sql);
                                while ($data=mysqli_fetch_assoc($query)) {
                                  
                                
                                ?>
                                <tr>
                                    <center>
                                  <td><?= $data["nis"];?></td>
                                  <td><?= $data["nama"];?></td>
                                  <td><?= $data["alamat_lengkap"];?></td>
                                  <td><?= $data["tempat_lahir"];?></td>
                                  <td><?= $data["tanggal_lahir"];?></td>
                                  <td><?= $data["jenis_kelamin"];?></td>
                                  <td><?= $data["agama"];?></td>
                                  <td><?= $data["asal_sekolah"];?></td>
                                  <td><?= $data["jurusan"];?></td>
                                  <td><?= $data["ibu"];?></td>
                                  <td><?= $data["ayah"];?></td>
                                  <td><img src='siswa/<?=$data['gambar']?>' style='width:100px; height:100px;' /></td></center>
                                  <td><a href="edit.php?nis=<?php echo $data['nis']; ?>">Edit</a>
                                  <a href="delete.php?nis=<?php echo $data['nis']; ?>">Delete</a></td>
                                </td>

                                </tr>
                              <?php } ?>
                              </tbody>
                                </table>
                                <br />
    <button style="margin-left:5%" onClick="print_d()">Print Document</button>
    <script>
		function print_d(){
			window.open("doc_laporan.php","_blank");
		}
	</script>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>

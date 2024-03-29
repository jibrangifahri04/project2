<?php 
include "config.php"
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin : Tabel Komentar</title>
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
                    <!-- /.dropdown-user -->
               
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li>
                        <a  href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="input_siswa.php"><i class="fa fa-fw fa-file"></i>Data Siswa</a>
                    </li>
                    
                     <li>
                        <a href="input_peringkat.php"><i class="fa fa-fw fa-file"></i>Peringkat</a>
                    </li>
                    <li>
                        <a href="tabel_siswa.php" class="active-menu"><i class="fa fa-table"></i>tabel siswa</a>
                    </li>
                    <li>
                        <a href="tabel_peringkat.php"><i class="fa fa-table"></i>tabel Peringka</a>
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
                       <center> <h1 class="page-header">
                            Tabel Siswa
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                   <thead>
                                    <tbody>
                               <th>NISN</th>
                                 <th>NAMA</th>
                                 <th>ALAMAT</th>
                                 <th>No.TELPON</th>
                                 <th>FOTO</th>
                                 <th>TOOLS</th>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $sql = "SELECT * FROM siswa";
                                    $query=mysqli_query($db,$sql);
                                    while ($data=mysqli_fetch_assoc($query)) {
                                      
                                    
                                    ?>
                                    <tr>
                                      
                                      <td><?= $data["nis"];?></td>
                                      <td><?= $data["nama"];?></td>
                                      <td><?= $data["alamat"];?></td>
                                      <td><?= $data["no_telpon"];?></td>
                                      <td><img src='../siswa/siswa/<?=$data['gambar']?>' style='width:100px; height:100px;' /></td>
                                      <td><a href="tempatedit_siswa.php?nis=<?php echo $data['nis']; ?>">|EDIT|</a>-
                                  <a href="delete.php?nis=<?php echo $data['nis']; ?>">|DELETE|</a></td>
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

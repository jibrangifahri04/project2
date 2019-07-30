<?php  
include "config.php"
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>siswa : Tabel siswa</title>
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
                        <a  href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="input_siswa.php"><i class="fa fa-fw fa-file"></i>Data Siswa</a>
                    </li>
                    
                     <li>
                        <a href="input_peringkat.php"><i class="fa fa-fw fa-file"></i>Peringkat</a>
                    </li>
                    <li>
                        <a href="tabel_siswa.php"><i class="fa fa-table"></i>tabel siswa</a>
                    </li>
                    <li>
                        <a href="tabel_peringkat.php" class="active-menu"><i class="fa fa-table"></i>tabel Peringka</a>
                    </li>
                    
                      <li>
                        <a  href="empty.html"><i class="fa fa-fw fa-file"></i> 404-ERROR</a>
                    </li>
                </ul>
                </ul>


            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                     <center>  <h1 class="page-header">
                            Tabel Peringkat Kelas
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
                                <form action="../siswa/data_siswa.php">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" align="center">
                                   <thead>
                                    <tbody>
                              <th>PERINGKAT</th>
                              <th>NISN</th>
                              <th>NAMA</th>
                              <th>RATA-RATA</th>
                              <th>TOOLS</th>
                              </thead>
                              <tbody>
                                <?php
                                $sql = "SELECT * FROM Peringkat_siswa";
                                $query=mysqli_query($db,$sql);
                                while ($data=mysqli_fetch_assoc($query)) {
                                  
                                
                                ?>
                                <tr>
                                    <center>
                                  <td><?= $data["peringkat"];?></td>
                                  <td><?= $data["nis"];?></td>
                                  <td><?= $data["nama"];?></td>
                                  <td><?= $data["nilai_rata2"];?></td>
                                  <td><a href="tempatedit_peringkat.php?nis=<?php echo $data['nis']; ?>">|EDIT|</a>-
                                  <a href="delete_peringkat.php?nis=<?php echo $data['nis']; ?>">|DELETE|</a></td>
                                </td>

                                </tr>
                              <?php } ?>
                              </tbody>
                                </table>
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

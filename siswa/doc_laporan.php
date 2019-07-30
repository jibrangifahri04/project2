<?php
	include 'config.php';
?>
<html>
<head>
	<title>Print Document</title>
    <link href="custom-style.css" type="text/css" rel="stylesheet" />
</head>
<body> 
      <center>
      <h1>
           SMK Negeri 1 Lintau Buo 
      </h1>
      <h2> Tabel Rengking kelas 12 RPL Tahun Ajaran 2019/2020 </h2>
      </center>
      <table border="1" width="90%"  align="center">
    	<tr class="tableheader">
      <th>Peringkat</th>
                              <th>nis</th>
                              <th>nama</th>
                              <th>rata-rata</th>
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
                                </td>

                                </tr>
                              <?php } ?>

                              
    </table>
    <tr>
          <td>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          </td>
    <td width="100%" bgcolor="#FFFFFF">
			<div align="right">
				<?php $tanggal=date('y/m/d');
				echo "$tanggal";
				?>
			</br>
			Kepala Sekolah
			<br></br>
			<br></br>
                  (.........................)
                   <p> NIP.64746445356</p>
                  </tr>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>
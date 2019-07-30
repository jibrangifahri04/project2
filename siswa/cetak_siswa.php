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
      <h2> Tabel anggota kelas 12 RPL Tahun Ajaran 2019/2020 </h2>
      </center>
      <table border="1" width="90%"  align="center">
    	<tr class="tableheader">
                                <th>NISN</th>
                                 <th>NAMA</th>
                                 <th>ALAMAT</th>
                                 <th>No.TELPON</th>
                                 <th>FOTO</th>
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
                                      <td><img src='siswa/<?=$data['gambar']?>' style='width:100px; height:100px;' /></td>
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
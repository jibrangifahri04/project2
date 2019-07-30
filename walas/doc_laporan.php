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
      <h2> Tabel Calon Siswa Tahun Ajaran 2019/2020 </h2>
      </center>
      <table border="1" width="90%"  align="center">
    	<tr class="tableheader">
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
                              </thead>
                              <tbody>
                                <?php
                                $sql = "SELECT * FROM pendaftaran";
                                $query=mysqli_query($db,$sql);
                                while ($data=mysqli_fetch_assoc($query)) {
                                  
                                
                                ?>
                                <tr>
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
                                  <td><img src='../siswa/siswa/<?=$data['gambar']?>' style='width:100px; height:100px;' /></td>
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
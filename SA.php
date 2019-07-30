php 
include "config.php" ?>

<h1>hasil</h1>
<table class="table table-bordered">
	<thead>
	<th>nis</th>
	<th>nama</th>,
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
			<td><?= $data["gambar"];?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>

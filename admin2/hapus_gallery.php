<?php 
	include 'config.php';

	$nama_foto = mysqli_fetch_assoc(mysqli_query($db, "SELECT foto FROM gallery WHERE id = ".$_GET['id']));

	unlink("siswa/".$nama_foto['foto']);

	mysqli_query($db, "DELETE FROM gallery WHERE id = ".$_GET['id'])

?>
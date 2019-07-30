<?php
	include('config.php');
		$nis=$_GET['nis'];
		$sql="DELETE FROM siswa WHERE nis='$nis'";
		mysqli_query($db,$sql) or die (mysqli_error($db));
		header("location:tabel_siswa.php");
?>
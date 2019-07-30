<?php
	include('config.php');
		$nis = $_GET['nis'];
		$sql="DELETE FROM peringkat_siswa WHERE nis='$nis'";
		mysqli_query($db,$sql) or die (mysqli_error($db));
		header("location:tabel_peringkat.php");
?>
<?php
	include('config.php');
		$email=$_GET['email'];
		$sql="DELETE FROM komentar WHERE email='$email'";
		mysqli_query($db,$sql) or die (mysqli_error($db));
		echo"<script>alert('komentar berhasil di hapus');window.location='komentar.php'</script>";

?>
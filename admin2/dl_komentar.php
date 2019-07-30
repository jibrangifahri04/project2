<?php
	include('config.php');
		$email =$_GET['email'];
		$sql="DELETE  FROM komentar WHERE email='$email'";
		mysqli_query($db,$sql) or die (mysqli_error($db));
		header("location:komentar.php");
?>
<?php 
include 'config.php';
	$nama_foto = fileUpload($_FILES['foto'], "img/gallery/");

	mysqli_query($db, "INSERT INTO gallery (foto) VALUES ('".$nama_foto."')");
	$id = mysqli_fetch_assoc(mysqli_query($db, "SELECT LAST_INSERT_ID() AS id"));
	echo json_encode(array("foto" => $nama_foto, "id" => $id['id']));
	exit;

?>
<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "project2";

$db = mysqli_connect($server, $user, $password, $nama_database);
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
function generateNumber()
{
  $now = DateTime::createFromFormat('U.u', microtime(true));
  return $now->format("dmyHisu");
}
function fileUpload($files, $lokasi){
  $file_tmp = $files['tmp_name'];
  $file_ext=strtolower(end(explode('.', $files['name'])));
  $nama_file = generateNumber().".".$file_ext;
  $lokasi_file = $lokasi.$nama_file;
  move_uploaded_file($file_tmp, $lokasi_file);
  return $nama_file;
}

?>
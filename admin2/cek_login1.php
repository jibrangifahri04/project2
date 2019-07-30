<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'admin2/config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password =$_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db, "SELECT * FROM login WHERE username='$username' and password='$password'") or die($db->error);
 // var_dump($_POST); die;		
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="pegawai"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_pegawai.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="pengurus"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_pengurus.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");

}
?>
<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$user = $_POST['username'];
	$pass = $_POST['password'];
		$level = null;
		if($_POST['level'] == "login")
		{
			$level = "admin";
		}
		elseif($_POST['level'] == "kelas")
		{
			$level = "siswa";
		}
		elseif($_POST['level'] == "walas")
		{
			$level = "walas";
		}
		var_dump($level);
		exit;
		$sqlLogin = mysqli_query($db,"SELECT * FROM $level WHERE username='$user' AND password='$pass'");
		$d=mysqli_fetch_array($sqlLogin);
		$e= mysqli_num_rows($sqlLogin);
		
		if ($e > 0) {
			$_SESSION['username'] = $d['username'];
			$_SESSION['password'] = $d['password'];
			$_SESSION['level'] = $_POST['level'];
			echo "<script>";
			echo "alert('Proses Login Anda Berhasil');";

			if($_SESSION['level'] == "login")
			{
				echo "window.location.href='index.html';";
			}
			elseif($_SESSION['level'] == "siswa")
			{
				echo "window.location.href='../siswa/index.php';";
			}
			elseif($_SESSION['level'] == "walas")
			{
				echo "window.location.href='../walas/index.php';";
			}
			
			echo "</script>";

		}else{
			echo "<script>
			alert('Proses Login Anda Gagal');
			window.location.href='index.php';
			</script>";
		}
		
			
	
	}

?>
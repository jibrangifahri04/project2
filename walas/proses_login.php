<?php 
session_start();

	include "koneksi.php";	
	if(isset($_POST['submit'])){
		$user = $_POST['username'];
		$pass = $_POST['pass'];
			$level = null;
			if($_POST['level'] == "admin")
			{
				$level = "admin";
			}
			elseif($_POST['level'] == "siswa")
			{
				$level = "siswa";
			}
			$sqlLogin = mysql_query("SELECT * FROM $level WHERE username='$user' AND password='$pass'");
			$d=mysql_fetch_array($sqlLogin);
			$e= mysql_num_rows($sqlLogin);
			if ($e > 0) {
				$_SESSION['username'] = $d['username'];
				$_SESSION['password'] = $d['password'];
				$_SESSION['level'] = $_POST['level'];
				echo "<script>";
				echo "alert('Proses Login Anda Berhasil');";

				if($_SESSION['level'] == "admin")
				{
					echo "window.location.href='admin/admin.php';";
				}
				elseif($_SESSION['level'] == "siswa")
				{
					echo "window.location.href='admin/siswa.php';";
				}
				
				echo "</script>";
	
			}else{
				echo "<script>
				alert('Proses Login Anda Gagal');
				window.location.href='login.php';
				</script>";
			}
			
				
		
		}
	
?>

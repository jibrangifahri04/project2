<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
echo"<script>alert('admin berhasil keluar');window.location='../index.html'</script>";
?>
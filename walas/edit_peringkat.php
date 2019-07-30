<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['peringkat_siswa'])){

    // ambil data dari formulir
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $peringkat = $_POST['peringkat'];
    $nilai =$_POST['nilai_rata2'];

    // query SQL untuk insert data

mysqli_query($db ,"UPDATE peringkat_siswa SET nama='$nama',peringkat='$peringkat',nilai_rata2='$nilai' WHERE nis='$nis'");


// mengalihkan ke halaman index.php
 echo"<script>alert('data berhasil di ubah');window.location='tabel_peringkat.php'</script>";
}

?>
<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['siswa'])){

    // ambil data dari formulir
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $fileName = $_FILES['gambar'];

    // query SQL untuk insert data
    $sql = "";

    // kalau gambar diupload, bararti query updatenyo tambah kolom gambar
    if($_FILES['gambar']['size'] > 0 && $_FILES['gambar']['error'] == 0){
      $fileName = fileUpload($_FILES['gambar'], "../siswa/siswa/");
      $sql = "UPDATE siswa SET nama='$nama',alamat='$alamat',no_telpon='$no_telpon',gambar='$fileName' WHERE nis='$nis'";
    }
    else
    {
      $sql = "UPDATE siswa SET nama='$nama',alamat='$alamat',no_telpon='$no_telpon' WHERE nis='$nis'";
    }
    
    mysqli_query($db, $sql);
    
    // mengalihkan ke halaman index.php
     echo"<script>alert('data berhasil di ubah');window.location='tabel_siswa.php'</script>";
    }
    
    
    ?>

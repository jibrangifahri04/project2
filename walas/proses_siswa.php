<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['siswa'])){

    // ambil data dari formulir
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $fileName = $_POST['gambar'];
   
    // apakah query simpan berhasil?
if($_FILES['gambar']['size'] > 0 && $_FILES['gambar']['error'] == 0){
  $fileName = fileUpload($_FILES['gambar'], "../siswa/siswa/");


  $sql = "INSERT INTO siswa (nis,nama,alamat,no_telpon,gambar) VALUES ('$nis','$nama','$alamat','$no_telpon','$fileName')";
  $query = mysqli_query($db,$sql);

    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location:tabel_siswa.php?status=sukses'); 
        
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location:input_siswa.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}
}
?>
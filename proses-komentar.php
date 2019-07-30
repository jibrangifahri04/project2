<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['komentar'])){

    // ambil data dari formulir
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $alasan = $_POST['alasan'];
    $komentar =$_POST['komentar'];
   
    // buat query
    $sql = "INSERT INTO komentar (email,nama,alasan,komentar) VALUES ('$email','$nama','$alasan','$komentar')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location:contact.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: contact.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['peringkat_siswa'])){

    // ambil data dari formulir
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $peringkat = $_POST['peringkat'];
    $nilai =$_POST['nilai'];
   

    // buat query
    $sql = "INSERT INTO peringkat_siswa (nis,nama, peringkat,nilai) VALUES ('$nis','$nama','$peringkat','$nilai')";
    $query = mysqli_query($db,$sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location:tabel_peringkat.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location:input_peringkat.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // ambil data dari formulir
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat_lengkap'];
    $tl =$_POST['tempat_lahir'];
    $tgl=$_POST['tanggal_lahir'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];
    $jurusan= $_POST['jurusan'];
    $ibu = $_POST['ibu'];
    $ayah = $_POST['ayah'];
    $gb = @$_POST['gambar'];

    // buat query
    $sql = "INSERT INTO pendaftaran (nis,nama, alamat_lengkap,tempat_lahir,tanggal_lahir,jenis_kelamin,agama, asal_sekolah,jurusan,ibu,ayah,gambar) VALUES ('$nis','$nama','$alamat','$tl','$tgl','$jk','$agama','$sekolah','$jurusan','$ibu','$ayah','$gb')";
    $query = mysqli_query($db,$sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location:pendaftaran.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: pendaftaran.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
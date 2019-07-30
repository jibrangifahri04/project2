<?php
include 'config.php';
// menyimpan data kedalam variabel
if (isset($_POST['pendaftaran'])) {
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
    $fileName = $_FILES['gambar'];

    
// query SQL untuk insert data
if($_FILES['gambar']['size'] > 0 && $_FILES['gambar']['error'] == 0){
  $fileName = fileUpload($_FILES['gambar'], "siswa/");


mysqli_query($db ,"UPDATE pendaftaran SET nama='$nama',jurusan='$jurusan',jenis_kelamin='$jk',alamat_lengkap='$alamat',tempat_lahir='$tl',tanggal_lahir='$tgl',agama='$agama',asal_sekolah='$sekolah',ibu='$ibu',ayah='$ayah',gambar='$fileName' WHERE nis='$nis' ");

// mengalihkan ke halaman index.php
 echo"<script>alert('data berhasil di ubah');window.location='pendaftaran.php'</script>";
}
}
?>
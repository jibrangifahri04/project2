<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Sekolah Asal</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Jurusan</th>
            <th>Nama Ibu</th>
            <th>Nama Ayah</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['nis']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat_lengkap']."</td>";
            echo "<td>".$siswa['tanggal_lahir']."</td>";
            echo "<td>".$siswa['tempat_lahir']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";
            echo "<td>".$siswa['jurusan']."</td>";
            echo "<td>".$siswa['asal_sekolah']."</td>";
            echo "<td>".$siswa['ibu']."</td>";
            echo "<td>".$siswa['ayah']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>
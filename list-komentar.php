<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>komentar</title>
</head>

<body>
    <header>
        <h3>komentar</h3>
    </header>

    <nav>
        <a href="contac.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>email</th>
            <th>nama</th>
            <th>alasan</th>
            <th>komentar</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['email']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alasan']."</td>";
            echo "<td>".$siswa['komentar']."</td>";
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
 <?php
 require_once('koneksi.php');
 $query=mysqli_query($koneksi,"SELECT * FROM tb_jurusan");
 $no="1";
 ?>
 <html>
       <head>
             <title>tampilkan nama jurusan</title>
       </head>
      <body>
            <div><a href="index.php">Back home</a></div>
            <table width="1050" border="5" align="center">
                  <tr>
                        <td colspan="10" align="center">Data Jurusan</td>
                  </tr>
                  <tr>
                        <td colspan="10" align="center"><a href="tambah_jurusan.php">TAMBAH JURUSAN</a></td>
                  </tr>
            <tr>
            <th align="left">No</th>
            <th align="left">Kode Jurusan</th>
            <th align="left">Nama Jurusan</th>
            <th align="left">Delete</th>
            <th align="left">Edit</th>
</tr>
<?
while($data=mysqli_fetch_array($query));
?>
<tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $data['kd_jurusan'];?></td>
      <td><?php echo $data['nama_jurusan'];?></td>
      <td><a href="delete_jurusan.php?=<?php $data['kd_jurusan']?>">DELETE</a></td>
      <td><a href="edit_jurusan.php?=<?php $data['kd_jurusan']?>">EDIT</a></td>
</tr>

<?php }?>
            </table>
      </body>
 </html>

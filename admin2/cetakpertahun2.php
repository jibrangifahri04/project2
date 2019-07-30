<!DOCTYPE html>
<html>
<head>
	<title>Cetak Pertahun</title>
</head>

<body onload="javascript:print()" align="center">
	<style type="text/css">
		.style5{font-size: 24px;}
	</style>
	<div class="panel-headding">
		<table width="100%">
			<tr>
				<td>
					<div align="center">
						<h2><div align="center">CETAK DATA PERTAHUN</div></h2>
					</div>
				</td>
			</tr>
		</table>
	</div>
	
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<td>
<div align="center">
	Cetak Berdasarkan Tahun <hr> Tahun : <?php echo $_GET['tahun_ini'];?>
	</div>
	</td>
	<h3>Data laporan Pembelian</h3>
	<?php
	$tahun_ini = date("Y");
	?>
	<table align="center" border="1" class="table table-bordered table-striped">
		<tr>
			<th>No</th>
			<th>Tanggal Beli</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Total Harga</th>
		</tr>
		<?php 
		include "koneksi.php";
		include "tgl_indo.php";
		if (isset($_GET['tahun_ini'])) {
			$query_mysql = mysql_query("SELECT *  FROM tb_pembelian, tb_barang, tb_kategori where  tb_pembelian.kode_barang=tb_barang.kode_barang and tb_barang.kode_kategori=tb_kategori.kode_kategori and tgl_beli LIKE '%$_GET[tahun_ini]%'");
		}
		else
		{
		$query_mysql = mysql_query("SELECT *  FROM tb_pembelian, tb_barang, tb_kategori where  tb_pembelian.kode_barang=tb_barang.kode_barang and tb_barang.kode_kategori=tb_kategori.kode_kategori")or die(mysql_error());
		}
		$no = 1;
		$total = 0;
		while($data = mysql_fetch_array($query_mysql)){
			$total += $data['total_harga'];
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo tgl_indo($data['tgl_beli']); ?></td>
			<td><?php echo $data['nama_barang']; ?></td>
			<td>Rp.<?php echo number_format($data['harga'],2,',','.'); ?></td>
			<td><?php echo $data['jumlah']; ?></td>
			<td>Rp.<?php echo number_format($data['total_harga'],2,',','.'); ?></td>
		</tr>
		<?php } ?>
		<td colspan="5">Total Keseluruhan</td>
		<td>Rp.<?php echo "$total" ?></td>
	</table>
	<table width="100%" border="0" align="center" cellpadding="1" bgcolor="#FFFFFF">
		<tr>
		<td width="63%" bgcolor="#FFFFFF">
			<p align="right"></p></br>
		</td>
		</tr>
		<div class="page_header">
		<td width="37%" bgcolor="#FFFFFF">
			<div align="right">
				<?php $tanggal=date('y/m/d');
				echo "$tanggal";
				?>
			</br>
			Pemilik
			<br></br>
			<br></br>
			(.........................)
		</div>
		</div>
	</div>
    </td>
</body>
</html>
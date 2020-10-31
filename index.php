<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>

<h2 style="text-align: center;">Data Karyawan</h2>

<div class="container-fluid">
<a href="tambah.php" class="btn btn-success">Tambah</a>
<br></br>
<table class="table table-bordered">
	<tr class="bg-primary">
		<th>No</th>
		<th>Nama</th>
		<th>Nik</th>
		<th>Alamat</th>
		<th>No HP</th>
		<th>Jenis Kelamin</th>
		<th>Aksi</th>
	</tr>
	<tr>
		<?php
		include 'koneksi.php';
			$query = mysqli_query($koneksi,"SELECT * FROM karyawan");
			$no = 1;
			while ($data = mysqli_fetch_array($query)) {?>
				<!-- Menampilkan data -->
			<tr>
				<td><?=$no++;?></td>
				<td><?=$data['nama']?></td>
				<td><?=$data['nik']?></td>
				<td><?=$data['alamat']?></td>
				<td><?=$data['no_hp']?></td>
				<td><?=$data['jenis_kelamin']?></td>
				<td>
					<a href="edit.php?id=<?=$data['id']?>" class="btn btn-primary btn-sm" >Edit</a> |
					<a href="aksi.php?act=hapus&id=<?=$data['id']?>" class="btn btn-danger btn-sm" >Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</tr>
</table>
</div>

</body>
</html>


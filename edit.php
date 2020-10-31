<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP Dasar</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
<h2 style="text-align: center;">Edit Data</h2>
<br></br>
<div class="container-fluid">
<!-- Untuk Kembali Ke index.php -->
<a href="index.php" class="btn btn-primary">Kembali</a>
<br></br>
<?php
	include 'koneksi.php';
	//Parameter get id
	$id=$_GET['id'];
	//query sesuai id
	$query = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE id='$id' ");
	$data = mysqli_fetch_array($query);
 ?>
<form method="post" action="aksi.php?act=update">
	<table>
		<tr>
			<td>Nama</td>
			<input type="hidden" name="id" value="<?=$id?>">
			<td><input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" ></td>
		</tr>
		<tr>
			<td>Nik</td>
			<td><input type="text" name="nik" value="<?=$data['nik']?>" class="form-control"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" class="form-control"><?=$data['alamat']?></textarea></td>
		</tr>
		<tr>
			<td>No HP</td>
			<td><input type="text" name="no_hp" class="form-control" value="<?=$data['no_hp']?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="jenis_kelamin" class="form-control">
					<?php 
						
						if ($data['jenis_kelamin']=='P'?$selb='selected':$selb='');
						if ($data['jenis_kelamin']=='L'?$sela='selected':$sela='');
					?>
					<option value="">Pilih</option>
					<option value="L" <?php echo $sela; ?> >Laki - Laki</option>
					<option value="P" <?php echo $selb; ?> >Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
			<input type="submit" value="Simpan" class="btn btn-success">
			</td>
		</tr>
	</table>
</form>
</div>
</body>
</html>
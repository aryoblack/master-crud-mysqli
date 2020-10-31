<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP Dasar</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
<div class="container-fluid">
<h2 style="text-align: center;">Tambah Data</h2>
<br></br>

<!-- Untuk Kembali Ke index.php -->
<a href="index.php" class="btn btn-primary">Kembali</a>
<br></br>
<form method="post" action="aksi.php?act=tambah">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" class="form-control"></td>
		</tr>
		<tr>
			<td>Nik</td>
			<td><input type="text" name="nik" class="form-control"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td>No HP</td>
			<td><input type="text" name="no_hp" class="form-control"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="jenis_kelamin" class="form-control">
					<option value="">Pilih</option>
					<option value="L" >Laki - Laki</option>
					<option value="P" >Perempuan</option>
				</select>
			</td>
		</tr>
	</table>
	
	<input type="submit" value="Simpan" class="btn btn-success">
	
</form>
</div>
</body>
</html>
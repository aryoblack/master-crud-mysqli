<?php 
//include file koneksi
include 'koneksi.php';

// Bikin string get act
$act=$_GET['act'];

//Jika parameter tambah
if ($act=='tambah') {
	// Ambil data yang ada di element name pada form 
	$nama=$_POST['nama'];
	$nik = $_POST['nik'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	// Insert Data ke database
	mysqli_query($koneksi,"INSERT INTO karyawan (nama,nik,alamat,no_hp,jenis_kelamin) VALUES ('$nama','$nik','$alamat','$no_hp','$jenis_kelamin') ");
	// Untuk kembali ke index.php
	header("location:index.php");
}


if ($act=='update') {
	$id = $_POST['id'];
	$nama=$_POST['nama'];
	$nik = $_POST['nik'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	// query update sesuai id
	mysqli_query($koneksi,"UPDATE karyawan SET nama='$nama', nik='$nik', alamat='$alamat', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin' WHERE id='$id' ");
	header("location:index.php");

}

if ($act=='hapus') {
	// menangkap parameter id dengan GET
	$id = $_GET['id'];

	// query hapus data
	mysqli_query($koneksi,"DELETE FROM karyawan WHERE id='$id' ");
	header("location:index.php");
}
?>
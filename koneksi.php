<?php 
	$koneksi = mysqli_connect("localhost","root","","latihan");

	if (mysqli_connect_errno()) {
		// Jika gagal akan muncul tulisan dibawah
		echo "koneksi ke database gagal :" . mysqli_connect_error();
	}
?>
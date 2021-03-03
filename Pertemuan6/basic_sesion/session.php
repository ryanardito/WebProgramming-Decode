<?php 

	session_start();
	$nama = $_POST['input_nama'];
	$_SESSION['nama_lengkap'] = $nama;

 ?>
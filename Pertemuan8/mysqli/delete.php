<?php 
	require_once './koneksi.php';
	$id = $_GET['id'];
	if (!isset($id) || empty($id)) {
		header('location: index.php');
	}

	$query = "DELETE FROM siswa WHERE id=$id";
	$query = mysqli_query($koneksi, $query);
	if ($query) {
		//sukses
		header('location: index.php');
	}
 ?>
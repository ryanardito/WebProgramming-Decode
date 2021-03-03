<?php 
	require_once './koneksi.php';
	session_start();

	if (isset($_POST['tambah_data'])) {
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$kelas = $_POST['kelas'];
		$nilai = $_POST['nilai'];

		$query = "INSERT INTO siswa VALUES(NULL,$nis,'$nama','$jenis_kelamin','$kelas',$nilai)";
		$query = mysqli_query($koneksi,$query);

		if ($query) {
			echo "<script>alert('Sukses Input Data !');location.href='index.php'</script>";
		}

		else{
			echo "<script>alert('Gagal Input Data !');location.href = 'insert.php'</script>";
		}

	}
	else{
		header('location: insert.php');
	}
 ?>
<?php 
	require_once './koneksi.php';
	session_start();

	if (isset($_POST['edit_data'])) {
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$kelas = $_POST['kelas'];
		$nilai = $_POST['nilai'];
		$id = $_POST['id'];

		$query = "UPDATE siswa SET nis=$nis, nama='$nama', jenis_kelamin='$jenis_kelamin', kelas='$kelas', nilai=$nilai WHERE id=$id";
		$query = mysqli_query($koneksi,$query);

		if ($query) {
			echo "<script>alert('Sukses Edit Data !');location.href='index.php'</script>";
		}

		else{
			echo "<script>alert('Gagal Edit Data !');location.href = 'index.php'</script>";
		}

	}
	else{
		header('location: index.php');
	}
 ?>
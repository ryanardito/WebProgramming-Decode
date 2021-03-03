<?php 
	require_once './koneksi.php';
	$id = $_GET['id'];
	if (!isset($id) || empty($id)) {
		header('location: index.php');
	}

	$query = "SELECT * FROM siswa WHERE id='$id'";
	$query = mysqli_query($koneksi, $query);
	if (mysqli_num_rows($query) <= 0) {
		//tidak ada data
		header('location: index.php');
	}

	$data = mysqli_fetch_assoc($query);

	//scale injeciton 'OR'1'='1
 ?>

<!DOCTYPE html>
<html>

	<head>
		<title>Tambah Data</title>
	</head>

	<body>
		<h1 align="center">Edit Data</h1>
		<form action="edit_proses.php" method="POST">
			<input type="hidden" name="id" value="<?= $id ?>">
			<table align="center" border="1" cellpadding="10" style="border-collapse: collapse;">
				<tr>
					<td>NIS</td>
					<td><input type="number" name="nis" value="<?= $data['nis']?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?= $data['nama']?>" ></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="jenis_kelamin" value="<?= $data['jenis_kelamin']?>"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas" value="<?= $data['kelas']?>"></td>
				</tr>
				<tr>
					<td>Nilai</td>
					<td><input type="number" name="nilai" value="<?= $data['nilai']?>"></td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" name="edit_data" value="Save">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
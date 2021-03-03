<?php 
	require_once './cek_login.php';
	//scale injeciton 'OR'1'='1
 ?>

<!DOCTYPE html>
<html>

	<head>
		<title>Tambah Data</title>
	</head>

	<body>
		<h1 align="center">Tambah Data</h1>
		<form action="insert_proses.php" method="POST">
			<table align="center" border="1" cellpadding="10" style="border-collapse: collapse;">
				<tr>
					<td>NIS</td>
					<td><input type="number" name="nis"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="jenis_kelamin"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas"></td>
				</tr>
				<tr>
					<td>Nilai</td>
					<td><input type="number" name="nilai"></td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" name="tambah_data" value="Save">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
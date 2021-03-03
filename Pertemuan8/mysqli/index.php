<?php 
	require_once './koneksi.php';
	require_once './cek_login.php'
 ?> 	

<!DOCTYPE html>
<html>

	<head>
		<title>Data Siswa</title>
	</head>

	<body>
		<h1>Data Siswa</h1>
		<a href="insert.php">Insert Data</a>
		<a href="logout.php">Logout</a>
		<table border="1" cellpadding="10" style="border-collapse: collapse;">
			<tr>
				<td>Id</td>
				<td>NIS</td>
				<td>Nama</td>
				<td>Jenis Kelamin</td>
				<td>Kelas</td>
				<td>Nilai</td>
				<td>Action</td>
			</tr>
			<?php 
				$query = "SELECT * FROM siswa";
				$query = mysqli_query($koneksi, $query);
				if (mysqli_num_rows($query) > 0) {
					$nomor=1;
					while ($data = mysqli_fetch_assoc($query)) {
			?>
			<tr>
				<td><?= $nomor  ?></td>
				<td><?= $data['nis']; ?></td>
				<td><?= $data['nama']; ?></td>
				<td><?= $data['jenis_kelamin']; ?></td>
				<td><?= $data['kelas']; ?></td>
				<td><?= $data['nilai']; ?></td>
				<td>
					<a href="edit.php?id=<?= $data['id'] ?>">Edit</a>|
					<a href="delete.php?id=<?= $data['id'] ?>">Delete</a>
				</td>
			</tr>
			<?php
			$nomor++;
					}
				}
				else{
					echo "Tidak Ada Data";
				}
			 ?>
		</table>
	</body>

</html>
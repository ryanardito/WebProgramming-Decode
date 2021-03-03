<!DOCTYPE html>
<html>

	<head>
		<title></title>
	</head>

	<body>
		<form action="session.php" method="post">
			<label>Masukan nama</label>
			<input type="text" name="input_nama">
			<input type="submit" name="submit">
			<a href="hapus.php">Hapus semua data</a>
		</form>

		<?php 

			session_start();
			if (isset($_SESSION['nama_lengkap'])) {
				echo $_SESSION['nama_lengkap'];
			}
			else{
				echo "Belum ada nilai";
			}

		 ?>
	</body>

</html>
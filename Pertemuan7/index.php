<?php 
	require_once "./koneksi.php"
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Data User</title>
	</head>
	<body>
		<h1>Data Siswa</h1>
		<?php 
			$query_siswa = "SELECT * FROM siswa";
			$query_siswa = mysqli_query($koneksi, $query_siswa);

			while ($data = mysqli_fetch_assoc($query_siswa)) {
				echo $data["nama"] . ", Nilainya " . $data["nilai"] . "<br>";
			}
		 ?>
	</body>
</html>
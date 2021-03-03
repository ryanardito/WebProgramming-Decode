<!DOCTYPE html>
<html>

	<head>
		<title>Kalkulator</title>
	</head>

	<body>
		<h1>Kalkulator Sederhana</h1>

		<form action="" method="POST">
			
			<div>
				<label>Angka1</label>
				<input type="text" name="nilai_angka1">
			</div>
			<br>
			<div>
				<label>Angka2</label>
				<input type="text" name="nilai_angka2">
			</div>
			<br>
			<div>
				<input type="submit" name="hitung" value="hitung">
			</div>

		</form>
		<?php
			require_once 'proses.php'; 
		?> 
	</body>

</html>
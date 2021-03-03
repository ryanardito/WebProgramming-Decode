


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
		<br>

		<?php 
			if (isset($_POST['hitung'])) {
				$angka1 = $_POST['nilai_angka1'];
				$angka2 = $_POST['nilai_angka2']; 

				// argumen function itu, posisinya harus sama!
				function penjumlahan($x,$y){
					// global $angka1;
					// echo $angka1;
					// die();
					$total = $x + $y ;
					echo "Hasil penjumlahan dari " . $x . "+" . $y . "=" . $total . "<br>";
				}

				function pengurangan($x,$y){
					// global $angka1;
					// echo $angka1;
					// die();
					$total = $x - $y ;
					echo "Hasil pengurangan dari " . $x . "-" . $y . "=" . $total . "<br>";
				}

				function perkalian($x,$y){
					// global $angka1;
					// echo $angka1;
					// die();
					$total = $x * $y ;
					echo "Hasil perkalian dari " . $x . "x" . $y . "=" . $total . "<br>";
				}

				function pembagian($x,$y){
					// global $angka1;
					// echo $angka1;
					// die();
					$total = $x / $y ;
					echo "Hasil pembagian dari " . $x . ":" . $y . "=" . $total . "<br>";
				}

				if (is_numeric($angka1) && is_numeric($angka2) ) {
					if ($angka1 == 0 || $angka2 == 0) {
						echo "<p style='color:red'>Jangan input 0 gan !</p>";
					}

					else{
					$angka1 = (int) $angka1;
					$angka2 = (int) $angka2;
					penjumlahan($angka1,$angka2);
					pengurangan($angka1,$angka2);
					perkalian($angka1,$angka2);
					pembagian($angka1,$angka2);
					}
					
				}
			
				else{
					echo "<h1>MONYETTTTTTTTTTT</h1>";
				}

			}
		 ?>
		
	</body>

</html>
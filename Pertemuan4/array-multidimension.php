<?php 

	$mobil = [

		["Avanza","Silver","120"],
		["Xenia","Pink","110"],
		["Agya","Black","100"]

	];

	foreach ($mobil as $key => $value) {
		foreach ($value as $data => $value2) {
			
			echo "Mobil $value[0] Berwarna $value[1] Kecepatan $value[2]";
			break;
		
		}
		echo "<br>";
	}
















 ?>
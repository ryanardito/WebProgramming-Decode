<?php 

	// function
	// fungsi atau metode

	// function hello_world(){
	// 	echo "Hello World <br>";
	// }

	// for ($i=1; $i <=5 ; $i++) { 
	// 	hello_world();
	// }

	// default parameter
	// function hello($nama = "Barbar"){
	// 	echo "Hello" . $nama . "<br>";
	// }

	// hello("Harvey");
	// hello("Sutisna");
	// hello("Padang");
	// hello();


	// function perhitungan($angka1 = "", $angka2 = ""){
	// 	if ($angka1 == "" or $angka2 == "") {
	// 		echo "Silahkan masukkan inputan !";
	// 	}

	// 	else{
	// 		echo $angka1 + $angka2 . "<br>";
	// 	}
	// }

	// perhitungan(10,20);
	// perhitungan(100,100);
	// perhitungan(200,200);
	// perhitungan();


	function perhitungan($angka = array()){
		

		if (count($angka) == 0) {
			echo "Tolong isi gan !";
		}

		else {
			$total = 0;
			foreach ($angka as $nilai ) {
				$total = $total + $nilai;
			}

			echo $total;
		}
	}

	perhitungan([11,123,123,213,213,213]);


















 ?>
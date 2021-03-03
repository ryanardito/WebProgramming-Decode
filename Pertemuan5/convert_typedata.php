<?php 
	
	//bahasa yang gak terlalu ketat sama tipe data

	$angka = 10;
	$angka2 = "10tulisan";

	// casting, merubah tipe data sesuai yang kita inginkan
	$rubah = (int) $angka2;

	// bentuknya function
	$rubah = intval($angka2);
	echo var_dump($rubah);

	die();

	// juggling
	// otomatis convert,
	$jumlah = $angka + $angka2;
	echo $jumlah;

 ?>
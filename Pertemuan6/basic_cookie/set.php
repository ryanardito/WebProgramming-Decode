<?php 

	// maketime()
	// mktime(jam,menit,detik,bulan,tanggal,tahun);
	// $waktu = mktime (00,00,00,1,27,2018);
	// echo "waktu sekarang : " .time() . "<br>"
	// echo "waktu expired : " . $waktu
	
	setcookie('username','harvey', time()+60);
	setcookie('password', 'harvey123', time()+60);

 ?>
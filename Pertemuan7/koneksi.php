<?php 

	// mysql()  - lama (sudah deprecated / tidak support)
	// mysqli()	- agak baru ( masih bisa )
	// pdo()	- terbaru ( php data object ) 

	// mysql_connect(host,user,password)
	$koneksi = mysqli_connect('localhost','root','','1b_latihan1');

	if (!$koneksi) {
		echo "Error!";
	}

	else{
		
	}

 ?>
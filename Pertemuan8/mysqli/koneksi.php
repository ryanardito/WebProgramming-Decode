<?php 
	// mysqli 
	// mysqli prosedural
	// mysqli oop (object oriented programming)

	@$koneksi = mysqli_connect('localhost','root','','1b_latihan2');

	if ($koneksi) {
		// echo "Sukses!";
	}
	else{
		echo "Gagal ! " . mysqli_connect_error();
	}


 ?>
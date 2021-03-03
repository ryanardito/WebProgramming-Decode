<?php 
	$username = "paijo";
	$password = "paijo123";

	// $hasil_enkripsi = password_hash($password,PASSWORD_BCRYPT,['cost' => 12]);

	$database = '$2y$12$3WYiwhWuMk5tz3co5lDBD.lzMQ2.gdQVLiLKwHXatT3bLKnWENoni';

	// check enkripsi ;
	if (password_verify($password,$database)) {
		echo "Anda Login";
	}
	else{
		echo "Gagal Login!";
	}

 ?>
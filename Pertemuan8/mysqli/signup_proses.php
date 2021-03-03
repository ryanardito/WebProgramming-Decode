<?php 
	
	require_once 'koneksi.php';

	$username = mysqli_real_escape_string($koneksi,$_POST['username']);
	$password = mysqli_real_escape_string($koneksi,$_POST['password']);
	$retype_password = mysqli_real_escape_string($koneksi, $_POST['retype_password']);

	if ($password == $retype_password) {
		if (strlen($password)>7) {
			$query_check = "SELECT * FROM login WHERE username'$username'";
			$query_check = mysqli_query($koneksi, $query_check);
			
			if ($query_check) {
				//jika query berhasil
				if (mysqli_num_rows($query_check)>0) {
					echo "Data Udah Ada Gan !";
				}
			}

			else{
				//jika tidak ada data
				$password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
				$query_insert = "INSERT INTO login VALUES (NULL,'$username','$password')";
				$query_insert = mysqli_query($koneksi,$query_insert);

				if ($query_insert) {
					echo "Berhasil Insert Data Gan ! ";	
				}
				else{
					echo "Gagal Insert Data Gan ! ";
				}

			}
		}

		else
		{
			echo "Salah Gan, Harus 8 Karakter";
		}
	}
	else{
		echo "Salah Gan!";
	}



 ?>
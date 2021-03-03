<?php 

	require 'koneksi.php';
	session_start();

	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($koneksi, $_POST['username']);
		$password = mysqli_real_escape_string($koneksi, $_POST['password']);

		$query = "SELECT * FROM login WHERE username='$username'";
		$query = mysqli_query($koneksi, $query);
		
		if (mysqli_num_rows($query)>0) {

			$data = mysqli_fetch_assoc($query);
			$password_hash = $data['password']; //password dari db
			if (password_verify($password, $password_hash)) {
				// login suskes
				$_SESSION['user_login'] = true;
				echo "<script>alert('Login Berhasil');</script>";
				echo "<script>location.href = 'index.php'</script>";

			}
			else{
				// login gagal
				echo "<script>alert('Username / Password salah');</script>";
				echo "<script>location.href = 'login.php'</script>";
			}

			
		}

		else{
			echo "<script>alert('Gagal Login');</script>";
			echo "<script>location.href = 'login.php'</script>";
		}
	}
	else{
		header('location: login.php');
	}
	
 ?>
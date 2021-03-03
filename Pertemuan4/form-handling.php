<?php 
	
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == "" || $password == "") {
			echo "Username / Password kosong bro !!!";
		}
		else{
			echo $_POST['username'];
			echo "<br>";
			echo $_POST['password'];
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar HTML</title>
</head>
<body>
	<form action="" method="POST">
		
		
		
	</form>
</body>
</html>
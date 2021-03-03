<!DOCTYPE html>
<html>

	<head>
		<title>Login</title>
	</head>

	<body>
		<h1 align="center">Login</h1>
		<form action="login_proses.php" method="POST">
			<table align="center" style="border-collapse: collapse;" border="1" cellpadding="10">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" required></td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" name="login" value="Login">
					</td>
				</tr>
			</table>
		</form>
	</body>

</html>
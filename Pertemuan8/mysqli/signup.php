<!DOCTYPE html>
<html>

	<head>
		<title>Sign Up</title>
	</head>

	<body>
		<h1 align="center">Sign Up</h1>
		<form action="signup_proses.php" method="POST">
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
					<td>Re-Type Password</td>
					<td><input type="password" name="retype_password" required></td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" name="login" value="Signup">
					</td>
				</tr>
			</table>
		</form>
	</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

	
	<form method="POST" action="../app/authController.php">
		<fieldset>
			<legend>
				Register
			</legend>

			<label>
				Name
			</label>
			<input type="text" name="name" required="">

			<br>

			<label>
				Email
			</label>
			<input type="email" name="email" required="">

			<br>

			<label>
				Password
			</label>
			<input type="password" name="password" required="">	

			<br>

			<button type="submit">
				Save user
			</button>

			<input type="hidden" name="action" value="register" >

		</fieldset>
	</form>

</body>
</html>
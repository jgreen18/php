<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>


	<fieldset>
		 <form method="POST" action="app/test.php">
		 	<legend>Calculadora en php</legend>

		 	<label>dato 1</label>
		 	<input type="text" name="n1">
		 		<br>
		 		<label>dato 2</label>

		 	<input type="text" name="n2">
		 	<br>	


		 	

		 	<label>
		 		genero
		 	</label><br>

		 	<label>+</label>
		 	<input type="radio" name="operacion" value="+" checked="checked">
		 	<br>
		 	<label>-</label>
		 	<input type="radio" name="operacion" value="-">
		 	<br>
		 	<label>/</label>
		 	<input type="radio" name="operacion" value="/">
		 	<br>
		 	<label>*</label>
		 	<input type="radio" name="operacion" value="*">

		 	<br>

		 	<button type="sumit">
		 		subir info
		 	</button>

		 </form>
	</fieldset>


</body>
</html>
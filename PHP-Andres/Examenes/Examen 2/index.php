<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="managers/loginManager.php" method="post">
		<input type="hidden" name="op" value="in">
		<input type="email" name="mail" placeholder="Correo electrónico">
		<input type="password" name="pass" placeholder="Contraseña">
		<input type="submit" value="Entrar">
	</form>
	<?php
	if(isset($_POST['msg'])) echo $_POST['msg'];
	?>
</body>
</html>
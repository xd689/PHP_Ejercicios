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
		<input type="email" name="mail" placeholder="Correo electrónico" required>
		<input type="password" name="pass" placeholder="Contraseña" required>
		<input type="submit" value="Entrar">
	</form>
	<?php
		include('view/messages.php');
		getMessage();
	?>
</body>
</html>
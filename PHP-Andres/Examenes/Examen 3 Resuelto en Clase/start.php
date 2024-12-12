<?php
	require_once('services/secureView.php');
	$user = getUser();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<a href="managers/loginManager.php">Cerrar sesión</a><br>
<br>
<?php
	include('view/messages.php');
	getMessage();
?>	
</body>
</html>
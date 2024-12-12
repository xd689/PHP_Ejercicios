<?php
	require_once('services/secureAdmView.php');
	include('view/messages.php');
	require_once('services/users.php');

	$user = getUser();
	$newUser = $_SERVER['PHP_SELF'].'?op=new';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<a href="<?php echo $newUser; ?>">Crear usuario</a><br>
<a href="admin.php?op=mng">Gestión de usuarios</a><br>
<a href="admin.php?op=cpre">Calculadora de prestamos</a><br>
<a href="admin.php?op=spre">Lista de prestamos</a><br>
<a href="admin.php?op=npre">Pedir prestamo</a><br>
<a href="managers/loginManager.php">Cerrar sesión</a><br>

<br>
<?php
	/*
	$list = getUsers();
	foreach ($list as $item) {
		print_r($item);
		echo "<br>\n";
	}
	*/
	if($_GET['op']==='new') include('view/newUser.php');
	if($_GET['op']==='edt') include('view/edtUser.php');
	if($_REQUEST['op']==='cpre') include('view/calculadora.php');
	if($_REQUEST['op']==='data') include('view/calculo.php');		
	if($_REQUEST['op']==='mng') include('view/mngUser.php');
	if($_REQUEST['op']==='npre') include('view/createPrestamos.php');
	if($_REQUEST['op']==='vpre') include('view/viewPrestamos.php');
	if($_REQUEST['op']==='spre') include('view/schPrestamos.php');
	if($_REQUEST['op']==='edtp') include('view/edtPrestamos.php');
	getMessage();
?>	
</body>
</html>
<form action="admin.php" method="post">
	<input type="hidden" name="op" value="sch">
	<input type="text" name="textToSearch" size="50" required>
	<input type="submit" value="Buscar">
</form>
<pre>Resultados de la búsqueda</pre>
<table>
	<tbody>
		<tr><th>Usuario</th><th colspan="2">Correo electrónico</th></tr>
<?php

$list = userSearch($_POST['textToSearch']);
foreach ($list as $item) {
	$name = $item['name'];
	$mail = $item['user'];
	$mailLink = "<a href='admin.php?op=edt&id=$mail'>$mail</a>";
	$delLink = "<form action='managers/userManager.php' method='post'>
					<input type='hidden' name='op' value='del'>
					<input type='hidden' name='mail' value='$mail'>
					<button type='submit' onclick='confirmar();' ><img src='images/del-24.png' alt='Delete icon'></button>
				</form>";
	$editLink = "<form action='admin.php' method='post'>
					<input type='hidden' name='op' value='sUd'>
					<input type='hidden' name='mail' value='$mail'>
					<button type='submit'><img src='images/edit.png' alt='Delete icon'></button>
				</form>";
	echo "<tr><td>$name</td><td>$mailLink</td><td>$delLink</td><td>$editLink</td></tr>\n";
}
?>
</tbody>
</table>
<script type="text/javascript">
	function confirmar() {
		confirm("¿Realmente desea borrar el usuario?");
	}
</script>
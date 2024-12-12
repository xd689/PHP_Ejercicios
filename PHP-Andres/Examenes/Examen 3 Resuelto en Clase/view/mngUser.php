<form action="admin.php" method="post">
	<input type="hidden" name="op" value="mng">
	<input type="text" name="textToSearch" size="50" required>
	<input type="submit" value="Buscar">
</form>
<pre>Resultados de la búsqueda</pre>
<table>
	<tbody>
		<tr><th>Usuario</th><th colspan="2">Correo electrónico</th></tr>
<?php
if(isset($_POST['textToSearch'])) {
	$list = userSearch($_POST['textToSearch']);
	foreach ($list as $item) {
		$name = $item['name'];
		$mail = $item['user'];
		$mailLink = "<a href='admin.php?op=edt&id=$mail'>$mail</a>";
		$delLink = "<a href='managers/userManager.php?op=del&id=$mail' id='$mail' onclick='confirmar(this.id)'>
		<img src='images/del-24.png' alt='Delete icon'></a>";
		echo "<tr><td>$name</td><td>$mailLink</td><td>$delLink</td></tr>\n";
	}	
}
?>
</tbody>
</table>
<script type="text/javascript">
	function confirmar(id) {
		ok = confirm('Usuario: '+id+'\n¿Continuar con la eliminación?');
		if(!ok) event.preventDefault();
	}
</script>
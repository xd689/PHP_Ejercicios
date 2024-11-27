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
	$delLink = "<a href='admin.php?op=del&id=$mail' onclick='confirmar();'><img src='images/del-24.png' alt='Delete icon'></a>";
	echo "<tr><td>$name</td><td>$mailLink</td><td>$delLink</td></tr>\n";
}
?>
</tbody>
</table>
<script type="text/javascript">
	function confirmar() {
		confirm("¿Realmente desea borrar el usuario?");
	}
</script>
<pre>Resultados de la búsqueda</pre>
<table>
	<tbody>
		<tr><th>Prestamo</th><th>Interes</th><th>Plazo</th><th>Total</th></tr>
<?php

$list = getPrestamosById($_POST['mail']);
foreach ($list as $item) {
	$mail = $item['user'];
	$total = $item['total'];
    $interes= $item['interes'];
    $meses = $item['meses'];
    $c=($total*($interes/100)*pow(1+($interes/100),$meses))/(pow(1+($interes/100),$meses)-1);
	echo "<tr><td>$total</td><td>$interes%</td><td>$meses</td><td>".number_format($c,2)."</td></tr>\n";
}
?>
</tbody>
</table>
<script type="text/javascript">
	function confirmar() {
		confirm("¿Realmente desea borrar el usuario?");
	}
</script>
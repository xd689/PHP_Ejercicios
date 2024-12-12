<?php
$capital = $_REQUEST['cap'];
$interes = $_REQUEST['int'];
$meses = $_REQUEST['mes'];
$calculo = ($capital*($interes/12/100)*pow(1+($interes/12/100),$meses))/(pow(1+($interes/12/100),$meses)-1)
?>
<form action="admin.php" method="post">
	<input type="hidden" name="op" value="data">
	<input type="text" name="cap"  placeholder="Capital" value="<?php echo $capital ?>" required>
	<input type="text" name="int"  placeholder="Interes" value="<?php echo $interes ?>" required>
    <input type="text" name="mes"  placeholder="Plazo" value="<?php echo $meses ?>" required>
	<input type="submit" value="Calculo">
</form>

<h2>Mesualidad: <?php echo $calculo ?></h2>
<?php
$id = $_REQUEST['id'];
$list = getPrestamoByid($id);
print_r($list);
$mail = $list['user'];
$cap = $list['capital'];
$int = $list['interes'];
$mes = $list['periodicity']
?>

<form action="managers/userManager.php" method="post">
	<input type="hidden" name="op" value="edtp">
    <input type="hidden" name="id" value="<?php echo $id ?>">
	<input type="email" name="mail" value="<?php echo $mail ?>" required>
	<input type="text" name="capital"  value="<?php echo $cap ?>" required>
    <input type="text" name="interes"  value="<?php echo $int ?>" required>
    <input type="text" name="meses"  value="<?php echo $mes ?>" required>
	<input type="submit" value="Editar">
</form>
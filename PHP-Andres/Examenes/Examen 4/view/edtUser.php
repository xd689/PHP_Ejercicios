<?php
$user = $_GET['id'];
$list = getUserById($user);
print_r($list);
$mail = $list['user'];
$name = $list['name'];
?>

<form action="managers/userManager.php" method="post">
	<input type="hidden" name="op" value="upd">
    <input type="hidden" name="mail" value="<?php echo $mail ?>">
	<input type="email" name="newmail" value="<?php echo $mail ?>" required>
	<input type="text" name="name"  value="<?php echo $name ?>" required>
	<input type="submit" value="Editar">
</form>

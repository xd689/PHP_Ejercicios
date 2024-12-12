<?php
$list = getUserById($_POST['mail']);
$user = $list['user'];
$name = $list['name'];
?>
<form action="managers/userManager.php" method="post">
    <input type="hidden" name="op" value="upd">
    <input type="hidden" name="mail" value="<?php echo $user;?>">
    <input type="email" name="newmail" value='<?php echo $user;?>'></input>
    <input type="text" name="name" value='<?php echo $name;?>'></input>
    <input type="submit" value="Editar">
</form>
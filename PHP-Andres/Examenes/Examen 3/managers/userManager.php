<?php
require('../services/secureAdmAccess.php');
require_once('../dao/common.php');

$op = $_REQUEST['op'];

switch ($op) {
    case 'new':
        $link = getLink();
        $user = $_POST['mail'];
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $query = "INSERT INTO usuarios (user, pass, name, type) VALUES ('$user', '$pass', '$name', 'U')";
        try {
           mysqli_query($link, $query);
        } catch (Exception $e) {

        } finally {
            $numRows = mysqli_affected_rows($link);
            mysqli_close($link);
            $url = 'admin.php';
            $msg = ($numRows==1)? 'Usuario registrado correctamente':$e->getMessage();            
        }
        break;
    case 'del':
        $link = getLink();
        $user = $_POST['mail'];
        $query = "DELETE usuarios.* FROM usuarios WHERE usuarios.user='$user'";
        try {
            mysqli_query($link, $query);
         } catch (Exception $e) {
 
         } finally {
             $numRows = mysqli_affected_rows($link);
             mysqli_close($link);
             $url = 'admin.php';
             $msg = ($numRows==1)? 'Usuario borrado':$e->getMessage();            
         }
         break;
    case 'upd':
        $link = getLink();
        $user = $_POST['mail'];
        $newuser = $_POST['newmail'];
        $name = $_POST['name'];
        $query = "UPDATE usuarios SET usuarios.user='$newuser',usuarios.name='$name' WHERE usuarios.user='$user'";
        try {
            mysqli_query($link, $query);
         } catch (Exception $e) {
         } finally {
             $numRows = mysqli_affected_rows($link);
             mysqli_close($link);
             $url = 'admin.php';
             $msg = ($numRows==1)? 'Usuario Editado':$e->getMessage();            
         }
         break;
    case 'pres':
        $link = getLink();
        $user = $_POST['mail'];
        $prestamo = $_POST['prestamo'];
        $interes = $_POST['interes'];
        $meses = $_POST['meses'];
        $query = "INSERT INTO prestamos (user, total, interes, meses) VALUES ('$user', '$prestamo', '$interes', '$meses')";
        try {
            mysqli_query($link, $query);
         } catch (Exception $e) {
            echo "cagaste";
         } finally {
             $numRows = mysqli_affected_rows($link);
             mysqli_close($link);
             $url = 'admin.php';
             $msg = ($numRows==1)? 'Usuario Editado':$e->getMessage();            
         }
         break;
    default:
        sessionClose();
        $url = 'index.php';
        $msg = 'Sesión cerrada con éxito';
}
goToURL($url,$msg);

?>
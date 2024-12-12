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
        $query = "INSERT INTO users (user, pass, name, type) VALUES ('$user', '$pass', '$name', 'U')";
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
            $user = $_GET['id'];
            $query = "DELETE users.* FROM users WHERE users.user='$user'";
            try {
               mysqli_query($link, $query);
            } catch (Exception $e) {
    
            } finally {
                $numRows = mysqli_affected_rows($link);
                mysqli_close($link);
                $url = 'admin.php';
                $msg = ($numRows==1)? 'Usuario borrado correctamente':$e->getMessage();            
            }
            break;
        case 'edt':
            $link = getLink();
            $user = $_POST['mail'];
            $newuser = $_POST['newmail'];
            $name = $_POST['name'];
            $query = "UPDATE users SET users.user='$newuser',users.name='$name' WHERE users.user='$user'";
            try {
               mysqli_query($link, $query);
            } catch (Exception $e) {
    
            } finally {
                $numRows = mysqli_affected_rows($link);
                mysqli_close($link);
                $url = 'admin.php';
                $msg = ($numRows==1)? 'Usuario editado':$e->getMessage();            
            }
            break;
            
        
    default:
        sessionClose();
        $url = 'index.php';
        $msg = 'Sesión cerrada con éxito';
}
goToURL($url,$msg);

?>
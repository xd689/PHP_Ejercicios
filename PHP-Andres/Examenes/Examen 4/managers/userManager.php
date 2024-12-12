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
        $query = "DELETE FROM users WHERE users.user ='$user'";
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
    case 'upd':
        $link = getLink();
        $user = $_REQUEST['mail'];
        $newuser = $_REQUEST['newmail'];
        $name = $_REQUEST['name'];
        $query = "UPDATE users set users.user = '$newuser',users.name = '$name' WHERE users.user = '$user'";
        try {
           mysqli_query($link, $query);
        } catch (Exception $e) {

        } finally {
            $numRows = mysqli_affected_rows($link);
            mysqli_close($link);
            $url = 'admin.php';
            $msg = ($numRows==1)? 'Usuario editado correctamente':$e->getMessage();            
        }
        break;
    case 'edtp':
        $link = getLink();
        $id = $_REQUEST['id'];
        $user = $_REQUEST['mail'];
        $cap = $_REQUEST['capital'];
        $int = $_REQUEST['interes'];
        $mes = $_REQUEST['meses'];
        $query = "UPDATE loans SET loans.user = '$user', loans.capital = '$cap', loans.interes = '$int', loans.periodicity = '$mes' WHERE loans.idloan ='$id'";
        try {
           mysqli_query($link, $query);
        } catch (Exception $e) {

        } finally {
            $numRows = mysqli_affected_rows($link);
            mysqli_close($link);
            $url = 'admin.php';
            $msg = ($numRows==1)? 'Prestamo editado':$e->getMessage();            
        }
    break;
    case 'dpre':
        $link = getLink();
        $id = $_REQUEST['id'];
        $query = "DELETE FROM loans WHERE loans.idloan ='$id'";
        try {
           mysqli_query($link, $query);
        } catch (Exception $e) {

        } finally {
            $numRows = mysqli_affected_rows($link);
            mysqli_close($link);
            $url = 'admin.php';
            $msg = ($numRows==1)? 'Prestamo eliminado':$e->getMessage();            
        }
    break;
    case 'pres':
        $link = getLink();
        $user = $_REQUEST['mail'];
        $capital = $_REQUEST['cap'];
        $interes = $_REQUEST['int'];
        $periodicity = $_REQUEST['mes'];
        $years = 1;
        $query = "INSERT INTO loans (user, capital,interes,years,periodicity) VALUES ('$user','$capital','$interes','$years','$periodicity')";
        try {
           mysqli_query($link, $query);
        } catch (Exception $e) {

        } finally {
            $numRows = mysqli_affected_rows($link);
            mysqli_close($link);
            $url = 'admin.php';
            $msg = ($numRows==1)? 'Prestamo creado':$e->getMessage();            
        }
        break;
    default:
        sessionClose();
        $url = 'index.php';
        $msg = 'Sesión cerrada con éxito';
}
goToURL($url,$msg);

?>
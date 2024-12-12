<?php

require_once('../services/secure.php');
require_once('../dao/common.php');

function createSession($user, $name, $type='U') {
    session_start();
    session_id();
    $_SESSION['user'] = $user;
    $_SESSION['name'] = $name;
    $_SESSION['type'] = $type;
    $_SESSION[SESSIONKEY] = true;
}


$op = $_REQUEST['op'];

switch ($op) {
    case 'in':
        $link = getLink();
        $user = $_POST['mail'];
        $pass = $_POST['pass'];
        $query = "SELECT users.* FROM users WHERE users.user='$user'";
        $result = mysqli_query($link, $query);
        mysqli_close($link);        
        $row = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        if(password_verify($pass, $row['pass'])) {
            //(condicion)? true:false
            createSession($row['user'],$row['name'],$row['type']);
            $url = ($row['type']=='U')? 'start.php':'admin.php';
            $msg = 'Bienvenid@ '.$row['name'];
        } else {
            $url = 'index.php';
            $msg = 'Contraseña o usuario incorrectos';
        }
        break;
        
    default:
        sessionClose();
        $url = 'index.php';
        $msg = 'Sesión cerrada con éxito';
}
goToURL($url,$msg);

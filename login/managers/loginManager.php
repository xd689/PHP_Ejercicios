<?php
require_once('../dao/mysql.php');

$op = $_REQUEST['op'];

switch ($op) {
    case 'in':
        $link = getLink();
        $user = $_POST['mail'];
        $pass = $_POST['pass'];
        $query = "SELECT users.user FROM users WHERE users.user='$user' AND users.pass='$pass'";
        $result = mysqli_query($link, $query);
        mysqli_close($link);
        if(mysqli_num_rows($result)==1) {
            // log in
            $url = 'start.php';
            $msg = 'Bienvenid@';
            // inicio sesión
        } else {
            // goto index
            $url = 'index.php';
            $msg = 'Contraseña o usuario incorrectos';
        }
        mysqli_free_result($result);
        // construyo cadena de caracteres
        $getToPost = "../services/getToPost.php?url=$url&msg=$msg";
        header("Location: $getToPost");    
        exit;        
        break;
        
    default:
        $url = 'index.php';
        $msg = 'Sesión cerrada con éxito';
        $getToPost = "../services/getToPost.php?url=$url&msg=$msg";
        header("Location: $getToPost");    
        exit;            
        break;
}
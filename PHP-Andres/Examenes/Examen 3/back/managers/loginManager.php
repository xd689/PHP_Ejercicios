<?php

require_once('../dao/mysql.php');
$op = $_REQUEST['op'];

switch ($op){
    case 'in':
        $link = getLink();
        $user = $_POST['mail'];
        $pass = $_POST['pass'];
        $query = "SELECT usuarios.user FROM usuarios WHERE usuarios.user='$user' AND usuarios.pass='$pass'";
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
        $getToPost = "../services/getToPost.php?url=$url&msg=$msg";
        header("Location: $getToPost");
        break;
    default:
        $url = 'index.php';
        $msg = 'Contraseña o usuario incorrectos';
        $getToPost = "../services/getToPost.php?url=$url&msg=$msg";
        header("Location: $getToPost");
        break;
}
  
exit;

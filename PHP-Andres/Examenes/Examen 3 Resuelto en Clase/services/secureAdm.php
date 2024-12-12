<?php
session_start();
$isAdmin = ($_SESSION['type']=='A')? true:false;
if(!$isAdmin) {
    sessionClose();
    gotoURL('index.php','Recurso restringido',$fromView);    
}
?>
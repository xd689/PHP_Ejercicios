<?php
require_once('secure.php');

// In order to avoid access from file directly
$fromView = str_contains($_SERVER['SCRIPT_NAME'], 'service')? false:true;
sessionCheck($fromView);

function getUser() {
    session_start();
    return array('user' => $_SESSION['user'],'name' => $_SESSION['name'],'type' => $_SESSION['type']);    
}
?>
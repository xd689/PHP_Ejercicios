<?php
require_once('common.php');

function getUserById_DAO($id) {
	$query = "SELECT usuarios.user, usuarios.name FROM usuarios WHERE usuarios.user='$id'";
	return executeQuery($query);
}

function getUsers_DAO() {
	$query = "SELECT usuarios.user, usuarios.name FROM users";
	return executeQuery($query);
}

function userSearch_DAO($textToSearch) {
	$query = "SELECT usuarios.user, usuarios.name FROM usuarios WHERE usuarios.user LIKE '%$textToSearch%'";
	return executeQuery($query);
}
function getPrestamosById_DAO($id){
	$query = "SELECT prestamos.user, prestamos.total,prestamos.meses,prestamos.interes FROM prestamos WHERE prestamos.user='$id'";
	return executeQuery($query);
}
?>
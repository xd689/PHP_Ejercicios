<?php
require_once('common.php');

function getUserById_DAO($id) {
	$query = "SELECT users.user, users.name FROM users WHERE users.user='$id'";
	return executeQuery($query);
}

function getUsers_DAO() {
	$query = "SELECT users.user, users.name FROM users";
	return executeQuery($query);
}

function userSearch_DAO($textToSearch) {
	$query = "SELECT users.user, users.name FROM users WHERE users.user LIKE '%$textToSearch%' AND users.type='U'";
	return executeQuery($query);
}

function prestamoList_DAO($textToSearch){
	$query = "SELECT loans.idloan,loans.user, loans.capital,loans.interes ,loans.periodicity FROM loans WHERE loans.user LIKE '%$textToSearch%'";
	return executeQuery($query);
}

function getPrestamoByid_DAO($id){
	$query = "SELECT loans.user,loans.capital,loans.interes,loans.periodicity FROM loans WHERE loans.idloan ='$id'";
	return executeQuery($query);
}
?>
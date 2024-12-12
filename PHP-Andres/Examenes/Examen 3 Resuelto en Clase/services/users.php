<?php
require_once('secureAccess.php');
require_once('dao/daoUsers.php');


function getUserById($id) {
	return getUserById_DAO($id)[0];
}

function getUsers() {
	return getUsers_DAO();
}

function userSearch($textToSearch) {
	return userSearch_DAO($textToSearch);
}

?>
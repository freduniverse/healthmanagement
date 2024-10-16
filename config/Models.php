<?php
include "CRUD.php";
include "functions.php";

function account() {
	$crud = new CRUD;
	$crud->table = "account";
	return $crud;
}

function appointment() {
	$crud = new CRUD;
	$crud->table = "appointment";
	return $crud;
}

?>

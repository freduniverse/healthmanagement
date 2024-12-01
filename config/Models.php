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

function urinalysis() {
	$crud = new CRUD;
	$crud->table = "urinalysis";
	return $crud;
}

function cbc() {
	$crud = new CRUD;
	$crud->table = "cbc";
	return $crud;
}

function lipid() {
	$crud = new CRUD;
	$crud->table = "lipid";
	return $crud;
}

?>

<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

	case 'account-save' :
		account_save();
		break;

	case 'account-delete' :
		account_delete();
		break;

	case 'patient-save' :
		patient_save();
		break;
		

	case 'appointment-save' :
		appointment_save();
		break;


	default :
}


function account_delete(){

	$Id = $_GET["Id"];
	$model = account();
	$model->obj["isDeleted"] = 1;
	$model->update("Id=$Id");

	header('Location: ' . $_GET["url"] . '&success=Account Successfully Deleted');
}

function account_save(){
	#Process to save to the database

	$model = account();
	$model->obj["username"] = $_POST["username"];
	$model->obj["firstName"] = $_POST["firstName"];
	$model->obj["lastName"] = $_POST["lastName"];
	$model->obj["role"] = $_POST["role"];
	$model->obj["dateAdded"] = "NOW()";


	if ($_POST["form-type"] == "add") {
		$model->obj["password"] = $_POST["password"];
		$model->create();
	}

	if ($_POST["form-type"] == "edit") {
		$Id = $_POST["Id"];
		$model->update("Id=$Id");
	}

	header('Location: accounts.php?role=' . $_POST["role"]);
}


function patient_save(){
	#Process to save to the database

	$model = account();
	$model->obj["username"] = $_POST["username"];
	$model->obj["firstName"] = $_POST["firstName"];
	$model->obj["lastName"] = $_POST["lastName"];
	$model->obj["birthday"] = $_POST["birthday"];
	$model->obj["sex"] = $_POST["sex"];
	$model->obj["phone"] = $_POST["phone"];
	$model->obj["email"] = $_POST["email"];
	$model->obj["address"] = $_POST["address"];
	$model->obj["city"] = $_POST["city"];
	$model->obj["role"] = "Patient";
	$model->obj["dateAdded"] = "NOW()";


	if ($_POST["form-type"] == "add") {
		$model->obj["password"] = $_POST["password"];
		$model->create();
	}

	if ($_POST["form-type"] == "edit") {
		$Id = $_POST["Id"];
		$model->update("Id=$Id");
	}

	header('Location: index.php?success=Added new patient');
}




function appointment_save(){
	#Process to save to the database

	$model = appointment();
	$model->obj["doctorId"] = $_POST["doctorId"];
	$model->obj["patientId"] = $_POST["patientId"];
	$model->obj["dateAdded"] = "NOW()";
	$model->obj["purpose"] = $_POST["purpose"];


	if ($_POST["form-type"] == "add") {
		$model->create();
	}

	if ($_POST["form-type"] == "edit") {
		$Id = $_POST["Id"];
		$model->update("Id=$Id");
	}

	header('Location: index.php?success=Added new appointment');
	// print_r($_POST);
}
